<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>

<body>
<nav class="bg-white border-gray-200 py-2.5 rounded sticky top-0">
    <div class="flex flex-wrap justify-between items-center mx-auto">
        <div class="w-[264px] flex">
            <a href="#" class="flex items-center mx-auto">
                <img src="img/LogoFull.svg" class="w-full" />
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
                    <span class="block text-[18px] font-semibold text-slate-900">Bonnie Green</span>
                    <span class="block text-[18px] font-semibold text-slate-900 truncate">name@flowbite.com</span>
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#"
                           class="block py-2 px-4 text-sm font-semibold text-indigo-400 hover:bg-gray-100">45
                            Очков</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-4 text-sm font-semibold text-indigo-400 hover:bg-gray-100">45
                            Очков</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 px-4 text-sm font-semibold text-indigo-400 hover:bg-gray-100">45
                            Очков</a>
                    </li>
                </ul>
                <a href="#"
                   class="block py-2 px-4 text-sm font-semibold text-indigo-400 hover:bg-gray-100">Выйти</a>
            </div>
        </div>
    </div>
</nav>

<div class="flex">
    <!-- SideBar -->
    <div class="w-[264px] h-[calc(100vh-4rem)] bg-[white] sticky left-0 top-[64px]">
        <div class="w-11/12 mx-auto my-2 text-[#64748B]">
            <a href="" class="mb-3">
                    <span class="text-xl flex rounded-[12px] py-3 px-4">
                        <img src="img/bell.svg" class="mr-4" />
                        Главная
                    </span>
            </a>
            <a href="" class="mb-3">
                    <span class="text-xl flex rounded-[12px] py-3 px-4">
                        <img src="img/bell.svg" class="mr-4" />
                        Главная
                    </span>
            </a>
            <a href="" class="mb-3">
                    <span class="text-xl flex rounded-[12px] py-3 px-4">
                        <img src="img/bell.svg" class="mr-4" />
                        Главная
                    </span>
            </a>
            <a href="" class="mb-3">
                    <span class="text-xl flex rounded-[12px] py-3 px-4">
                        <img src="img/bell.svg" class="mr-4" />
                        Главная
                    </span>
            </a>
        </div>

        <div class="w-full flex absolute bottom-0 text-[#64748B]">
            <div class="mx-auto w-11/12">
                    <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3">
                        <img src="img/bell.svg" class="mr-4" />Русский</span>
                <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3">
                        <img src="img/bell.svg" class="mr-4" />Настройки</span>
                <span class="text-xl flex rounded-[12px] py-3 px-4 mb-3">
                        <img src="img/bell.svg" class="mr-4" />Выйти</span>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
        <div class="mx-auto w-[98%] my-3">
            <h1 class="text-3xl font-bold text-[#323855]">
                Челленджи на данный момент
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
</div>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
