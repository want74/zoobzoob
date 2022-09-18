@extends('layouts/auth')
@section('content')
    <div class="bg-white rounded-[12px] px-[45px] py-[38px] box-border">
        <p class="text-2xl text-slate-500 font-semibold">
            Селектор выбора
        </p>
        <form method="post" action="/advanced/problem/insert">
            @csrf
        <div class="grid grid-cols-2 gap-2 my-4">
            <div class="bg-white rounded-[12px] h-[160px] border-solid border-2 border-gray-200">
                <div class="flex h-full">
                    <div class="w-[140px] h-full flex bg-indigo-100 rounded-[12px]">
                        <img src="../img/alert.svg" class="h-1/2 w-1/2 m-auto">
                    </div>

                    <div class="w-auto box-border p-3 ml-auto">
                        <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                            Кариес
                        </p>

                        <p class="my-auto font-base text-slate-500 text-lg mt-3 w-fit">
                            Это колонии бактерий, которые постепенно разрушают дентин.
                        </p>

                        <div class="flex sticky top-full">
                            <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto"><input type="checkbox" name="problem[]" value="кариес"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-[12px] h-[160px] border-solid border-2 border-gray-200">
                <div class="flex h-full">
                    <div class="w-[140px] h-full flex bg-indigo-100 rounded-[12px]">
                        <img src="../img/alert.svg" class="h-1/2 w-1/2 m-auto">
                    </div>

                    <div class="w-auto box-border p-3 ml-auto">
                        <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                            Пульпит
                        </p>

                        <p class="my-auto font-base text-slate-500 text-lg mt-3 w-fit">
                            Это колонии бактерий, которые постепенно разрушают дентин.
                        </p>

                        <div class="flex sticky top-full">
                            <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto"><input type="checkbox" name="problem[]" value="пульпит"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-[12px] h-[160px] border-solid border-2 border-gray-200">
                <div class="flex h-full">
                    <div class="w-[140px] h-full flex bg-indigo-100 rounded-[12px]">
                        <img src="../img/alert.svg" class="h-1/2 w-1/2 m-auto">
                    </div>

                    <div class="w-auto box-border p-3 ml-auto">
                        <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                            Нету зуба
                        </p>

                        <p class="my-auto font-base text-slate-500 text-lg mt-3 w-fit">
                            Это колонии бактерий, которые постепенно разрушают дентин.
                        </p>

                        <div class="flex sticky top-full">
                            <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto"><input type="checkbox" name="problem[]" value="нет зуба"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-[12px] h-[160px] border-solid border-2 border-gray-200">
                <div class="flex h-full">
                    <div class="w-[140px] h-full flex bg-indigo-100 rounded-[12px]">
                        <img src="../img/alert.svg" class="h-1/2 w-1/2 m-auto">
                    </div>

                    <div class="w-auto box-border p-3 ml-auto">
                        <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                            Зуб треснул
                        </p>

                        <p class="my-auto font-base text-slate-500 text-lg mt-3 w-fit">
                            Это колонии бактерий, которые постепенно разрушают дентин.
                        </p>

                        <div class="flex sticky top-full">
                            <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto"><input type="checkbox" name="problem[]" value="треснул"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <input type="" name="num" style="display: none" value="{{$_GET['zoob_id']}}">
            <button class="bg-[#6366F1] rounded-[12px] px-[24px] py-[10px] text-white font-bold text-2xl ml-auto">Отправить</button>
        </form>
    </div>
@endsection
