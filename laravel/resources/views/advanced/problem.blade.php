<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advanced Auth</title>
</head>
<body>
    @foreach ($errors->all() as $item)
        <p>{{$item}}</p>
    @endforeach
    <form method="post" action="/advanced/problem/insert">
        @csrf
        <input type="" name="num" style="display: none" value="{{$num}}">
        <input type="checkbox" name="problem[]" value="01">01 <br/>
        <input type="checkbox" name="problem[]" value="02">02 <br/>
        <input type="checkbox" name="problem[]" value="03">03 <br/>
        <input type="checkbox" name="problem[]" value="04">04 <br/>
        <input type="checkbox" name="problem[]" value="05">05 <br/>
        <button>Отправить</button>
    </form>
</body>
</html>
