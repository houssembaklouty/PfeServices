<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Service;
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
}
