 @extends('layouts.app')

 @section('title', 'Lista de Usuários')

 @section('content')

     <div class="hidden sm:block" aria-hidden="true">
         <div class="py-5">
             <div class="border-t border-gray-200"></div>
         </div>
     </div>


     <div class="bg-white shadow overflow-hidden sm:rounded-lg">
         <div class="px-4 py-5 sm:px-6 grid grid-cols-2">
             <div>
                 <h3 class="text-lg leading-6 font-medium text-gray-900">Usuários Cadastrados</h3>
                 <p class="mt-1 max-w-2xl text-sm text-gray-500">Sistema de gestão Magnus.</p>
             </div>
             <div>
                 <a href="{{ route('users.create') }}" class="flex justify-end">
                     <button type="button"
                         class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                         Criar novo usuário
                     </button>
                 </a>
             </div>
         </div>

         @foreach ($users as $user)
             <div class="border-t border-gray-200">
                 <dl>
                     <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                         <dt class="text-sm font-medium text-gray-500">Nome</dt>
                         <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $user->name }}</dd>
                     </div>
                     <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                         <dt class="text-sm font-medium text-gray-500">Cargo</dt>
                         <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $user->cargo }}</dd>
                     </div>
                     <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                         <dt class="text-sm font-medium text-gray-500">Email</dt>
                         <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $user->email }}</dd>
                     </div>
                     <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                         <dt class="text-sm font-medium text-gray-500">Nível de acesso</dt>
                         <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $user->nivel }}</dd>
                     </div>
                     <div class="bg-gray-500 flex justify-end pt-2 pr-3 pb-2">
                         <a href="{{ route('users.show', $user->id) }}">
                             <button type="button"
                                 class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                 Editar Usuário
                             </button>
                         </a>
                     </div>
             </div>
         @endforeach
     </div>





 @endsection
