<!DOCTYPE html>
<html>
<head>
    <title>Certificado</title>
    <style>
        /* Agrega aquí tus estilos CSS */
        body {
            font-family: sans-serif;
            text-align: center;
        }
        h1 {
            color: #007bff;
        }
        .info {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Certificado de Finalización</h1>
    <div class="info">
        <p>Se otorga el presente certificado a:</p>
        <h2>{{ $certificado->nombre_estudiante }}</h2>
        <p>Por haber completado satisfactoriamente el curso de:</p>
        <h3>{{ $certificado->curso }}</h3>
        <p>Con fecha de finalización:</p>
        <h4>{{ $certificado->fecha_finalizacion }}</h4>
    </div>
</body>
</html>