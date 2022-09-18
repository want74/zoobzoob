<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
<nav class="bg-white border-gray-200 py-2.5 rounded sticky top-0">
    <div class="flex flex-wrap justify-between items-center mx-auto">
        <div class="w-[264px] flex">
            <a href="#" class="flex items-center mx-auto">
                <span class="self-center text-3xl font-bold whitespace-nowrap text-[#323855]">Zoob Zoob</span>
            </a>
        </div>
        <div class="flex items-center md:order-2 mr-2">
            <img class="w-4 h-4 mx-[22px]" src="img/bell.svg" alt="bell" />

            <img class="w-4 h-4 mx-[22px]" src="img/components.svg" alt="components" />
            <button type="button mx-[22px]"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-[44px] h-[44px] rounded-full"
                     src="https://i.pinimg.com/736x/0f/05/6b/0f056bda7800280375fc274c5464ff31.jpg"
                     alt="user photo" />
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                 id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                 data-popper-placement="bottom" style="
              position: absolute;
              inset: 0px auto auto 0px;
              margin: 0px;
              transform: translate(0px, 210px);
            ">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900">Bonnie Green</span>
                    <span class="block text-sm font-medium text-gray-500 truncate">name@flowbite.com</span>
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="flex">
    <!-- SideBar -->
    <div class="w-[264px] h-[calc(100vh-4rem)] bg-[white] sticky left-0 top-[64px]">
        <div class="w-11/12 mx-auto my-2 text-[#64748B]">
                <span class="text-xl flex bg-indigo-100 rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                                             class="mr-4">Главная</span>
            <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                           class="mr-4">Главная</span>
            <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                           class="mr-4">Главная</span>
            <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                           class="mr-4">Главная</span>
            <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                           class="mr-4">Главная</span>
            <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                           class="mr-4">Главная</span>
        </div>

        <div class="w-full flex absolute bottom-0 text-[#64748B]">
            <div class="mx-auto w-11/12">
                    <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                                   class="mr-4">Русский</span>
                <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                               class="mr-4">Настройки</span>
                <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3"> <img src="img/bell.svg"
                                                                               class="mr-4">Выйти</span>
            </div>
        </div>
    </div>
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
                        <div class="flex w-full">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                            <button class="font-bold text-right no-underline ml-auto">Выйти</button>
                            </form>
                        </div>
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
</body>
</html>
