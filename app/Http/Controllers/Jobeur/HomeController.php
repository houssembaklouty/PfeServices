<?php

namespace App\Http\Controllers\Jobeur;

use App\Http\Requests\CreateDemendeRequest;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Service;
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

    public function propositionStore(CreateDemendeRequest $request)
    {
        $input = $request->all();

        $demende = Demende::create($input);

        return back();
    }
}
