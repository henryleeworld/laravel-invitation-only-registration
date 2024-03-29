@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Requesting Invitation') }}</div>
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        <p>{{ session('error') }}</p>
                    </div>
                    @endif @if (session('success'))
                    <div class="alert alert-success">
                        <p>{{ session('success') }}</p>
                    </div>
                    @endif
                    <p>{{ config('app.name') }} {{ __('is a closed community. You must have an invitation link to register. You can request your link below.') }}</p>

                    <form class="form-horizontal" method="POST" action="{{ route('storeInvitation') }}">
                        {{ csrf_field() }}

                        <div class="row mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-2 col-form-label text-md-start">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Request An Invitation') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already Have An Account?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection