@extends('layouts/app')
@section('content')
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
        @for ($i = 0; $i < 4; $i++)
            <div>
                <input type="radio" value="{{$i}}" name="capId" id="" style="">
                <label><img src="{{asset('teeth/'. $i. '.jpg')}}" alt="" style="height: 36px;"></label>
            </div>
        @endfor
        <p>Target</p>
            <div>
                <input type="radio" value="сохранить здоровье зубов" name="target" id="" style="">
                <label>сохранить здоровье зубов</label>
                <input type="radio" value="вылечить зубы" name="target" id="" style="">
                <label>вылечить зубы</label>
            </div>
        <button>Завершить</button>
    </form>
@endsection
    