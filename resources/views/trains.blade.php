<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Trains</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Treni:</h1>
    <div class="pages">
        {{$trains->links()}}
    </div>
    <div class="trains">
        @foreach ($trains as $train)
            <div class="{{$train->id %2 == 0 ? 'even' :''}}">
                <h4>Treno: {{$train->codice_treno}}</h4>
                <p>Partenza: {{$train->stazione_partenza}}, binario {{$train->binario}}. Partenza programmata alle {{date('H:i:s', strtotime($train->orario_partenza))}}</p>
                <p>Destinazione: {{$train->stazione_arrivo}}. Arrivo previsto alle {{date('H:i:s', strtotime($train->orario_arrivo))}} </p>
                <p>{{$train->treno_in_orario}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
