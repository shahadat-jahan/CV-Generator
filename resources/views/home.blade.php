@extends('layouts.app')

@section('content')
@section('header')
<div class="float-left">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}</h2>  
</div>
@endsection 
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    {{ __('You are logged in!') }}
</div>
@endsection
