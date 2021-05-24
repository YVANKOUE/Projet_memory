<?php

namespace App\Http\Controllers\admin;

use App\faculty;
use Laravel\Ui\Presets\Vue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FilièresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string','max:255', 'unique:users'],
            'logo' => ['required', 'string', 'max:255'],
            'Diplome_requis' => [ 'string', 'max:255'],
            'Déboucher' => [ 'string', 'max:255'],
        ]);
    }
    public function index()
    {
        $faculties = faculty::all();
        return view('admin.filières.Listefilières')->with('faculties' , $faculties);
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
        $logo = $request->file('logo');
        if($logo == ""){
           $logo = "Profil.png";
        }else{
            $logoName = $logo->getClientOriginalName(); 
            
            // $destinationPath =  public_path().'/vendors/images/';
            $request->logo->storeAs('vendors/images', $logoName, 'public');
            $logo = $logoName;
            // $avatar->store('avatar');
        }
       faculty::create([
            'name' => $request['name'],
            // 'déboucher' => $request['déboucher'],
            // 'diplome_requis' => $request['Diplome_requis'],
            'img' => $logo,
        ]); 
        return redirect()->route('admin.filières.index');
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
