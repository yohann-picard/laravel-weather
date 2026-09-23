<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/openweather" method="POST">
        @csrf
        <input type="text" name="location">
        <button type="submit">test</button>
    </form>
    @if (isset($actualWeather["main"]))
        <p>Salut, il fait actuellement {{ $actualWeather["main"]["temp"] }} degrés à {{ $actualWeather["name"] }}</p>
        {{-- <p>Demain il fera {{ $forecastWeather }} </p> --}}
        <script>
            console.log(@json($actualWeather));
        </script>
    @endif
</body>
</html>