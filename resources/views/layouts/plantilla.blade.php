<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>LLamkay</title>
</head>
<body>
@yield('content')
<footer>
    <a href="https://api.whatsapp.com/send?phone=51969449142" target="_blank"><img src="{{asset('images/img.png')}}" width="30px"></a>
    <a href="mailto: jerico.cajahuaman.valera@gmail.com" target="_blank"><img src="{{asset('images/img_1.png')}}" width="30px"></a>
</footer>
</body>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
</html>
