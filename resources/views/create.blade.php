@extends('layout')

@section('content')
<div class="col-md-12 mt-5">
    <h1>Criar tarefas</h1>
    </div>
    <div class="row mt-5">
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="col-md-12">
        <label for="title">Titulo:</label>
        <input type="text" class="form-control" name="titlo" id="titlo" required>
        </div>
        <div class="col-md-12">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" name="descrcao" id="descricão" required>
        </div>
        <div class="col-md-12 mt-5">
        <label for="body" >Estado:</label>
        <input name="estado" id="estado" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-5">Cadastrar</button>
    </form>
    </div>
    @endsection


