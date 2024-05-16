@extends('layouts.app')

@section('content')
<div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
    <div class="mx-auto w-[98%] my-3">
        <h1 class="text-3xl font-bold text-[#323855]">
            Ваши записи и стоматологии
        </h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                <!-- Записи -->
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] overflow-y-auto h-[350px]">
                    <!-- Начало блоков записей -->
                    @foreach($records as $recordid)
                    @if($recordid->status == 'Ожидаем ответа от агента')
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-full">
                            <p class="font-semibold text-slate-500 text-xl mb-3">
                                Ожидается
                            </p>
                            <p class="font-semibold text-slate-500 text-xl mb-3">
                                Врач: Ожидается
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Время: Ожидается
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Адрес: Ожидается
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Причина: Осмотр у ортодонта
                            </p>
                        </div>
                    </div>
                    @else
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-full">
                            <p class="font-semibold text-slate-500 text-xl mb-3">
                                {{$recordid->date}}
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Врач: {{$recordid->doctor}}
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Время: {{$recordid->time}}
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Адрес: {{$recordid->address}}
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Причина: Осмотр у ортодонта
                            </p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- О нас -->
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] flex col-span-2 bg-[url('img/bgAbout.svg')] bg-cover">
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

        <h1 class="text-3xl font-bold text-[#323855]">Наши гайды</h1>
        <div class="flex my-3">
            <div class="grid grid-cols-4 gap-3 w-full">
                @foreach($results as $result)
                    <a href="{{route('guidelink',['id'=>$result->id])}}">
                        <div
                            class="bg-white rounded-[12px] px-[34px] py-[27px] h-[250px] bg-[url('./img/bgGid.svg')] bg-[length:100%_120%]">
                            <div class="flex h-full">
                                <div
                                    class="w-1/3 bg-[url('./img/chetka.svg')] h-full bg-no-repeat bg-contain bg-left">
                                </div>
                                <div class="w-full">
                                    <p class="my-auto font-semibold text-slate-500 text-xl">
                                        {{$result->name}}
                                    </p>
                                    <p class="my-auto font-base text-slate-500 text-lg mt-3">
                                        {{$result->description}}
                                    </p>
                                    <div class="flex sticky top-full">
                                        <img src="img/play-circle.svg" alt="play" class="ml-auto mt-auto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                        </form>
                    @endforeach

            </div>
        </div>

        <h1 class="text-3xl font-bold text-[#323855]">
            Копи очки для бонусов, выполняя челленджи!
        </h1>
        <div class="flex my-3">
            <div class="grid grid-cols-4 gap-3 w-full">
                @foreach($challenges as $challenge)
                <div class="bg-white rounded-[12px] h-[120px]">
                    <div class="flex h-full">
                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                            <img src="{{asset('img/zalupa.svg')}}" class="h-1/2 w-1/2 m-auto">
                        </div>

                        <div class="w-auto box-border p-3 ml-auto">
                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                {{$challenge->name}}
                            </p>

                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                {{$challenge->description}}
                            </p>

                            <div class="flex sticky top-full">
                                <!--<img src="img/yellow star.svg" class="ml-auto my-auto w-[40px] h-[40px]" />-->
                                <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto">{{$cntDoneChallenge[$challenge->id]}}/{{$cntChallenge[$challenge->id]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($userData as $user)
                            <div>
                                <h1>Личный кабинет</h1>
                                <p>Имя пользователя: {{$user->name}}</p>
                                <p>Телефон: {{$user->phone}}</p>
                                <p>Город: {{$user->city}}</p>
                                <p>Электронная почта: {{$user->email}}</p>
                                <p>Подписка: @if($user->subscription == null)Обычная@else {{$user->subscription}} @endif</p>
                                <p>Язык: {{$user->language}}</p>
                            </div>
                            <form action="{{route('editUser')}}" method="POST">
                                @csrf
                                <div style="display:none" id="hiddenInput">
                                    <input type="text" name="name" placeholder="Имя пользователя" value="{{$user->name}}">
                                    <input type="text" name="phone" placeholder="Телефон" value="{{$user->phone}}">
                                    <input type="text" name="city" placeholder="Город" value="{{$user->city}}">
                                    <input type="text" name="email" placeholder="Электронная почта" value="{{$user->email}}">
                                    <input type="text" name="language" placeholder="Язык" value="{{$user->language}}">
                                </div>
                                <button type="button" id="userEditButton">Редактировать</button>
                                <button type="submit" style="display:none" id="userSubmit">Отправить</button>
                            </form>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endforeach
                        <div>
                            <h1>Записаться к врачу</h1>
                            <form action="{{route('insertRecord')}}" method="POST">
                                @csrf
                                <button>Записаться к врачу</button>
                            </form>
                        </div>
                        <hr>
                        @foreach($records as $recordid)
                            @if($recordid->status == 'true')
                                <p>Дата:{{$recordid->datetime}}</p>
                                <p>Время:{{$recordid->time}}</p>
                                <p>Адрес:{{$recordid->address}}</p>
                                <p>Статус:Одобрен</p>
                                <p>Рассмотрили заявку:{{$recordid->updated_at}}</p>
                                <hr>
                            @endif
                            @if($recordid->status == 'Ожидаем ответа от агента')
                                <p>Статус:{{$recordid->status}}</p>
                                <p>Заявка создана:{{$recordid->created_at}}</p>
                                <hr>
                            @endif
                            @if($recordid->status == 'ended')
                                <p>Дата:{{$recordid->datetime}}</p>
                                <p>Время:{{$recordid->time}}</p>
                                <p>Адрес:{{$recordid->address}}</p>
                                <p>Статус:Завершен</p>
                                <p>Запись завершена:{{$recordid->updated_at}}</p>
                                <hr>
                            @endif
                        @endforeach
                        @if(Auth::user()->role == 2)
                            <h1>Записи:</h1>
                            @foreach($editorRecords as $editorRecord)
                                @if($editorRecord->status == 'Ожидаем ответа от агента')
                                    <p>Имя:{{$editorRecord->name}}</p>
                                    <p>Телефон:{{$editorRecord->phone}}</p>
                                    <p>Почта:{{$editorRecord->email}}</p>
                                    <p>Возраст:{{$editorRecord->date}}</p>
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
                            @foreach($records as $recordid)
                                @if($recordid->status == 'true')
                                    <p>Имя:{{$recordid->name}}</p>
                                    <p>Телефон:{{$recordid->phone}}</p>
                                    <p>Почта:{{$recordid->email}}</p>
                                    <p>Возраст:{{$recordid->date}}</p>
                                    <p>Дата:{{$recordid->datetime}}</p>
                                    <p>Время:{{$recordid->time}}</p>
                                    <p>Адрес:{{$recordid->address}}</p>
                                    <p>Рассмотрили заявку:{{$recordid->updated_at}}</p>
                                    <form action="{{route('endRecord')}}" method="POST">
                                        @csrf
                                        <input type="text" style="display:none" name="id" value="{{$recordid->id}}">
                                        <button>Завершить</button>
                                    </form>
                                @endif
                            @endforeach
                        @endif
                        <hr>
                        <h1>Гайды</h1>
                        @if(Auth::user()->role == 1)
                            <div>
                                <form action="{{route('insertGuide')}}" method="POST">
                                    @csrf
                                    <input type="text" name="name" placeholder="Название">
                                    <input type="text" name="youtube_url" placeholder="Ссылка на ютуб">
                                    <input type="text" name="description" placeholder="Краткое описание">
                                    <button type="submit">Отправить</button>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </form>
                            </div>
                        @endif
                        <hr>
                        <div>
                            @foreach($results as $result)
                                <div id="dataContainer{{$result->id}}">
                                    <h1>{{$result->name}}</h1>
                                    <p>{{$result->youtube_url}}</p>
                                    <p>{{$result->description}}</p>
                                </div>
                                @if(Auth::user()->role)
                                    <form action="{{route('guideEdit')}}" method="GET">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" style="display:none" value="{{$result->id}}" name="id">
                                            <input type="text" style="display:none" value="{{$result->name}}" name="name"  id="name{{$result->id}}">
                                            <input type="text" style="display:none" value="{{$result->youtube_url}}" name="youtube_url"  id="youtube_url{{$result->id}}">
                                            <input type="text" style="display:none" value="{{$result->description}}" name="description"  id="description{{$result->id}}">
                                            <button class="btn btn-outline-secondary" id="edit{{$result->id}}" type="button">Редактировать</button>
                                            <input id="submit{{$result->id}}" style="display:none" type="submit" value="Принять">
                                        </div>
                                    </form>
                                    <form action="{{route('deleteGuide')}}" method="GET">
                                        @csrf
                                        <input type="text" style="display:none" value="{{$result->id}}" name="id">
                                        <Button class="btn btn-outline-secondary">Удалить</Button>
                                    </form>
                                @endif
                                <hr>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $( document ).ready(function() {
            var hiddenInput = document.getElementById('hiddenInput')
            var editUserButton = document.getElementById('userEditButton')
            var submitButton = document.getElementById('userSubmit')
            editUserButton.onclick = function (){
                hiddenInput.style.display = 'block'
                submitButton.style.display = 'block'
                editUserButton.style.display = 'none'
            }
            @foreach($results as $result)
            var editButton{{$result->id}} = document.getElementById('edit{{$result->id}}')
            var submitButton{{$result->id}} = document.getElementById('submit{{$result->id}}')
            var dataContainer{{$result->id}} = document.getElementById('dataContainer{{$result->id}}')
            var newName{{$result->id}} = document.getElementById('name{{$result->id}}')
            var newYoutube_url{{$result->id}} = document.getElementById('youtube_url{{$result->id}}')
            var newDescription{{$result->id}} = document.getElementById('description{{$result->id}}')
            editButton{{$result->id}}.onclick = function (){
                editButton{{$result->id}}.style.display = 'none'
                dataContainer{{$result->id}}.style.display = 'none'
                submitButton{{$result->id}}.style.display = 'block'
                newName{{$result->id}}.style.display = 'block'
                newYoutube_url{{$result->id}}.style.display = 'block'
                newDescription{{$result->id}}.style.display = 'block'
            }
            @endforeach
        });
    </script>
-->
@endsection
