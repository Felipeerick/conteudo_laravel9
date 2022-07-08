@extends('template.users')
@section('title', 'Listagem de usuários')
@section('body')

                  <h1>Listagem de usuários </h1>
                  <a href="{{ route('users.created') }}" class="btn btn-warning mb-2 ">Adicionar Novo Usuário</a>

                <div class='container'>
                      <div class='row'>
                        <div class='col-sm mt-2 mb-3'>
                              <form action="{{ route('users.index') }}" method="GET">
                                    <div class="input-group">
                                          <input type="search" class="form-control rounded" name='search' placeholder="Search" aria-label="Search" aria-describedby="Search-addon">
                                          <button type="submit" class='btn btn-outline-primary ml-2'>Procurar</button>
                                    </div>
                              </form>
                        </div>
                      </div>
                </div>                 

            <table class="table table-striped table-dark">
      <thead>
            <tr>
            
            <th scope="col">Foto</th>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Postagens</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ações</th>
            </tr>
      </thead>

      <tbody>
                  @foreach ($users as $user)
            <tr>
                  @if($user->image)
                  <th> <img src="{{ asset('storage/'. $user->image) }}" width="50px" height='50px' class='rounded-circle' > </th>
                  @else
                  <th> <img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height='50px' class='rounded-circle' > </th>
                  @endif
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td><a href="{{ route('posts.show', $user->id) }}" class='btn btn-warning'>Postagens: {{ $user->posts->count() }}</a></td>
                  <td>{{ date('d/m/Y h:i:s', strtotime($user->created_at)) }}</td>
                  <td> <a href="{{ route('users.idGet', $user->id) }}" class='btn btn-primary text-white'>Visualizar</a> </td>
            </tr>
            @endforeach
      </tbody>

      </table>
      <div class='justify-content-center pagination'>
            {{$users->links('pagination::bootstrap-4')}}
      </div>
@endsection      