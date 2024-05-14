<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Список пользователей</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->amount }}</li>
        @endforeach
    </ul>
@endsection
