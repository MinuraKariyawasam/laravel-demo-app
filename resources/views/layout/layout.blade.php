<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
</head>
<body>
    <h1> Hello </h1>
    @if ($id == 2)
        <h2>{{$name}}</h2>
    @else
        <h2>theres no such pizza</h2>
    @endif

    {{-- @unless ($name == 'pizzal')
        <h3>thank you bro!!</h3>
    @endunless --}}

    {{-- @php
     echo "hello php"   
    @endphp --}}

        {{-- @unless ($name == 'pizzal')
        <h3>thank you bro!!</h3>
    @endunless --}}

    {{-- @php
     echo "hello php"   
    @endphp --}}
</body>
</body>
</html>