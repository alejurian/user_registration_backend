<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @component('mail::message')
    Hola, gracias por registrarte.
    A continuación podrás confirmar el registro:
    @component('mail::button', ['url' => $url])
    Confirmar
    @endcomponent
</body>
</html>