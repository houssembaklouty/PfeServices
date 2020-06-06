<?php

namespace App\Http\Controllers\Client;

use App\Notifications\NotifUserProposition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;
use App\Jobeur;
use App\Models\Demende;
use App\Models\Post;

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
}
