@extends('template.users')
@section('title', 'Postagens')
@section('body')


 <h2 class="margin:20px">Postagens do {{ $user->name }}</h2>

@foreach($posts as $post)
<div class="mb-3">
     <label class="form-label">Identificação N°: {{ $post->id }}</label> 
     <br>
     <label class="form-label"> Status: {{ $post->active? 'Activo': 'Inativo' }}</label> 
     <br>
     <label class="form-label">Título: {{ $post->title }}</label> 
     <br>
     <textarea class="form-control" rows="3">Postagens: {{ $post->post }}</textarea> 
     <br>
</div>

@endforeach
@endsection