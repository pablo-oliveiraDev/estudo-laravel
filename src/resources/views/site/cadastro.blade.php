<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <div class='container' style='margin-top:40px;text-align:center;margin-bottom:40px'>
        <form action="{{route('usuarios.store')}}" method="POST">
            <!-- @csrf -->
            <label>
                Nome:<input type="text" name="nome" id='nome'><br>
            </label>
            
            <label>
                Sobrenome:<input type="text" name="sobrenome" id='sobrenome'><br>
            </label>
            
            <label>
                Email:<input type="text" name="email" id='email'><br>
            </label>
            
            <label>
                CPF:<input type="text" name="cpf" id='cpf'><br>
            </label>
            
            <label>
                Senha:<input type="text" name="senha" id='senha'><br>
            </label>
            
           <button type="submit">GRAVAR</button>
        </form>
    </div>
</body>

</html>