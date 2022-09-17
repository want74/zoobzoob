@extends('layouts/app')
@section('content')
    <form method="post" action="appointment/insert">
        @csrf
        <div>
            <input type="radio" value="exam" name="target" id="" style="">
            <label>exam</label>
        </div>
        <div>
            <input type="radio" value="braces" name="target" id="" style="">
            <label>braces</label>
        </div>
        <div>
            <input type="radio" value="whitening" name="target" id="" style="">
            <label>whitening</label>
        </div>
        <div>
            <input type="radio" value="filling" name="target" id="" style="">
            <label>filling</label>
        </div>
        <button>Записаться</button>
    </form>
@endsection