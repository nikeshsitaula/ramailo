@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="content">
        <div class="row">
            <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
        </div>
        <div class="row">
            {!! __('strings.backend.welcome') !!}

        </div>
    </div>
@endsection
