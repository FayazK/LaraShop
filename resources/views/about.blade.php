<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hi
    @if(empty($name))
        Bro
        @else
        {{$name}}
    @endif
    , Welcome back 2 code</h1>
<h2>Running from Controller</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias doloribus eaque error, eveniet, facere facilis id
    nostrum placeat ratione, recusandae saepe sint voluptatem voluptatum. Ab aliquam deserunt magnam sit velit.</p>
</body>
</html>
