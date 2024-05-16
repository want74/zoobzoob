@extends('layouts/app')
@section('content')
    <!-- Content -->
    <div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
        <div class="mx-auto w-[98%] my-3">
            <h1 class="text-3xl font-bold text-[#323855]">
                Ваши записи
            </h1>

            <div class="flex my-3">
                <div class="grid grid-cols-3 gap-3 w-full">
                    @foreach($records as $recordid)
                        @if($recordid->status == 'Ожидаем ответа от агента')
                    <div class="bg-white rounded-[12px] h-auto">
                        <div class="flex h-full">
                            <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                <img src="img/eye.svg" class="h-1/3 w-1/2 m-auto" />
                            </div>

                            <div class="w-[calc(100%-120px)] box-border p-3">
                                <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                    Дата: отсутствует
                                </p>

                                <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                    Время: отсутствует
                                </p>

                                <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                    Врач: отсутствует
                                </p>

                                <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                    Адрес: отсутствует
                                </p>

                                <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                    Причина: Осмотр у ортодонта
                                </p>

                                <div class="flex sticky top-full">
                                    <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto w-max">
                                        Агент рассматривает
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                        @if($recordid->status == 'true')
                                <div class="bg-white rounded-[12px] h-auto">
                                    <div class="flex h-full">
                                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                            <img src="img/check-circle.svg" class="h-1/3 w-1/2 m-auto" />
                                        </div>

                                        <div class="w-[calc(100%-120px)] box-border p-3">
                                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                                {{$recordid->datetime}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Время: {{$recordid->time}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Врач: {{$recordid->doctor}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Адрес: {{$recordid->address}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Причина: Осмотр у ортодонта
                                            </p>

                                            <div class="flex sticky top-full">
                                                <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto w-max">
                                                    Одобрен
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @if($recordid->status == 'ended')
                                <div class="bg-white rounded-[12px] h-auto">
                                    <div class="flex h-full">
                                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                            <img src="img/check-done-01.svg" class="h-1/3 w-1/2 m-auto" />
                                        </div>

                                        <div class="w-[calc(100%-120px)] box-border p-3">
                                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                                {{$recordid->datetime}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Время: {{$recordid->time}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Врач: {{$recordid->doctor}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Адрес: {{$recordid->address}}
                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Причина: Осмотр у ортодонта
                                            </p>

                                            <div class="flex sticky top-full">
                                                <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto w-max">
                                                    Завершен
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                    <a href="{{route('insertRecord')}}" class="hover:opacity-70 duration-300">
                        <div class="bg-white rounded-[12px] h-full">
                            <div class="flex h-full">
                                <img src="img/plus-circle.svg" class="w-1/6 m-auto" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->role == 2)
    <div>
        <h1>Записи:</h1>
        @foreach($editorRecords as $editorRecord)
            @if($editorRecord->status == 'Ожидаем ответа от агента')
                <p>Имя:{{$editorRecord->name}}</p><br>
                <p>Телефон:{{$editorRecord->phone}}</p><br>
                <p>Почта:{{$editorRecord->email}}</p><br>
                <p>Возраст:{{$editorRecord->date}}</p><br>
                <form action="{{route('editRecord')}}" method="POST">
                    @csrf
                    <div>
                        <input type="text" name="id" value="{{$editorRecord->id}}" style="display:none">
                        <input type="text" name="date" placeholder="Введите дату приема">
                        <input type="text" name="time" placeholder="Введите время приема">
                        <input type="text" name="doctor" placeholder="Врач">
                        <input type="text" name="address" placeholder="Введите адрес">
                        <button>Принять</button>
                    </div>
                </form>
                <hr>
            @endif
        @endforeach
        <h1>Ваши записи:</h1>
        @foreach($editorRecords as $recordid)
            @if($recordid->status == 'true')
                <p>Имя:{{$recordid->name}}</p><br>
                <p>Телефон:{{$recordid->phone}}</p><br>
                <p>Почта:{{$recordid->email}}</p><br>
                <p>Возраст:{{$recordid->date}}</p><br>
                <p>Дата:{{$recordid->datetime}}</p><br>
                <p>Время:{{$recordid->time}}</p><br>
                <p>Адрес:{{$recordid->address}}</p><br>
                <p>Рассмотрили заявку:{{$recordid->updated_at}}</p><br>
                <form action="{{route('endRecord')}}" method="POST">
                    @csrf
                    <input type="text" style="display:none" name="id" value="{{$recordid->id}}">
                    <button>Завершить</button>
                </form>
            @endif
        @endforeach
    </div>
    @endif
@endsection
