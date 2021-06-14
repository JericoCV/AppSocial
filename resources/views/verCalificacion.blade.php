<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($totalrating as $rating)
        <p>{{$rating["email"]}}</p>
        <p>{{$rating["comentario"]}}</p>
    @endforeach
</body>
</html>