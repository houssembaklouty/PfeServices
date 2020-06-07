<?php

namespace App\Http\Controllers\Jobeur;

use App\Notifications\NotifUserProposition;
use App\Http\Requests\CreateDemendeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;
use App\Models\Demende;
use App\Models\Post;
use App\Jobeur;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jobeur.auth:jobeur');
    }

    /**
     * Show the Jobeur dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $categories = Categorie::orderBy('nom', 'asc')->get();
        $posts = Post::with(['catgeory', 'service_relation', 'propositions', 'propositions.jobeur'])
                        ->orderBy('created_at', 'desc')
                        ->get();

        // dd($posts);

        return view('jobeur.home', compact('categories', 'posts'));
    }

    public function profile() {

        return view('jobeur.profile');
    }

    public function profileAccountSetting() {

        return view('jobeur.profile-account-settings');
    }

    public function propositionDestroy (Request $request) {

        $demende = Demende::where('id', $request->id)->delete();

        return back();
    }

    public function propositionStore(CreateDemendeRequest $request)
    {
        $input = $request->all();

        $demende = Demende::create($input);

        $post = Post::where('id', $input['id_post'])->with('client_relation')->first();

        $jobeur = Jobeur::where('id', $input['id_jobeur'])->first();

        $user = $post->client_relation;

        $notifData = [
            'proposition' => $input['proposition'],
            'price' => $input['price'],
            'jobeur' => $jobeur->name,
        ];

        $user->notify(new NotifUserProposition($notifData));

        return back();
    }


    public function deactivateAccountSetting(Request $request) {

        $thisJobeur = Auth::guard('jobeur')->user();

        $updateThisJobeur = Jobeur::where('id', $thisJobeur->id)->update(['active' => $request->active]);

        return back();
    }

    public function editProfile(Request $request) {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $thisJobeur = Auth::guard('jobeur')->user();

        if(!is_null($request->profil_img)) {

            $extension = $request->profil_img->getClientOriginalExtension();
            $filename = time().rand(10, 1000).'.'.$extension;
            $request->profil_img->move(public_path('images/profil'), $filename);

            $request->profil_img = $filename;
        }
        else {
            $request->profil_img = $thisJobeur->profil_img;
        }

        $updateThisJobeur = Jobeur::where('id', $thisJobeur->id)
                            ->update([
                                'name' => $request->name,
                                'email' => $request->email,
                                'tel' => $request->tel,
                                'profil_img' => $request->profil_img,
                            ]);

        return back();
    }
}
