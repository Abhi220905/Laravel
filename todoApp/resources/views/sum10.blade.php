<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @php
        $sum = 0;
    @endphp

    @for($i = 1; $i <= 10; $i++)
        @php
            $sum += $i;
        @endphp
    @endfor
    
    <h2>The sum of numbers is {{ $sum }}</h2>

</body>
</html>
