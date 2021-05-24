@extends('layouts.app')

@section('title') | Ajouter un membre @endsection

@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div class="section-title">
    <h2>Resultat de l'orientation</h2>
    <h3 style="font-size: 24px">{{$school->description}}</h3>
    <h4>{{'Les différentes filiéres de cette faculté sont les suivantes:'}}</h4>
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
                                                        <th data-field = "id" >#</th>
                                                        <th data-field = "img">image</th>
                                                        <th data-field = "name">Nom</th>
                                                        <th data-field = "action">Profil</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th data-field = "id">#</th>
                                                        <th data-field = "img">image</th>
                                                        <th data-field = "name">Nom</th>
                                                        <th  data-field = "action">Profil</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($faculties as $faculty)
                                                        <tr> 
                                                            <td>{{++ $i}}</td>
                                                            <td>
                                                                <span class="user-icon">
                                                                   <img alt="{{$faculty->name}}" style="height: 105px; width:112px;" src="{{asset('vendors/images/'.$faculty->img)}}" alt="">
                                                                </span>
                                                            </td>
                                                            <td>{{$faculty->name}}</td>
                                                            <td>
                                                              <a href="{{ route('reset.show', $faculty->id)}}"><button class="btn btn-blue" style="background-color: #106eea; color:white;"  title="Consulter" >Voir Profil</button></a>
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