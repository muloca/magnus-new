@extends('layouts.app')

@section('title', 'Usuário')

@section('content')

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="md:col-span-1 pb-10">
        <div class="px-4 sm:px-0">
            <h3 class="text-3xl font-medium leading-6 text-gray-900">Editar Usuário</h3>
        </div>
    </div>

    <div class="mb-3 xl:w-96">
        <label for="name" class="form-label inline-block mb-2 text-gray-700">Nome completo</label>
        <input type="text"
            name="name"
            id="name"
            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
            id="exampleFormControlInput3" placeholder="{{ $user->name }}" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="exampleFormControlInpu3" class="form-label inline-block mb-2 text-gray-700">Email</label>
        <input type="email"
            name="email"
            id="email"
            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
            id="exampleFormControlInput3" placeholder="{{ $user->email }}" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="exampleFormControlInpu3" class="form-label inline-block mb-2 text-gray-700">Cargo</label>
        <input type="text"
            name="cargo"
            id="cargo"
            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
            id="exampleFormControlInput3" placeholder="Cargo" />
    </div>

    <div class="mb-3 xl:w-96">
        <label for="exampleFormControlInpu3" class="form-label inline-block mb-2 text-gray-700">Nível de acesso</label>
        <input type="text"
            name="nivel"
            id="nivel"
            class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
            id="exampleFormControlInput3" placeholder="Nível de acesso" />
    </div>
    

    
    
@endsection
