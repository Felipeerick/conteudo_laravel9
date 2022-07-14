@extends('template.users')
@section('title', 'Cadastro')
@section('body')

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
            @csrf 
            <div class='form-outline mb-4'>
            <label for="name" class="form-label">Nome</label>
           <input type="text"id='name' name="name" class='form-control'>
            </div>
            <div class='form-outline mb-4'>
            <label for="email" class="form-label">Email</label>
           <input type="email"id='email' name="email" class='form-control'>
            </div>

            <div class='form-outline mb-4'>
            <label for="password" class="form-label">Senha</label>
           <input type="password" id='password' name="password" class='form-control'>
            </div>

            <div class='form-outline mb-4'>
            <label for="password1" class="form-label" >Confirme a senha</label>
           <input type="password" id='password1' name="password_confirmation" class='form-control'>
            </div>

            <button type='submit'>Entrar</button>
        </form>




@endsection        