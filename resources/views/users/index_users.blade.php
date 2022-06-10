 @extends('layouts.app')

 @section('title', 'Lista de Usuários')

 @section('content')

 @include('menu.menu')


 <div class="mx-3 my-2">
     <div class="row">
         <div class="col-md-auto">
             <h3 class="">Usuários Cadastrados</h3>
             <p class="">Sistema de gestão Magnus.</p>
         </div>
         <div class="col-8">
             <a href="{{ route('users.create') }}" class="flex justify-end">
                 <button type="button" class="btn btn-info">
                     Criar novo usuário
                 </button>
             </a>
         </div>
     </div>
     <form class="form-inline pt-3" action="{{ route('users.index') }}" method="get">
         <div class="form-group mb-2">
             <input type="text" class="form-control" name="search" id="search" placeholder="Pesquisar usuário">
         </div>
         <button type="submit" class="btn btn-info mx-sm-3 mb-2">Pesquisar</button>
     </form>
 </div>

 <div class="mx-3 mt-2">
     <table class="table table-striped table-dark">
         <thead>
             <tr>
                 <th scope="col">Nome</th>
                 <th scope="col">Cargo</th>
                 <th scope="col">E-mail</th>
                 <th scope="col">Nível de Acesso</th>
                 <th scope="col">Ações</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($users as $user)
             <tr>
                 <th scope="row">{{ $user->name}}</th>
                 <td>{{ $user->cargo }}</td>
                 <td>{{ $user->email }}</td>
                 <td>{{ $user->nivel }}</td>
                 <td>
                 <div class="row">
                    <div class="col-auto">
                    <a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}">Editar</a>
                    </div>
                    <div class="col-auto">
                    <form action="{{ route('users.deleteUser', $user->id) }}" method="post">
                         @csrf
                         <input type="hidden" name="_method" value="DELETE">
                         <button type="submit" type="button" class="btn btn-danger btn-sm">
                             Deletar usuário
                         </button>
                     </form>
                    </div>
                 </div>   
               
                     
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>

 </div>


 </div>





 @endsection