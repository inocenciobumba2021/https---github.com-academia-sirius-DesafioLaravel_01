@extends('layout')

@section('content')
<div class="col-md-12 mt-5">
    <h1>Editar Tarefa</h1>
</div>
<div class="row mt-5">
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-12">
        <label for="title">Titulo:</label>
        <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="col-md-12">
        <label for="descricao">descricao:</label>
        <input type="text" class="form-control" name="descrcao" id="titlo" required>
        </div>
        <div class="col-md-12 mt-5">
        <label for="body" >estado:</label>
        <input name="estado" id="estado" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-5">Atualizar</button>
        </div>
    </form>
    @endsection

