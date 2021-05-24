<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class HomeadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbs = DB::table('schools')->count();
        $nbr = DB::table('users')->count();
        $nbF = DB::table('faculties')->count();
        $nbE = DB::table('schools')->count();
        return view('admin.home2')->with([
            'nbs' =>$nbs,
            'nbr' => $nbr,
            'nbF' => $nbF,
            'nbE' => $nbE
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'avatars' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $avatar = $request->file('avatars');
        if($avatar == ""){
           $avatar = "Profil.png";
        }else{
            $avatarName = $avatar->getClientOriginalName(); 
            
            // $destinationPath =  public_path().'/vendors/images/';
            $request->avatars->storeAs('vendors/images', $avatarName, 'public');
            $avatar = $avatarName;
            // $avatar->store('avatar');
        }
        $user =  User::create([
            'name_user' => $request['name'],
            'email' => $request['email'],
            'avatars' => $avatar,
            'password' => Hash::make($request['password']),
        ]);
            // Assign a  role for new user
        $role = Role::select('id')->where('name', $request->role)->first();
        $user->roles()->attach($role);  
        return redirect()->route('admin.users.index')->with('status', 'Utilisateur a était ajouté avec success!');
      
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
