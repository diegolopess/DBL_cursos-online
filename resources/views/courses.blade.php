@extends('layouts.app') <!-- Você pode criar esse layout em resources/views/layouts/app.blade.php -->

@section('title', 'Cursos')
@section('content')
    <!-- Banner principal -->
    <div class="banner">
        <!-- Conteúdo do banner (imagem, título, etc.) -->
    </div>

    <!-- Input de busca de cursos -->
    <div class="search-box">
        <input type="text" placeholder="Digite aqui para buscar cursos...">
        <button>Buscar</button>
    </div>

    <!-- Lista de cursos -->
    <div class="course-list">
        @foreach($courses as $course)
            <div class="course-item">        
                <h2>Curso: {{ $course->title }}</h2>
                <p>Descrição: {{ $course->description }}</p>
                <p>Valor: R${{ $course->price }}</p>
                <p>Duração: {{ $course->duration }} Horas</p>
                <a href="/">Saiba mais</a>
            </div>
        @endforeach
    </div>
@endsection

@section('footer')
    <!-- Conteúdo do rodapé -->
@endsection