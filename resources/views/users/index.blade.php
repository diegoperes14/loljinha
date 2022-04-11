@extends('layouts.app')

@section('tittle', 'Listagem dos Usuários')

@section('content')
<h1>Listagem de Usuários</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                {{$user->name}} -
                {{$user->email}}
                | <a href="{{route('user.show', $user->id)}}">detalhes</a>
            </li>
        @endforeach
    </ul>
@endsection