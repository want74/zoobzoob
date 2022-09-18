@extends('layouts/app')
@section('content')



<div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
    <div class="mx-auto w-[98%] my-3">
        <h1 class="text-3xl font-bold text-[#323855]">
            Челленджи на данный момент
        </h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                <!-- Записи -->
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] overflow-y-auto h-[350px]">
                    <div class="flex">
                        <div class="w-1/2">
                            <p class="font-semibold text-indigo-500 text-xl">
                                Сделано {{$doneChallenge}}/{{count($challenges)}}
                            </p>
                        </div>
                    </div>
                    <!-- Начало блоков челленджей -->
                    @foreach ($challenges as $challenge)
                        <a href="challenges/{{$challenge->id}}" class="">
                            <div class="bg-white rounded-[12px] h-[120px]">
                                <div class="flex h-full">
                                    <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                        <img src="img/zalupa.svg" class="h-1/2 w-1/2 m-auto">
                                    </div>

                                    <div class="w-auto box-border p-3 ml-auto">
                                        <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                            {{$challenge->name}}
                                        </p>

                                        <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                            {{$challenge->description}}
                                        </p>

                                        <div class="flex sticky top-full">
                                            <p class="text-indigo-500 font-semibold text-xl my-auto">{{$cntDoneChallenge[$challenge->id]}}/{{$cntChallenge[$challenge->id]}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <hr class="my-4">
                    @endforeach
        
                </div>
                <!-- О нас -->
                <div
                    class="bg-white rounded-[12px] px-[34px] py-[27px] flex col-span-2 bg-[url('img/bgAbout.svg')] bg-cover">
                    <div class="w-1/2">
                        <h1 class="text-xl text-slate-500 font-semibold mb-5">
                            ZoobZoob
                        </h1>
                        <p class="text-xl text-slate-500 font-semibold mb-5">
                            предостовляет необходимую информацию про поддержание и
                            улучшение состояния полости рта с помощью веб платформы.
                        </p>
                    </div>
                    <div class="w-1/2 bg-[url('./img/para.svg')] h-full bg-no-repeat bg-right"></div>
                </div>
            </div>
        </div>

        <h1 class="text-3xl font-bold text-[#323855]">
            Копи очки для бонусов!
        </h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                @foreach ($tasks as $task)
                <div class="bg-white rounded-[12px] h-[120px]">
                    <div class="flex h-full">
                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                            <img src="img/alert.svg" class="h-1/2 w-1/2 m-auto" />
                        </div>

                        <div class="w-[calc(100%-120px)] box-border p-3">
                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                {{$task->name}}
                            </p>

                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                {{$task->description}}
                            </p>

                            <div class="flex sticky top-full">
                                <form action = "/challenges/update"  method="post">@csrf
                                    <input name="taskId" value="{{$task->id}}" style="display: none">
                                    <button class="btn-link"><img src="img/Iconad.svg" class="my-auto w-[25px] h-[25px]" /></button>
                                </form>
                                @if ($doneTask[$task->id])
                                <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto w-max">
                                    Выполнено
                                </p>
                                @else
                                    <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto w-max">
                                        Не выполнено
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection