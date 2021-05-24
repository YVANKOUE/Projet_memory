<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Student;
use App\Categorie;
use App\Orientationstudents;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Serie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'domain' => ['required', 'string', 'max:255'],
            'BAC' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'metier' => ['required', 'string', 'max:255'],
            'type_ecole' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   
    protected function create(array $data)
    {
        $user =  User::create([
            'name_user' => $data['name'],
            'email' => $data['email'],
            'avatars' => "Profil.png",
            'password' => Hash::make($data['password']),
        ]);
        $role = Role::select('id')->where('name', 'utilisateur')->first(); //selectionne l'id du premier users qui a le role d'utilisateur
        $user->roles()->attach($role);//permet d'attacher notre newuser a notre table role        

    }
}
