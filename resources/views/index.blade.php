<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php

$a = "Muneeb";
$b = "<h3>2202B1</h3>";
echo $b;
    
@endphp


    <h1>Welcome, @if ($name)
        {{$name}}
    @else

    {{"User"}}
        
    @endif</h1>
    
{!!$b!!}


@for ($i = 0; $i < 10; $i++)
    {{$i}}
@endfor


b:if







</body>
</html>