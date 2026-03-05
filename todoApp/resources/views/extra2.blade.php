<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Number: {{ $number }}</h1>
    @if($number > 0)
        <h2>The number is positive.</h2>
    @elseif($number < 0)
        <h2>The number is negative.</h2>
    @else
        <h2>The number is zero.</h2>    
    @endif
</body>
</html>