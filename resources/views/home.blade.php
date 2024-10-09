@extends('layout')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-10">
    <h1>Desafios</h1>
    </div>
    <div class="col-md-2">
    <a href="{{ route('posts.create') }}">
        <button type="submit" class="btn btn-success">
        Criar tarefas
        </button>
    </a>
    </div>
    </div>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <div class="col-12 mt-5">

    <table class="table text-center bg-success">
    <thead>
        <tr>
        <th>Nome</th>
        <th>Estado</th>
        <th>Descrição</th>
        <th>Acao</th>
        </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <tr>
     <td>{{ $post->titlo }}</td>
     <td>{{ $post->estado }}</td>
     <td>{{ $post->descrcao }}</td>
        <td>
         <a href="{{ route('posts.show', $post->id) }}">
         <button class="btn btn-dark">Visualizar</button>
         </a>
          <a href="{{ route('posts.edit', $post->id) }}">
          <button class="btn btn-primary">Editar</button>
         </a>
         <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
         @csrf
         @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  </tbody>
  @endsection
</table>
</div>