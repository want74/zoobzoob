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
    @foreach ($errors->all() as $item)
        <p>{{$item}}</p>
    @endforeach
    <form method="post" action="advanced/insert">
        @csrf
        <p>Captcha</p>
        @for ($i = 0; $i < 7; $i++)
            <div>
                <input type="radio" value="{{$i}}" name="capId" id="" style="">
                <label>{{$i}}</label>
            </div>
        @endfor
        <p>Target</p>
        @for ($i = 0; $i < 5; $i++)
            <div>
                <input type="radio" value="{{$i}}" name="tarId" id="" style="">
                <label>{{$i}}</label>
            </div>
        @endfor
        <button>Завершить</button>
    </form>
</body>
</html>