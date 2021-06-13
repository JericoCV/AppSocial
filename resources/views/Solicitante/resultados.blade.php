@foreach($results as $people)
    <h1>{{$people->nombre}} {{$people->apellido}}</h1>
@endforeach
