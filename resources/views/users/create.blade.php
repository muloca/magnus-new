@extends('layouts.app')

@section('title', 'Criar Usuário')

@section('content')

@include('menu/menu')

<div class="mx-3">
  <div class="mt-3">
    <h3 class="">Novo Usuário</h3>
    <a class="btn btn-danger btn-sm" href="{{ route('users.index') }}">Cancelar</a>
  </div>

  <div class="mt-3">
    @include('users/components/validation')
    @include('users/components/form_create')
  </div>
</div>
@endsection