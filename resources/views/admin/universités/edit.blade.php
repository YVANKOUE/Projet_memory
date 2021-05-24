@extends('admin.app.app')

@section('title') | Ajouter un membre @endsection

@section('content')




<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
                <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <h3 class="d-none d-sm-block" style="color: #3C7AB3;">Créer une Ecole</h3>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post"  action="{{route('school.update' , $school)}}" class="steps-validation wizard-circle" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <!-- Step 1 -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="fname">{{ __('Nom') }}</label>
                                                                <div class="">
                                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nom" required value="{{  old('name') ?? $school->name}}"/>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Localisation') }}</label>
                                                                <select class="form-control" name="localisation" id="localisation">
                                                                    <option row="5">Douala</option>
                                                                    <option row="5">Yaoundé</option>
                                                                    <option row="5">Bamenda</option>
                                                                    <option row="5">Bafousam</option>
                                                                </select>
                                                            </div>
                                                        </div> 
                                                    </div>    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Université de :') }}</label>
                                                                <select class="form-control" name="ville" id="ville">
                                                                    <option row="5">Douala</option>
                                                                    <option row="5">Yaoundé</option>
                                                                    <option row="5">Bamenda</option>
                                                                    <option row="5">Bafousam</option>
                                                                </select>
                                                            </div>
                                                        </div>  
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Langue de formation') }}</label>
                                                                <select class="form-control" name="langue_formation" id="langue_formation">
                                                                    <option row="5">Francais</option>
                                                                    <option row="5">Anglais</option>
                                                                    <option row="5">Francais et anglais</option>
                                                                </select>
                                                            </div>
                                                        </div>  
                                                    </div>    
                                                    <div class="row">
                                                        {{-- </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Diplome requis') }}</label>
                                                                <select  name="rdiplomes[]" multiple class="select" required >
                                                                    @foreach($rdiplomes as $rdiplome)
                                                                        <option  value="{{$rdiplome->id}}" >{{$rdiplome->name_dr}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>   --}}
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __("Type d'université") }}</label>
                                                                <select class="form-control" name="TypeUniversité" id="role">
                                                                    <option row="5">Université d'Etat</option>
                                                                    <option row="5">Université privée</option>
                                                                </select>
                                                            </div>
                                                        </div>    
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="role">{{ __('Filiéres') }}</label>
                                                                <div id="myselect">
                                                                    <select id="multiselect" name="filiéres[]" multiple="multiple" required >
                                                                        @foreach($filiéres as $filiére)
                                                                            <option  value="{{$filiére->id}}" >{{$filiére->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label " for="cmdp">&nbsp;</label>
                                                                <div class="input-file-container bg-info">
                                                                    <input  class="input-file @error('logo') is-invalid @enderror" id="my-file" type="file" name="logo" required>
                                                                    <label for="logo" class="input-file-trigger" tabindex="0">
                                                                        Selectioner le logo...
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="file-return"></p>                            
                                                                    @error('logo')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <!-- Step 2 -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label " for="description">{{ __('Description') }}</label>
                                                            <div class="">
                                                                <textarea type="description" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required placeholder="description" value="{{ old('description'?? $school->description)}}" cols="50" rows="30"></textarea>
                                                                @error('description')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label " for="localisation">{{ __('déboucher') }}</label>
                                                            <div class="">
                                                                <textarea id="déboucher" type="text" class="form-control" name="déboucher" required autocomplete="" cols="50" rows="50"></textarea>
                                                            </div>
                                                        </div>     
                                                    </div>
                                                </div>   
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">   
                                                    <button type="submit" class="text-center btn btn-primary btn-lg" id="save" style="height: 40px;" name="signup" value="Sign up">Enregistrer</button>             
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>  
                                                </div>                               
                                            <!-- Step 3 -->
                                        </form>
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
@endsection




