@extends('layouts.app')

@section('title', 'Usuário')



@section('content')

    @include('menu/menu')
        <div class="pt-3">
            <h3 class="text-3xl font-medium leading-6 text-gray-900">Editar Usuário</h3>
        </div>
    @include('users/components/validation')
    @include('users/components/form_edit')




@endsection
