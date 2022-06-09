@extends('layouts.app')

@section('title', 'Usuário')



@section('content')

    

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="md:col-span-1 pb-10">
        <div class="px-4 sm:px-0">
            <h3 class="text-3xl font-medium leading-6 text-gray-900">Editar Usuário</h3>
            
        </div>
    </div>
    @include('users/components/validation')
    @include('users/components/form_edit')




@endsection
