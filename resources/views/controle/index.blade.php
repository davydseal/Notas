<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/cadastro" method="post">
        @csrf
        @method('POST')
        <table align="center">
<tr>
            <td>Nome:</td>
            <td><input type="text" name="c_nome" required></td>
</tr>
<tr>
            <td>E-mail:</td>
            <td><input type="text" name="c_email" required></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td><select name="c_status" id="">
            <option value="1">Super Adm</option> 
            <option value="2">Gerente</option>
            <option value="3">Coordenador</option>  
            <option value="4">Professor</option> 
            </select></td>
        </tr>
        <tr>
            <td><button type="submit">Cadastrar</button></td>
        </tr>
        </table>
    </form>
</body>
</html>