<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;color: blue;bgcolor: yellow;">
    <h1>Number: {{ $number }}</h1>
    @if($number % 2 == 0)
        <h2>The number is even.</h2>
    @else
        <h2>The number is odd.</h2>
    @endif
</body>
</html>