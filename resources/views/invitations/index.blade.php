@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invitation Requests') }}</div>
                <div class="card-body">
                    <div class="panel-heading">{{ __('Pending Requests') }}<span class="badge">{{ count($invitations) }}</span></div>
                    <div class="panel-body" style="padding: 0;">
                        @if (!empty($invitations))
                        <table class="table table-responsive table-striped" style="margin-bottom: 0;">
                            <thead>
                                <tr>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Invitation Link') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invitations as $invitation)
                                <tr>
                                    <td><a href="mailto:{{ $invitation->email }}">{{ $invitation->email }}</a></td>
                                    <td>{{ $invitation->created_at }}</td>
                                    <td>
                                        <kbd>{{ $invitation->getLink() }}</kbd>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p>{{ __('No invitation requests!') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection