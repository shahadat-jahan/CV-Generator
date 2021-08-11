<x-app-layout>

    <x-slot name="header">
        <div class="float-left">
            <h2> Show User</h2>
        </div>
        <div class="float-right">
            @include('users.includes.nav')
        </div>
    </x-slot>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
</x-app-layout>
