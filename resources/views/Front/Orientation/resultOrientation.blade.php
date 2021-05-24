@extends('layouts.app')

@section('title') | Ajouter un membre @endsection

@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div class="section-title">
    <h2>Resultat de l'orientation</h2>
    @php
        $name_metier1 = DB::table('metiers')->where('id',$P_metier)->pluck('name')->first();
        $name_metier2 = DB::table('metiers')->where('id',$D_metier)->pluck('name')->first();
    @endphp
    <h3 style="font-size: 24px">{{'Vous avez un '.$BAC.' et vous voulez être  un '.$name_metier1.' ou un '.$name_metier2}}</h3>
    <h3  style="font-size: 24px">{{'Les différentes universités que vous pouvez intégres qui se trouve à '.$ville.' sont les suivantes'}}</h3>
  </div>
	<!-- BEGIN: Content-->
    <div class="container">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">    
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        {{-- <th data-field = "id" >#</th> --}}
                                                        <th data-field = "logo">Logo</th>
                                                        <th data-field = "nom">Nom</th>
                                                        <th data-field = "Localisation">Localisation</th>
                                                        <th data-field = "action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($P_schools as $key => $school)
                                                    @if ($key == 0)
                                                       <tr><td><h3>{{$name_metier1}}</h3></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr> 
                                                    @endif
                                                    <tr> 
                                                        <td>
                                                          <span class="user-icon">
                                                             <img style="height: 105px; width:112px;" src="{{asset('vendors/images/'.$school->logo)}}" alt="">
                                                          </span>
                                                        </td>
                                                        <td>{{$school->name}}</td>
                                                        <td>{{$school->localisation}}</td>
                                                        <td>
                                                            <a href="{{ route('Front.show', $school->id)}}"><button class="btn btn-blue" style="background-color: #106eea; color:white;"  title="Consulter" >Voir Plus</button></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: -60px;">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    {{-- <h1 style="text-align: center; " class="mt-2">{{$D_metier}}</h1> --}}
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">         
                                           <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        {{-- <th data-field = "id" >#</th> --}}
                                                        <th data-field = "logo">Logo</th>
                                                        <th data-field = "nom">Nom</th>
                                                        <th data-field = "Localisation">Localisation</th>
                                                        <th data-field = "action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    </tr>
                                                    @foreach ($D_schools as $key => $school)
                                                        @if ($key == 0)
                                                        <tr><td><h3>{{$name_metier2}}</h3></td>
                                                            {{-- <td></td> --}}
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr> 
                                                        @endif
                                                        <tr> 
                                                            {{-- <td>{{++ $j}}</td> --}}
                                                            <td>
                                                              <span class="user-icon">
                                                                 <img style="height: 105px; width:112px;" src="{{asset('vendors/images/'.$school->logo)}}" alt="">
                                                              </span>
                                                            </td>
                                                            <td>{{$school->name}}</td>
                                                            <td>{{$school->localisation}}</td>
                                                            <td>
                                                                <a href="{{ route('Front.show', $school->id)}}"><button class="btn btn-blue" style="background-color: #106eea; color:white;"  title="Consulter" >Voir Plus</button></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection