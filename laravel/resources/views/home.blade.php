@extends('layouts.app')

@section('content')
<div class="h-[calc(100vh-4rem)] bg-[#EEF2FF] w-full flex">
    <div class="mx-auto w-[98%] my-3">
        <h1 class="text-3xl font-bold text-[#323855]">Ваши записи и стоматологии</h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                <div class="bg-white rounded-[12px] px-[34px] py-[27px]">
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-1/2">
                            <p class="font-semibold text-slate-500 text-lg">17 Сентября</p>
                            <p class="font-semibold text-slate-500 text-lg">Время: 07:15 Часов</p>
                            <p class="font-semibold text-slate-500 text-lg">Адрес: Ойунского, 6/1</p>
                        </div>
                        <div class="w-1/2 flex">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Контрольное посещение на
                                осмотр брекетов</p>
                        </div>
                    </div>
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-1/2">
                            <p class="font-semibold text-slate-500 text-lg">17 Сентября</p>
                            <p class="font-semibold text-slate-500 text-lg">Время: 07:15 Часов</p>
                            <p class="font-semibold text-slate-500 text-lg">Адрес: Ойунского, 6/1</p>
                        </div>
                        <div class="w-1/2 flex">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Контрольное посещение на
                                осмотр брекетов</p>
                        </div>
                    </div>
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-1/2">
                            <p class="font-semibold text-slate-500 text-lg">17 Сентября</p>
                            <p class="font-semibold text-slate-500 text-lg">Время: 07:15 Часов</p>
                            <p class="font-semibold text-slate-500 text-lg">Адрес: Ойунского, 6/1</p>
                        </div>
                        <div class="w-1/2 flex">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Контрольное посещение на
                                осмотр брекетов</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[12px] px-[34px] py-[27px]">
                    <h1 class="text-xl text-slate-500 font-semibold mb-5">Стоматологи для вас...</h1>

                    <span class="flex my-5">
                        <div class="w-1/4">
                            <img src="https://i.pinimg.com/736x/0f/05/6b/0f056bda7800280375fc274c5464ff31.jpg"
                                class="rounded-full w-[50px] h-[50px] mx-auto">
                        </div>
                        <div class="w-full">
                            <p class="text-indigo-500 text-lg font-semibold">Виват</p>
                            <p class="text-[#ABADC6] text-base font-medium">Ойунского 6/1</p>
                        </div>
                    </span>
                    <span class="flex my-5">
                        <div class="w-1/4">
                            <img src="https://i.pinimg.com/736x/0f/05/6b/0f056bda7800280375fc274c5464ff31.jpg"
                                class="rounded-full w-[50px] h-[50px] mx-auto">
                        </div>
                        <div class="w-full">
                            <p class="text-indigo-500 text-lg font-semibold">Виват</p>
                            <p class="text-[#ABADC6] text-base font-medium">Ойунского 6/1</p>
                        </div>
                    </span>
                    <span class="flex my-5">
                        <div class="w-1/4">
                            <img src="https://i.pinimg.com/736x/0f/05/6b/0f056bda7800280375fc274c5464ff31.jpg"
                                class="rounded-full w-[50px] h-[50px] mx-auto">
                        </div>
                        <div class="w-full">
                            <p class="text-indigo-500 text-lg font-semibold">Виват</p>
                            <p class="text-[#ABADC6] text-base font-medium">Ойунского 6/1</p>
                        </div>
                    </span>

                    <div class="flex w-full">
                        <a href="#" class="mx-auto text-xl text-slate-500 font-semibold"> Смотреть всё</a>
                    </div>
                </div>

                <div class="bg-white rounded-[12px] px-[34px] py-[27px] flex">
                    <div class="w-1/2">
                        <h1 class="text-xl text-slate-500 font-semibold mb-5">ZoobZoob </h1>
                        <p class="text-xl text-slate-500 font-semibold mb-5">
                            предостовляет необходимую информацию про поддержание и улучшение состояния полости рта с помощью веб платформы.
                        </p>
                    </div>
                    <div class="w-1/2 bg-[url('./img/para.svg')] h-full bg-no-repeat bg-right"></div>
                </div>

            </div>
        </div>

        <h1 class="text-3xl font-bold text-[#323855]">Наши гайды</h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] h-[216px]">
                    <div class="flex h-full">
                        <div class="w-1/3 bg-[url('./img/chetka.svg')] h-full bg-no-repeat bg-left">
                        </div>
                        <div class="w-full">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Какие зубные щетки лучше? </p>
                            <div class="flex h-[90%]">
                                <img src="img/play-circle.svg" alt="play" class="ml-auto mt-auto">
                            </div>                                    
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[12px] px-[34px] py-[27px] h-[216px]">
                    <div class="flex h-full">
                        <div class="w-1/3 bg-[url('./img/chetka.svg')] h-full bg-no-repeat bg-left">
                        </div>
                        <div class="w-full">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Какие зубные щетки лучше? </p>
                            <div class="flex h-[90%]">
                                <img src="img/play-circle.svg" alt="play" class="ml-auto mt-auto">
                            </div>                                    
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] h-[216px]">
                    <div class="flex h-full">
                        <div class="w-1/3 bg-[url('./img/chetka.svg')] h-full bg-no-repeat bg-left">
                        </div>
                        <div class="w-full">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Какие зубные щетки лучше? </p>
                            <div class="flex h-[90%]">
                                <img src="img/play-circle.svg" alt="play" class="ml-auto mt-auto">
                            </div>                                    
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <h1 class="text-3xl font-bold text-[#323855]">Копи очки для бонусов!</h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] h-[216px]">
                    <div class="flex h-full">                                
                        <div class="w-full">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Марафон чистки зубов</p>                        
                        </div>

                        <div class="w-1/6 bg-[url('./img/yellow%20star.svg')] h-full bg-no-repeat bg-left">
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] h-[216px]">
                    <div class="flex h-full">                                
                        <div class="w-full">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Марафон чистки зубов</p>                        
                        </div>

                        <div class="w-1/6 bg-[url('./img/yellow%20star.svg')] h-full bg-no-repeat bg-left">
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] h-[216px]">
                    <div class="flex h-full">                                
                        <div class="w-full">
                            <p class="my-auto font-semibold text-slate-500 text-lg">Марафон чистки зубов</p>                        
                        </div>

                        <div class="w-1/6 bg-[url('./img/yellow%20star.svg')] h-full bg-no-repeat bg-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
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
