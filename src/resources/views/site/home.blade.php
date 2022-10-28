<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="{{URL('cadastro')}}">
        <button type="button">Cadastrar</button>

    </a>
    <div class='container' style="color:#fff">
   @foreach($usuarios as $users){
    <span>{{users->data->nome}}</span>
   }
    @endforeach    
    </div>
    
</body>

</html>
