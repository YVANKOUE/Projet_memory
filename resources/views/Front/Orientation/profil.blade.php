@extends('Front.Form.layouts.app')

@section('title') | Utilisateurs Dashboard @endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="users-view-image">
                                            <img src="{{asset('vendors/images/'.$user->avatars)}}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td>{{$user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Status</td>
                                                    <td>active</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Role</td>
                                                       @foreach($user->roles as $role)
                                                           <td>{{$role->name}}</td>
                                                       @endforeach
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Company</td>
                                                    <td>WinDon Technologies Pvt Ltd</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{ route('profil.Front.edit', $user->id)}}"><button  class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    </div>
@endsection