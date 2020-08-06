@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p>{{ __('Hi,') }} {{ Auth::user()->name }}</p>

                    @if (Auth::user()->isAdmin())
                        <p><a class="btn btn-primary" href="{{ route('showInvitations') }}">{{ __('Goto Invitation Requests') }}</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
