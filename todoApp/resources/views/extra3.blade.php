<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;color: blue;background-color: yellow;">
    <h1>Number: {{ $number }}</h1>
    @for($i = 1; $i <= 10; $i++)
        <p>{{ $number }} x {{ $i }} = {{ $number * $i }}</p>
    @endfor
</body>
</html>