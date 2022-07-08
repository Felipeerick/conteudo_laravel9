@extends('template.users')
@section('title', 'Listagem de posts')
@section('body')

                  <h1>Listagem de posts </h1>
                 
            <table class="table table-striped table-dark">
      <thead>
            <tr>
            
           
            <th scope="col">ID</th>
            <th scope="col">Usuário</th>
            <th scope="col">Título</th>
            <th scope="col">Postagens</th>
            <th scope="col">Data de Cadastro</th>
       
            </tr>
      </thead>

      <tbody>
                  @foreach ($posts as $post)
            <tr>
                  <th scope="row">{{ $post->id }}</th>
                  <td> {{ $post->user->name }} </td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->post }}</td>
                  <td>{{ date('d/m/Y h:i:s', strtotime($post->created_at)) }}</td>
                  <td> <a href="#" class='btn btn-primary text-white'>Visualizar</a> </td>
            </tr>
            @endforeach
      </tbody>

      </table>
      <div class='justify-content-center pagination'>
      </div>
@endsection      