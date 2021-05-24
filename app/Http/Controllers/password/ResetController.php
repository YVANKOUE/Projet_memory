<?php

namespace App\Http\Controllers\password;

use App\City;
use App\User;
use App\faculty;
use App\ddiplome;
use App\rdiplome;
use App\Orientation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\School;

class ResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = City::all();
        $filiéres = faculty::all();
        return view('admin.universités.create')->with([
            'filiéres' => $filiéres,
            'villes' => $villes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $nbr = DB::table('users')->count();
        $users = User::all();
        return view('admin.home', [
            'users' => $users,
            'nbr' => $nbr
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'metier' => 'required',
            'personne' => 'required',
        ]);
            $i =0;
            $j =0;
            $personne = $request['personne'];
            $metier = $request['metier'];
            $all = DB::table('schools')->select('id')->get()->toArray();
            foreach ($all as $value) {
                $array1[] = (array)$value;
            }
            // dd($all);
            // dd($array1);
            $BAC =$request['BAC'];
            $id_BAC = DB::table('series')->where('name' , $BAC)->pluck('id')->first();
            $school_bac = DB::table('school_serie')->select('school_id')->where('serie_id',$id_BAC)->get()->toArray();
            // dd($school_bac);
            foreach ($school_bac as $value) {
                $array2[] = (array)$value;
            }
            // dd($array);
           
            $id_m = DB::table('metiers')->where('name' , $metier)->pluck('id')->first();
            $school_metiers = DB::table('metier_school')->select('school_id')->where('metier_id',$id_m)->get()->toArray();
            foreach ($school_metiers as $value) {
                $array[] = (array)$value;
            }
            
            $P_schools = DB::table('schools')
            ->whereIn('id' , $array)
            ->where('localisation',$request['ville'])
            ->get()
            ->toArray();
            $D_schools = DB::table('schools')
            ->whereNotIn('id' , $array)
            ->whereIn('id' , $array2)
            ->where('localisation',$request['ville'])
            ->get()
            ->toArray();
            // dd($P_schools);
            //    dd([$school_metiers , $school_metiers_res]);
            return view('Front.Orientation.result_orien_non')->with([
                'personne' => $personne,
                'BAC' => $BAC,
                'metier' => $metier,
                'P_schools' => $P_schools,
                'D_schools' => $D_schools
            ]);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $faculty = faculty::where('id' , $id)->first();
    //  dd($faculty->name);
     $school_serie = DB::table('school_serie')->where('school_id' , $id)->get()->toArray();
    
     foreach ($school_serie as $value) {
        $array[] = (array)$value;
    }
    // dd($school_serie);
     $BAC = DB::table('series')->select('name')
            ->whereIn('id' ,$array)
            ->get()
            ->toArray();
            foreach ($BAC as $value) {
                $array2[] = (array)$value;
            }
      return view('Front.Orientation.profil_filiéres')->with([
            'faculty' => $faculty,
            'array2' => $array2
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $facultie = faculty::where('id', '=',$id)->first();
        return view('admin.Filières.editFiliére')->with('facultie' , $facultie); //
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
