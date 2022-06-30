@extends('template.users')
@section('title', $title)
@section('body')
                <h1>Listagem de {{$user -> name}} </h1>
        <table class="table table-striped table-dark">
   <thead>
        <tr>
           <th scope="col">ID</th>
           <th scope="col">Nome</th>
           <th scope="col">Email</th>
           <th scope="col">Data de Cadastro</th>
           <th scope="col">Ações</th>
        </tr>
  </thead>

  <tbody>
           
           <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ date('d/m/Y h:i:s', strtotime($user->created_at)) }}</td>
              <td> <a href="{{ route('users.index') }}" class='btn btn-warning'>Editar</a> </td>
              <td> <a href="{{ route('users.index') }}" class='btn btn-danger'>Delete</a> </td>
          </tr>
          
  </tbody>

</table>
      
@endsection