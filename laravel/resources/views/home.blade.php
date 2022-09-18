@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <form action="{{route('insertRecord')}}" method="GET">
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
@endsection
