<?php

namespace App\Http\Controllers\Jobeur\Auth;

use App\Jobeur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect jobeurs after registration.
     *
     * @var string
     */
    protected $redirectTo = '/jobeur';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jobeur.guest:jobeur');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:jobeurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tel' => ['required'],
            'profil_img' => ['required'],
            'cin_img' => ['required'],
            'note' => ['required'],
        ]);

    }

    /**
     * Create a new jobeur instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Jobeur
     */
    protected function create(array $data)
    {
        if(!is_null($data['profil_img'])){

            $extension = $data['profil_img']->getClientOriginalExtension();
            $filename = time().rand(10, 1000).'.'.$extension;
            $data['profil_img']->move(public_path('images/profil'), $filename);

            $data['profil_img'] = $filename;
        }

        if(!is_null($data['cin_img'])){

            $extension = $data['cin_img']->getClientOriginalExtension();
            $filename = time().rand(10, 1000).'.'.$extension;
            $data['cin_img']->move(public_path('images/cin'), $filename);

            $data['cin_img'] = $filename;
        }

        return Jobeur::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'profil_img' => $data['profil_img'],
            'cin_img' => $data['cin_img'],
            'note' => $data['note'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('jobeur.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('jobeur');
    }
}
