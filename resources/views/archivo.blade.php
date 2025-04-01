<!-- filepath: resources/views/idiomas/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Subir Certificado de Idioma</h1>
    <form action="{{ route('idiomas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="idioma">Idioma</label>
            <input type="text" name="idioma" id="idioma" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="certificado_de_idioma">Certificado de Idioma</label>
            <input type="file" name="certificado_de_idioma" id="certificado_de_idioma" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection