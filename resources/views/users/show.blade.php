@extends('layouts.app')

@section('tittle', 'Detalhes do Usuário')

@section('content')
    <h1>Detalhes do usuário {{$user->name}}</h1>

    <ul>
        <li>Nome: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Cadastro: {{$user->created_at}}</li>
        <li>ID da imagem: {{$profile_imagem->id}} </li>
    </ul>
@endsection
