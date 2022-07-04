@extends('template.users')
@section('title', $title)
@section('body')

<h1>Editar Usuário  {{ $user->name }} </h1>


<form style="margin: 30px" action="{{ route('users.update', $user->id) }}" method='post' >
@method('PUT')  
@csrf

@if($errors->any())

<div class='alert alert-danger' role="alert">
      @foreach($errors->all() as $error)
         {{ $error }}<br>
      @endforeach
</div>

@endif

<div class="form-group">
    <label for="name">Nome</label>
    <input type="name" class="form-control" id="name" name='name' value='{{ $user->name }}'>
  </div>
  <div class='mb-3'>
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" value="{{ $user->email }}" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password"  class="form-control" id="exampleInputPassword1" name='password'>
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection