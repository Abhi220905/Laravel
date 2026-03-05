<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>CReate task here </h1>
   <form method="post" action="/taskcont">
        @csrf
        <button type='submit'>save task</button>
   </form>
</body>
</html>