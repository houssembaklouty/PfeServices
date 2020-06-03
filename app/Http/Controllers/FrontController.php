<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;
use App\Models\Post;
use App\Jobeur;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/home');
    }

    public function categories()
    {
        $categories = Categorie::orderBy('nom', 'asc')->get();

        return view('frontend/categories', compact('categories'));
    }

    public function jobeurs_profiles()
    {
        $jobeurs = Jobeur::all();

        // dd($jobeurs);

        return view('frontend/jobeurs_profile', compact('jobeurs'));
    }

    public function getServices(Request $request)
    {
      //sleep(5);

        $data = Service::select('nom','id')
                        ->where('categorie_id',$request->id)
                        ->take(100)
                        ->get()
        ;

        return response()->json($data);
    }

    public function postStore(CreatePostRequest $request)
    {
        $input = $request->all();

        $post = Post::create($input);

        return back();
    }

    public function show_categorie()
    {
        $categories = Categorie::with('services')->orderBy('nom', 'asc')->get();

        dd($categories);

        return view('frontend/categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
