<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('debulg')}}" method="post">
    @csrf
    <label for="">Título</label>
    <input type="text" name="title">

    <br>
    <label for="">Sub-Título</label>
    <input type="text" name="subtitle">

    <br>
    <label for="">Conteúdo</label>
    <textarea name="content" cols="30" rows="10"></textarea>

    <br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
