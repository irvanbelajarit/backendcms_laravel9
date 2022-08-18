@extends('layouts.dashboard')

@section('title')
admin dashboard
@endsection

@section('breadcrumbs')
{{ Breadcrumbs::render('dashboard') }}
@endsection

@section('content')
    <h1>dashboard</h1>
    @yield('breadcrumbs')
@endsection
