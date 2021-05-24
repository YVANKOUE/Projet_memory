<?php

namespace App\Http\Livewire;

use App\City;
use App\Metier;
use App\Serie;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BacWithJob extends Component
{
    public $series;
    public $cities;
    public $first_jobs;
    public $second_jobs;
    public $serie;
    public $metier;

    
    // public $jobs;

    public $selectedSerie = null;
    public $selectedFirstmetier = null;
    public $selectedSecondmetier = null;
    

    public function mount()
    {
        $this->series = Serie::all();
        $this->first_jobs = collect();
        $this->second_jobs = collect();
        $this->cities = City::all();
    }

   
    
    public function render()
    {
        return view('livewire.bac-with-job');
    }
    public function updatedSelectedSerie($serie)
    {
        if (!is_null($serie)) { 
            $jobs_series = DB::table('metier_serie')->where('serie_id', $serie)->pluck('metier_id')->toArray();
            $this->first_jobs = Metier::whereIn('id', $jobs_series)->get();
            $this->second_jobs = Metier::whereIn('id', $jobs_series)->get();
            // dd($this->first_jobs);
        }
    }
    public function updatedSelectedFirstmetier($metier)
    {
        // dd($this->selectedSerie);
        if (!is_null($metier)) { 
            // dd($metier);
            $jobs_series = DB::table('metier_serie')->where('serie_id', $this->selectedSerie)->pluck('metier_id')->toArray();
            // dd($jobs_series);
            $jobs = Metier::where('id', '!=', $metier)->pluck('id')->toArray();
            // dd($jobs);
            $this->second_jobs = Metier::whereIn('id', $jobs_series)
            ->whereIn('id',$jobs)
            ->get();
            // dd($this->second_jobs);
        }
    }

    public function updatedSelectedSecondmetier($metier)
    {
        // dd($this->selectedSerie);
        if (!is_null($metier)) { 
            // dd($metier);
            $jobs_series = DB::table('metier_serie')->where('serie_id', $this->selectedSerie)->pluck('metier_id')->toArray();
            // dd($jobs_series);
            $jobs = Metier::where('id', '!=', $metier)->pluck('id')->toArray();
            // dd($jobs);
            $this->first_jobs = Metier::whereIn('id', $jobs_series)
            ->whereIn('id',$jobs)
            ->get();
            // dd($this->second_jobs);
        }
    }
}
