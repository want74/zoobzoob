@extends('layouts/app')
@section('content')
    <!-- Content -->
    <div class=" bg-[#EEF2FF] w-full flex overflow-y-auto">
        <div class="mx-auto w-[98%] my-3 ">
            <div class="flex mt-[30px]">

                <h1 class="text-3xl font-bold text-[#323855] ml-[230px]">Мои записи</h1>
                <h1 class="text-3xl font-bold text-[#323855] ml-[190px]">Баллы</h1>
            </div>

            <div class="flex my-3">
                <div class="grid grid-cols-3 gap-3 w-full">
                    <div class="bg-white rounded-[12px] px-[34px] py-[27px]  h-[600px]">
                        <h1 class="text-3xl font-bold text-[#323855]">Профиль</h1>
                        @foreach($userData as $user)
                            <form action="{{route('editUser')}}" method="POST">
                                @csrf
                        <div class=" border-b-2 border-indigo-100 border-solid py-1">
                            <div
                                class="bg-gradient-to-r from-[#07E2C2] to-[#6268F0] w-full h-[100px] rounded-[12px] flex">
                                <button type="button" class="font-bold text-white ml-auto mr-6 my-auto" id="editUserButton">Редактировать</button>
                            </div>
                            <img src="img/avatar.svg" class="relative mt-[-35px]">
                            <p class="font-bold  text-lg">Имя пользователя</p>
                            <p class="font-semibold text-slate-500 text-sm"  style="display:block"  id="oldname">{{$user->name}}</p>

                        </div>
                        <div class="border-b-2 border-indigo-100 border-solid py-1">
                            <input type="text" name="name" id="name" style="display:none" placeholder="Имя пользователя" value="{{$user->name}}">
                            <p class="font-bold text-slate-500 text-lg">Телефон:</p>
                            <p class="font-semibold text-slate-500 text-base" style="display:block" id="oldphone">{{$user->phone}}</p>
                            <input type="text" name="phone" id="phone" style="display:none" placeholder="Телефон" value="{{$user->phone}}">
                            <p class="font-bold text-slate-500 text-lg">Город:</p>
                            <p class="font-semibold text-slate-500 text-base" style="display:block"  id="oldcity">@if($user->city == null)Незивестно @else {{$user->city}} @endif</p>
                            <input type="text" name="city" id="city" style="display:none" placeholder="Город" value="{{$user->city}}">
                            <p class="font-bold text-slate-500 text-lg">Электронная почта:</p>
                            <p class="font-semibold text-slate-500 text-base" style="display:block"  id="oldemail">{{$user->email}}</p>
                            <input type="text" name="email" id="email" style="display:none" placeholder="Электронная почта" value="{{$user->email}}">
                            <p class="font-bold text-slate-500 text-lg">Подписка:</p>
                            <p class="font-semibold text-slate-500 text-base" style="display:block"  id="oldsubscription">@if($user->subscription == null)Отключена@else {{$user->subscription}} @endif</p>
                            <p class="font-bold text-slate-500 text-lg">Язык:</p>
                            <p class="font-semibold text-slate-500 text-base" style="display:block"  id="oldlanguage">@if($user->language == null)Незивестно @else {{$user->language}} @endif</p>
                            <input type="text" name="language" id="language" style="display:none" placeholder="Язык" value="{{$user->language}}">
                                <button type="submit" style="display:none" id="userSubmit">Отправить</button>
                        </div>
                            </form>
                        @endforeach
                    </div>
                    <div>
                        @foreach($records as $recordid)
                            @if($recordid->status == 'true')

                            @endif
                            @if($recordid->status == 'Ожидаем ответа от агента')
                                    <div class="bg-white rounded-[12px] h-[250px] mb-4">
                                        <div class="flex h-full">
                                            <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                                <img src="img/eye.svg" class="h-1/3 w-1/2 m-auto" />
                                            </div>

                                            <div class="w-[calc(100%-120px)] box-border p-3">
                                                <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                                    Дата отсутствует
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
                    </div>
                            @endif
                            @if($recordid->status == 'ended')

                            @endif
                        @endforeach

                    <div class="bg-white rounded-[12px] px-[34px] py-[27px] flex h-[300px] bg-[url('../img/bgBal.svg')] bg-cover bg-no-repeat">
                        <div class="w-1/2">
                            <h1 class="text-base text-slate-500 font-semibold mb-5 text-[#3F51B5]">Всего: 15 очков
                            </h1>
                            <p class="text-base text-slate-500 font-semibold mb-5">
                                Набирайте больше очков выполняя различные, полезные задания и можете потратить на
                                получение специальных...
                            </p>
                        </div>
                        <div class="w-1/2 bg-[url('./img/bigstar.svg')] h-full bg-no-repeat bg-right"></div>
                    </div>

                </div>
                </div>
            </div>
        </div>
        </div>
            <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        $( document ).ready(function() {
            var phone = document.getElementById('phone')
            var name = document.getElementById('name')
            var email = document.getElementById('email')
            var language = document.getElementById('language')
            var city = document.getElementById('city')
            var oldphone = document.getElementById('oldphone')
            var oldname = document.getElementById('oldname')
            var oldemail = document.getElementById('oldemail')
            var oldlanguage = document.getElementById('oldlanguage')
            var oldcity = document.getElementById('oldcity')
            var editUserButton = document.getElementById('editUserButton')
            var submitButton = document.getElementById('userSubmit')
            editUserButton.onclick = function (){
                oldphone.style.display = 'none'
                oldname.style.display = 'none'
                oldemail.style.display = 'none'
                oldlanguage.style.display = 'none'
                oldcity.style.display = 'none'
                phone.style.display = 'block'
                name.style.display = 'block'
                email.style.display = 'block'
                language.style.display = 'block'
                city.style.display = 'block'
                submitButton.style.display = 'block'
                editUserButton.style.display = 'none'
            }
        });
</script>
@endsection