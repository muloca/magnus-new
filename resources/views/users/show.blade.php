@extends('layouts.app')

@section('title', 'Usuário')

@section('content')
<h1>Detalhes do usuário</h1>

<div>
    <h3>nome: {{ $user->name }}</h3>
    <p>email: {{ $user->email }}</p>
</div>
@endsection
