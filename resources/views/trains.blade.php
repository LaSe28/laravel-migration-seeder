<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Trains</title>
</head>
<body>
    <h1>Treni di oggi:</h1>
    @foreach ($trains as $train)
        <div>{{$train->codice_treno}}</div>
    @endforeach
</body>
</html>
