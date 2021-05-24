@extends('admin.app.app')

@section('title') | Utilisateurs @endsection

@section('content')
	<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <!-- Button to Open the Modal -->
            <a class="row mb-5" style="height: 50px; padding-bottom:20px;"><button class="btn btn-primary btn-lg ml-4 ajout d-md-block d-none" data-toggle="modal" data-target="#myModal" >Ajouter une filière</button></a>   
               
            <!-- The Modal -->
            <div class="modal" tabindex="-1" role="dialog" id="myModal">
                <div class="container">
                    <div class="modal-dialog mw-100 mh-100" role="document">
                        <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Ajouter une filière</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" action="{{route('admin.filières.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="fname">{{ __('Nom') }}</label>
                                            <div class="">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="fname" name="name" placeholder="name"  required data-validation-required-message="This username field is required" value="{{ old('name') }}"/>
            
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="role">{{ __('Diplome requis') }}</label>
                                            <select class="form-control" name="Diplome_requis" id="role">
                                                <option row="5">BAC C</option>
                                                <option row="5">BAC D</option>
                                                <option row="5">BAC TI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="name">{{ __('déboucher') }}</label>
                                            <div class="">
                                                <input type="déboucher" class="form-control @error('déboucher') is-invalid @enderror" id="déboucher" name="déboucher" placeholder="déboucher"  required data-validation-required-message="This déboucher field is required" value="{{ old('name') }}"/>
            
                                                @error('déboucher')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="cmdp">&nbsp;</label>
                                            <div class="input-file-container bg-info">
                                                <input class="input-file @error('avatars') is-invalid @enderror" id="file" type="file" name="logo">
                                                <label for="my-file" class="input-file-trigger" tabindex="0">
                                                    Selectioner logo filière...
                                                </label>
                                            </div>
                                            <div>
                                                <p class="file-return"></p>                            
                                                    @error('avatars')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                            </form>
                        </div>
                        {{-- <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">         
                                            <table class="table zero-configuration">
                                            <thead>
                                                    <tr>
                                                        <th data-field = "id">logo</th>
                                                        <th data-field = "nom">Nom</th>
                                                        <th data-field = "action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <td data-field = "logo">logo</td>
                                                        <td data-field = "nom">Nom</td>
                                                        <td data-field = "action">Action</td>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($faculties as $faculty)
                                                        <tr>
                                                            <td>
                                                                <span class="user-icon">
                                                                    <img style="height: 55px; width:52px;" src="{{asset('vendors/images/'.$faculty->img)}}" alt="">
                                                                </span>
                                                            </td>
                                                            <td>{{  $faculty->name }}</td>
                                                            <td>
                                                                <span id="idElement">&nbsp;</span>
                                                                    <a href="{{ route('reset.edit', $faculty)}}" class="d-none d-md-inline" title="Modifier"><button class="btn btn-success" ><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                                                @can('delete-users')
                                                                    <form action="{{ route('admin.filières.destroy', $faculty->id)}}"  method="post" class="d-inline">
                                                                        @csrf 
                                                                @method('DELETE')
                                                                        <button class="btn btn-danger"  title="Supprimer" ><i class="feather icon-trash-2" aria-hidden="true"></i></button>
                                                                    </form>
                                                                @endcan
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
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
                       
