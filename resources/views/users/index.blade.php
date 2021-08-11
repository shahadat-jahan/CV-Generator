@extends('layouts.app')

@section('content')
@section('header')

<div class="float-left">  
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Users Management') }}
    </h2>
</div>
<div class="float-right">
    @include('users.includes.nav')
</div>
@endsection
<table class="table table-striped">
    <thead>
        <tr>
            <th>Actions</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>@include('users.includes.actions')</td>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row mt-3">
    <div class="col">
        {!! $users->links() !!}
    </div>
</div>
@endsection
