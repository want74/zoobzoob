<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advanced Auth</title>
</head>
<body>
    @for ($i = 0; $i < 32; $i++)
        <form method="post" action="/advanced/problem">
            @csrf
            <input type="" name="num" style="display: none" value="{{$i}}">
            <button>{{$i}}</button>
        </form>
        @for ($j = 0; $j < count($data); $j++)
            @if ($data[$j]->num==$i)
                @foreach ($problems[$j] as $problem)
                    <p>{{$problem}}</p>
                @endforeach
            @endif
        @endfor
    @endfor
</body>
</html>