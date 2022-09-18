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
                <img src="img/LogoFull.svg" class="w-full">
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
            <div class="flex h-[100px]">
                <h1 class="text-3xl font-bold text-[#323855]">
                    Наши гайды
                </h1>
            </div>

            <div class="flex my-3">
                <div class="grid grid-cols-3 gap-5 w-full">
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

        </div>
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
