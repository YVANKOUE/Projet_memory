<?php

namespace App\Http\Controllers\Front;

use App\City;
use App\User;
use stdClass;
use App\Serie;
use App\Metier;
use App\School;
use App\faculty;
use App\Matiere;
use App\Student;
use App\Orientation;
use App\Orientationstudents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;


class OrientationController extends Controller
{
   
    /**P_metier
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $filiéres = faculty::all();
        $cities = City::all();
        $series = Serie::all();
        $metiers = Metier::all();
        $matieres = Matiere::all();
        // $metiers = DB::table('schools')->select('devenir')->get();
        
           return view('Front.Orientation.FormulaireOrien') ->with([
                'filiéres'=> $filiéres,
                'cities'=> $cities,
                'series'=> $series,
                'metiers' => $metiers,
                'matieres' => $matieres
            ]);
       
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Front.Form.listOrientation');        
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
                'P_metier' => 'required',
                'D_metier' => 'required',
            ]);
            $i =0;
            $j =0;
            $BAC_r =$request['BAC'];
            // dd($BAC);
            $BAC = DB::table('series')->where('id',$BAC_r)->pluck('name')->first();
            // dd($BAC);
            $ville =$request['country'];
            // $city = City::select('id')->where('name', $request['country'])->first(); 
            // $orientation =  Orientation::create([
            //       'BAC' => $BAC,
            //       'country' => $ville,
            //       'metier' => $request['D_metier'],
            //       'type_ecole' => $request['type_ecole'],
            //       'city_id'=>$city['id'],
            //   ]);
            //   dd($BAC);
            //   $student = Orientation::where('id', '=',$orientation->id)->first();
              if ($request['type_ecole'] == "") {
                $P_metier = $request['P_metier'];
            $D_metier = $request['D_metier'];
            // dd($P_metier);
            // $ids_m = DB::table('metiers')->select('id')->where('name', $D_metier)->first();
            // dd($D_metier);
            $school_metiers = DB::table('metier_school')->select('school_id')->where('metier_id',$D_metier )->get()->toArray();
            // dd($school_metiers);
            foreach ($school_metiers as $value) {
                $array[] = (array)$value;
            }
            // dd($array);
            // $ids_m2 = DB::table('metiers')->select('id')->where('name', $P_metier)->first();
            // dd($ids_m2);
            $school_metiers = DB::table('metier_school')->select('school_id')->where('metier_id',$P_metier)->get()->toArray();
            foreach ($school_metiers as $value) {
                $array2[] = (array)$value;
            }
            // $ids_b = DB::table('series')->select('id')->where('name', $request['BAC'])->first();
            // dd($array);
            $school_serie = DB::table('school_serie')->select('school_id')->where('serie_id',$BAC_r)->get()->toArray();            
            foreach ($school_serie as $value) {
                $table[] = (array)$value;
            }
            // dd($table);
            $D_schools = DB::table('schools')
            ->whereIn('id' ,$array)
            ->whereIn('id' ,$table)
            ->where('localisation',$request['country'])
            ->get()
            ->toArray();
                // dd($P_schools);
            $P_schools = DB::table('schools')
            ->whereIn('id' ,$array2)
            ->whereIn('id' ,$table)
            ->where('localisation',$request['country'])
            ->get()
            ->toArray();
        return view('Front.Orientation.resultOrientation')->with([
            // 'student' => $student,
            'D_metier' => $D_metier,
            'D_schools' => $D_schools,
            'P_metier' => $P_metier,
            'i' => $i,
            'j' => $j,
            'BAC' => $BAC,
            'ville' => $ville,
            'P_schools' => $P_schools,
    ]);
        }else{
            $P_metier = $request['P_metier'];
            $D_metier = $request['D_metier'];
            // dd($P_metier);
            // $ids_m = DB::table('metiers')->select('id')->where('name', $D_metier)->first();
            // dd($ids_m->id);
            $school_metiers = DB::table('metier_school')->select('school_id')->where('metier_id',$D_metier)->get()->toArray();
            // dd($school_metiers);
            foreach ($school_metiers as $value) {
                $array[] = (array)$value;
            }
            // $ids_m2 = DB::table('metiers')->select('id')->where('name', $P_metier)->first();
            // dd($ids_m2);
            $school_metiers = DB::table('metier_school')->select('school_id')->where('metier_id', $P_metier)->get()->toArray();
            foreach ($school_metiers as $value) {
                $array2[] = (array)$value;
            }
            // $ids_b = DB::table('series')->select('id')->where('name', $request['BAC'])->first();
            // dd($array);
            $school_serie = DB::table('school_serie')->select('school_id')->where('serie_id',$BAC_r)->get()->toArray();            
            foreach ($school_serie as $value) {
                $table[] = (array)$value;
            }
            // dd($table);
            $D_schools = DB::table('schools')
            ->whereIn('id' ,$array)
            ->whereIn('id' ,$table)
            ->where('TypeUniversité' , $request['type_ecole'])
            ->where('localisation',$request['country'])
            ->get()
            ->toArray();
                // dd($P_schools);
            $P_schools = DB::table('schools')
            ->whereIn('id' ,$array2)
            ->whereIn('id' ,$table)
            ->where('TypeUniversité' , $request['type_ecole'])
            ->where('localisation',$request['country'])
            ->get()
            ->toArray();
        return view('Front.Orientation.resultOrientation')->with([
            // 'student' => $student,
            'D_metier' => $D_metier,
            'D_schools' => $D_schools,
            'P_metier' => $P_metier,
            'i' => $i,
            'j' => $j,
            'BAC' => $BAC,
            'ville' => $ville,
            'P_schools' => $P_schools,
    ]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $i = 0;
            $school = DB::table('schools')->where('id',$id)->first();
            $faculty_school = DB::table('faculty_school')->select('faculty_id')->where('school_id',$id)->get()->toArray();            
            foreach ($faculty_school as $value) {
                $table[] = (array)$value;
            }
            // dd($table);
            $faculties = DB::table('faculties')
            ->whereIn('id' ,$table)
            // ->where('TypeUniversité' , $request['type_ecole'])
            ->get()
            ->toArray();
            return view('Front.Orientation.faculty_school')->with([
                'i' => $i,
                'school' => $school,
                'faculties' => $faculties
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
