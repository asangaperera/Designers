



    

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Edit Company Details') }}</h2>
                @if(Session::has('updateCompany'))
<span>{{Session::get('updateCompany')}}</span>
@endif
                <div class="card-body">
                <form method="post" action="{{route('update.company')}}">
                        @csrf
                        <input type="hidden" name="c_id" value="{{$companie->c_id}}">

                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{$companie->Name}}" required autocomplete="Name" autofocus>

                                @error('Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('Email') is-invalid @enderror" name="email" value="{{$companie->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                        <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{$companie->telephone}}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Company Logo') }}</label>
                        <div class="col-md-6">
                                <input id="logo" type="text" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{$companie->logo}}" required autocomplete="logo" autofocus>

                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="coverImage" class="col-md-4 col-form-label text-md-right">{{ __('Cover Image') }}</label>
                        <div class="col-md-6">
                                <input id="coverImage" type="text" class="form-control @error('coverImage') is-invalid @enderror" name="coverImage" value="{{$companie->coverImage}}" required autocomplete="coverImage" autofocus>

                                @error('profile_Photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Company Website') }}</label>
                        <div class="col-md-6">
                                <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{$companie->website}}" required autocomplete="website" autofocus>

                                @error('CurrentRoute')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="otherInfo" class="col-md-4 col-form-label text-md-right">{{ __('Other Informations') }}</label>

                            <div class="col-md-6">
                                <input id="otherInfo" type="textarea" class="form-control @error('otherInfo') is-invalid @enderror" name="otherInfo" value="{{$companie->otherInfo}}" required autocomplete="otherInfo" autofocus>

                                @error('otherInfo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add New Company') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection