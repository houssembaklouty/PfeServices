<?php

namespace App\Http\Controllers\Client;

use App\Notifications\NotifUserProposition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;
use App\Jobeur;
use App\Client;
use App\Models\Demende;
use App\Models\Post;
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
        $this->middleware('client.auth:client');
    }

    /**
     * Show the Client dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $categories = Categorie::orderBy('nom', 'asc')->get();
        $posts = Post::with(['catgeory', 'service_relation', 'propositions', 'propositions.jobeur'])
                        ->orderBy('created_at', 'desc')
                        ->get();

        //dd($posts);

        return view('client.home', compact('categories', 'posts'));
    }

    public function jobs() {

        $client = Auth::guard('client')->user();

        $posts = Post::where('client', $client->id)
                    ->with(['catgeory', 'service_relation', 'propositions', 'propositions.jobeur'])
                    ->orderBy('created_at', 'desc')
                    ->get();

        //dd($posts);

        return view('client.jobs', compact('posts'));
    }

    public function profile() {

        return view('client.profile');
    }

    public function profileAccountSetting() {

        return view('client.profile-account-settings');
    }

    public function jobeur_profile($id) {

        $jobeur = Jobeur::find($id);

        return view('client.jobeur_profile', compact('jobeur'));
    }

    public function propositionChangeState(Request $request) {

        $demende = Demende::where('id', $request->id)->first();

        $demende->update(['etat' => $request->etat]);

        $jobeur = Jobeur::where('id', $demende->id_jobeur)->first();

        if($request->etat == 1) { $msg = "votre demande a été accepté"; }
        else { $msg = "votre demande a été refusé"; }

        $notifData = [
            'proposition' => $demende['proposition'],
            'price' => $demende['price'],
            'jobeur' => $jobeur->name,
            'msg' => $msg,
        ];

        $jobeur->notify(new NotifUserProposition($notifData));

        return back();
    }

    public function deactivateAccountSetting(Request $request) {

        $thisClient = Auth::guard('client')->user();

        $updateThisClient = Client::where('id', $thisClient->id)->update(['active' => $request->active]);

        return back();
    }

    public function editProfile(Request $request) {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $thisClient = Auth::guard('client')->user();

        if(!is_null($request->profil_img)) {

            $extension = $request->profil_img->getClientOriginalExtension();
            $filename = time().rand(10, 1000).'.'.$extension;
            $request->profil_img->move(public_path('images/profil'), $filename);

            $request->profil_img = $filename;
        }
        else {
            $request->profil_img = $thisClient->profil_img;
        }

        $updateThisClient = Client::where('id', $thisClient->id)
                            ->update([
                                'name' => $request->name,
                                'email' => $request->email,
                                'tel' => $request->tel,
                                'profil_img' => $request->profil_img,
                            ]);

        return back();
    }
}
