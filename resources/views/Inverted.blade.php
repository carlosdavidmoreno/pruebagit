<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frases Invertidas</title>
</head>
<body>
    <h1>Frases Invertidas:</h1>
    <ul>
        @foreach($frases as $frase)
            <li>{{ $frase->frase_original }} - {{ $frase->frase_invertida }}</li>
        @endforeach
    </ul>
</body>
</html>
