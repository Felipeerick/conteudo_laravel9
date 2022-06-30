@extends('template.users')
@section('title', 'Novo usuário')
@section('body')


<form style="margin: 30px" action="{{ route('users.store') }}" method='POST' >
 @csrf
<h1>Novo Usuário</h1>
<div class="form-group">
    <label for="name">Nome</label>
    <input type="name" class="form-control" id="name" name='name'>
  </div>
  <div class='mb-3'>
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection  