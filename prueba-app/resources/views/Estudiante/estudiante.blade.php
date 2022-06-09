@extends('layouts.app')

@section('title', 'Estudiante')

@section('content')
    <h1> Estos son los estudiantes </h1>

    @foreach ( $estudiante as $est)
        
    @endforeach

    <div class="form-group">
        <label for="">ID</label>
        <input type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Buscar</button>

@endsection