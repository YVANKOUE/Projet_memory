<?php

namespace App\Http\Controllers;

use App\City;
use App\faculty;
use App\School;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('admin.ListeUniversités')->with('schools' , $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string','max:255', 'unique:users'],
            'description' => ['string', 'max:255'],
            'logo' => ['required', 'string', 'max:255'],
            'localisation' => [ 'string', 'max:255'],
            'Devenir' => [ 'string', 'max:255'],
            'TypeUniversité' => [ 'string', 'max:255'],
        ]);
    }
    public function create(Request $request)
    {
        $logo = $request->file('logo');
        if($logo == ""){
           $logo = "Profil.png";
        }else{
            $logoName = $logo->getClientOriginalName(); 
            $request->logo->storeAs('vendors/images', $logoName, 'public');
            $logo = $logoName;
        }
    $filiéres = $request->filiéres;
    $city = City::select('id')->where('name', $request->ville)->first();
    $school = School::create([
        'name' => $request['name'],
        'langue_formation' => $request['langue_formation'],
        'description' => $request['description'],
        'logo' => $logo,
        'localisation' => $request['localisation'],
        'TypeUniversité' => $request['TypeUniversité'],
        'city_id' => $city->id,
    ]); 
    //On récupére toutes les filiéres coché et on les attache a l'ecole créé
        foreach($filiéres as $filiére){
            $newfiliére = faculty::select('id')->where('id', $filiére)->first();
            $school->faculties()->attach($newfiliére);
        }
    return redirect()->route('school.index')->with('status', 'Université a été ajouté avec success!');
    
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
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
    dd('lil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    { 
        $filiéres = faculty::all();
        return view('admin.universités.edit',[
        'school' => $school ,
        'filiéres' => $filiéres,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $logo = $request->file('logo');
        if($logo == ""){
           $logo = "Profil.png";
        }else{
            $logoName = $logo->getClientOriginalName(); 
            $request->logo->storeAs('vendors/images', $logoName, 'public');
            $logo = $logoName;
        }
        $school->name = $request->name;
        $school->localisation = $request->localisation;
        $school->description = $request->description;
        $school->logo = $logo;
        $school->TypeUniversité = $request->TypeUniversité;
        $school->langue_formation = $request->langue_formation;
        $city = City::select('id')->where('name', $request->ville)->first();
        $school->city_id = $city->id ;
        $school->save();
    // DB::table('cities')->where('id', $school->city_id)->update(['name' => $request['ville']]);
       return redirect()->route('school.index')->with('status', 'Informations modifier !');
 }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        if(Gate::denies('delete-school'))//si l'utilisateur n'est pas un admit il ne peux pas edit et on lui redirige vers notre page d'accueil
        { 
            return redirect()->route('school.index');
        }
        $school_Sup = $school->name;
        $school->delete();
        return redirect()->route('school.index')->with('status', 'utilisateur  '.$school_Sup.' a été supprimé');   }
    }
