<!-- filepath: resources/views/idiomas/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Idiomas</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($idiomas->isEmpty())
        <p>No hay idiomas registrados.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Idioma</th>
                    <th>Certificado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($idiomas as $idioma)
                    <tr>
                        <td>{{ $idioma->id }}</td>
                        <td>{{ $idioma->idioma }}</td>
                        <td>
                            @if ($idioma->certificado_de_idioma)
                                <a href="{{ Storage::url($idioma->certificado_de_idioma) }}" target="_blank">Ver Certificado</a>
                            @else
                                No disponible
                            @endif
                        </td>
                        <td>
                            <!-- Aquí puedes agregar botones para editar o eliminar -->
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection