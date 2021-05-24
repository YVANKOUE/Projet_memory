@extends('layouts.app')

@section('title') | Profil @endsection

@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div class="section-title">
    <h2>Resultat de l'orientation</h2>
    <h3 style="font-size: 24px">Faculty Profil</h3>
  </div>
	<!-- BEGIN: Content-->
    <div class="container" style="margin-top: -30px;" >
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="column-selectors">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <span class="user-icon">
                                            <img style="height: 105px; width:112px;" src="{{asset('vendors/images/'.$faculty->img)}}" alt="">
                                         </span>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table id="table">
                                                <tr>
                                                    <td class="font-weight-bold">Name :</td>
                                                    <td>{{$faculty->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">BAC Required :</td>
                                                    <td>{{ $array2['0']['name']}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table id="table">
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td>{{$faculty->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">BAC Required</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </section>
            </div>
        </div>
    </div>
      
  @endsection