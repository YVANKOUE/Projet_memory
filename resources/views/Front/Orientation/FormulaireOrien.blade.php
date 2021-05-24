@extends('layouts.app')

@section('title') | Make an orientation @endsection

@section('content')
<br><br><br><br><br><br><br>
<section  style="background-color:#f1f6fe" id="account" aria-labelledby="account-tab" role="tabpanel" class="services">
    <div  data-aos="fade-up">
      <div class="section-title">
        <h2>Orientation</h2>
        <h3>Make an<span> Orientation</span></h3>
        <p>Please fill in the following information to get your orientation</p>
      </div>
        <section class="component-fade container icon-bo p-5" style="border-radius: 10px 10px 10px 10px;" id="forme1">
            <h3>Did you know what you want to do in the future ?</h3>
            <div class="col-12 justify-content-end mt-3">
                <button type="button" class="btn btn glow " id="NON" style="font-size: 18px;height:40px;color:white; background-color:#106eea;" >NON</button>
                <button type="button"  class="btn btn-outline-warning" id="OUI" style="font-size: 18px; height:40px;">OUI</button>
            </div>
        </section>
        <section class="component1-fade" id="forme2"> 
            @livewire('bac-with-job')
        </section>
        <section class="component2-fade" id="forme3"> 
            <form class="container icon-bo p-5" style="border-radius: 10px 10px 10px 10px;"  method="POST" action="{{ route('reset.store')}}"  id="form1" >
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label  for="BAC">{{ __('What is your BAC') }}</label>
                            <div class="">
                                <select name="BAC" id="" class="form-control">
                                    @foreach ($series as $serie)
                                        <option value="{{$serie->name}}" class="option">{{$serie->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('BAC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>{{ __('In which city do you want to do your University trip ?') }}</label>
                            <div class="">
                                <select name="ville" id="" class="form-control">
                                    @foreach ($cities as $city)
                                    <option value="{{$city->name}}" class="option">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="nom">
                                {{'What is your name?'}}
                            </label>
                            <input id="nom" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>        
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>	
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="Mail">
                               {{'What is your Mail?'}}
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('Mail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>   
                <div style="display: flex; display:contents;" class="row">
                    <h3>{{'Your preferences'}}</h3>
                </div><br>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label  for="matière">{{ __('What is the subject where you excel the most??') }}</label>
                            <select name="matière" id="" class="form-control">
                                @foreach ($matieres as $matiere)
                                    <option value="{{$metier->name}}" class="option">{{$matiere->name}}</option>
                                @endforeach
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                            @error('matière')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label  for="libre">{{ __("What did you like to do in your free time ?") }}</label>
                            <div class="">
                                <select name="libre" id="" class="form-control">
                                    <option value="Lire" class="option">Lire</option>
                                    <option value="Sport">Faire le Sport</option>
                                    <option value="Dormir">Dormir</option>
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('libre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>      
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label  for="personne">{{ __('Who is the person you admire the most?') }}</label>
                            <input id="personnes" type="text" class="form-control @error('personne') is-invalid @enderror" name="personne" value="{{ old('personne') }}" required autocomplete="personne">
                            
                            <i class="zmdi zmdi-caret-down"></i>
                            @error('personne')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label  for="metier">{{ __('What does she do for a living?') }}</label><br>
                            <div class="">
                                <select name="metier" id="" class="form-control">
                                    @foreach ($metiers as $metier)
                                        <option value="{{$metier->name}}" class="option">{{$metier->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('living')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button style="color:white; background-color:#106eea;" type="submit" id="submit2" class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Valider</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                </div>
                <div style="float: left;" class="flex-column justify-content-end">
                    <button type="button" style="height: 35px; margin-top:-55px; color:white; background-color:#106eea; " id="BACK2" class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Back</button>
                </div>
            </form>
        </section>
    </div>
</section>

@endsection