<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El tiempo</title>
    <style>
        .container{
            display: flex;
        }

        .grados{
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-right: 20px;
        }
        

</style>
</head>
<body>
    <h2>El tiempo en {{$tiempo['location']['name']}}, {{$tiempo['location']['country']}}</h2>
    <div class="container">
        <div class="grados">
            <p>{{$tiempo['current']['temp_c']}} °C</p>
        </div>
        <div class="img">
            <img src="https:{{ $tiempo['current']['condition']['icon'] }}" alt="Icono del clima">
        </div>
    </div>
</body>
</html>