<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livraria</title>

</head>
<body>
    <p> Prezado(a) {{$user->name}}</p>
    
    <p> Para recuperar a sua senha do aplicativo de Livraria, use o código de verificação abaixo:</p>

    <p>{{$code}}</p>
    
    <p> Por questões de segurança esse código é válido somente até as {{$formattedTima}} do dia {{$formattedDate}}. Caso esse Prazo esteja expirado, será necessário solicitar outro código</p>
</body>
</html>
