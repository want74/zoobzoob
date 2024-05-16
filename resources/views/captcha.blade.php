@extends('layouts/auth')
@section('content')
    <h1 class="text-[#323855] font-bold text-3xl my-6 text-center">
        Укажите состояние полости рта
    </h1>
    <form method="post" action="advanced/insert">
        @csrf
    <div class="grid grid-cols-3 gap-3">
        @for ($i = 1; $i < 4; $i++)
            <div class="bg-white rounded-[12px] px-[45px] py-[38px] box-border">
                <input type="radio" value="{{$i}}" name="capId" id="" style="">
                <img src="../img/{{$i}}.png" class="w-full" />
            </div>
        @endfor
        <input type="text" value="сохранить здоровье зубов" name="target" id="" style="display:none">
    </div>
    <div class="flex mt-8">
        <button
            class="bg-[#6366F1] rounded-[12px] px-[24px] py-[10px] text-white font-bold text-2xl ml-auto">
            Готово
        </button>
    </div>
    </form>
@endsection
