@extends('layouts.app')

@section('tittle', 'Cadastro de Usuário')

@section('content')
    <h1>Novo Usuário</h1>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="email" name="email" placeholder="E-mail:">
        <input type="password" name="password" placeholder="Senha:">
        <button type="submit">Cadastrar</button>
    </form>


@endsection
