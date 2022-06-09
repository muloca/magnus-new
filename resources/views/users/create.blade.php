@extends('layouts.app')

@section('title', 'Criar Usuário')

@section('content')

    


    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>
      
      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Novo Usuário</h3>
              <p class="mt-1 text-sm text-gray-600">Seja bem vindo!</p>
            </div>
          </div>
          
          <div class="mt-5 md:mt-0 md:col-span-2">
            @include('users/components/validation')
            @include('users/components/form_create')
          </div>
        </div>
      </div>

@endsection