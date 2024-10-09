@extends('layout')

@section('content')
    <h1>{{ $post->titlo }}</h1>
    <p>{{ $post->descrcao }}</p>
    <p>{{ $post->estado }}</p>
    <a href="{{ route('posts.index') }}">Voltar</a>

    @endsection
