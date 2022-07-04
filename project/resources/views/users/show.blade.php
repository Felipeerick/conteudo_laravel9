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
           <th scope="col">Editar</th>
           <th scope="col">Remover</th>
        </tr>
  </thead>

  <tbody>
           
           <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ date('d/m/Y h:i:s', strtotime($user->created_at)) }}</td>
              <td> 
               <a href="{{ route('users.edit', $user->id) }}" class='btn btn-warning'>Editar</a> 
            </td>

            <td>
               <form action="{{ route('users.delete', $user->id) }}" method='POST'>
               @method('DELETE')    
               @csrf
                  <button type='submit' class='btn btn-danger'>Delete</button> 
               </form> 
            </td>

          </tr>
          
  </tbody>

</table>
      
@endsection