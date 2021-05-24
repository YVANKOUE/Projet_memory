<form class="container icon-bo p-5" style="border-radius: 10px 10px 10px 10px;"  method="POST" action="{{ route('Front.store')}}"  id="form1" >
    @csrf
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label for="">
                   {{' Your FirstName:'}}
                </label>
                <div class="form-holder">
                    <input type="text" class="form-control @error('FirstName') is-invalid @enderror" id="FirstName" name="FirstName" placeholder="FirstName"  required value="{{ old('name') }}"/>
                    @error('FirstName')
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
                    <select name="country" id="" class="form-control">
                        <option class="option">{{'Select metier'}}</option>
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
                <label>{{'what type of school ?'}}</label>
                <select name="type_ecole" id="" class="form-control">
                    <option value="Université privée" class="option">Université privée</option>
                    <option value="Université d'Etat" class="option">Université d'Etat</option>
                    <option value="" class="option">Tous</option>
                </select>
                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label for="">
                    {{'Your name'}}
                </label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>        
                @error('name')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>	
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label for="">
                   {{'Email:'}}
                </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('FirstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label  for="BAC">{{ __('YOUR BAC') }}</label>
                <div class="">
                    <select name="BAC" id="" class="form-control" wire:model = 'selectedSerie'>
                        <option value="" selected>Slectionne le type de BAC</option>
                        @foreach ($series as $serie)
                            <option value="{{$serie->id}}" class="option">{{$serie->name}}</option>
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
    </div>   
    <div style="display: flex; display:contents;" class="row">
        <h3>{{'what job do you want to do later ?'}}</h3>
    </div>
    <div class="row">
       
       <div class="col-lg-6 col-md-6">
            <div class="form-group">
                {{-- {{ dd($first_jobs) }} --}}
                <label  for="name">{{ __('First choice') }}</label>
                <select name="P_metier" id="" class="form-control" wire:model = 'selectedFirstmetier' >
                    <option class="option">{{'Select first job'}}</option>
                    @foreach ($first_jobs as $first_job)
                    {{-- {{ dd($first_job) }} --}}
                        <option value="{{$first_job->id}}" class="option">{{$first_job->name}}</option>
                    @endforeach 
                </select>
                @error('P_metier')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
      
       
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label  for="name">{{ __('Second choice') }}</label>
                <div class="">
                    <select name="D_metier" id="" class="form-control" wire:model = "selectedSecondmetier" >
                        <option class="option">{{'Select second job'}}</option>
                        @foreach ($second_jobs as $second_job)
                        {{-- {{ dd($second_job) }} --}}
                            <option value="{{$second_job->id}}" class="option">{{$second_job->name}}</option>
                        @endforeach 
                    </select>
                    @error('D_metier')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
       
    </div>      
    
    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
        <button type="submit" id="submit1" style="color:white; background-color:#106eea; " class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Valider</button>
        <button  type="reset" class="btn btn-outline-warning">Reset</button>
    </div>
    <div style="float: left;" class="flex-column justify-content-end">
        <button type="button" style="height: 35px; margin-top:-55px; color:white; background-color:#106eea; " id="BACK1" class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Back</button>
    </div>
</form>