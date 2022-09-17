@extends('layouts/app')
@section('content')
    <form method="post" action="/advanced/problem/insert">
        @csrf
        <input type="" name="num" style="display: none" value="{{$num}}">
        <input type="checkbox" name="problem[]" value="кариес">кариес<br/>
        <input type="checkbox" name="problem[]" value="пульпит">пульпит<br/>
        <input type="checkbox" name="problem[]" value="нет зуба">нет зуба<br/>
        <input type="checkbox" name="problem[]" value="треснул">треснул <br/>
        <button>Отправить</button>
    </form>
@endsection
    
