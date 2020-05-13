<?php

namespace App\Http\Controllers\Jobeur;

use App\Http\Controllers\Controller;

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
        return view('jobeur.home');
    }
}
