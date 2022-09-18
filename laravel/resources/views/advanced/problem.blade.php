

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        path:hover {
            fill: #4F46E5;
            transition: 0.5s;
        }
    </style>
</head>

<body class="bg-indigo-50 bg-cover bg-no-repeat">
<div class="flex">
    <div class="bg-[url('../img/kostReg.svg')] w-1/3 h-screen flex"></div>
    <div class="bg-[url('../img/bgAuth.svg')] w-2/3 h-screen">
        <div class="flex h-full w-full">
            <div class="m-auto w-10/12 h-[80vh]">
                <img src="img/logo.svg" class="mx-auto" />
                <h1 class="text-[#323855] font-bold text-3xl">Расположение зубов</h1>
                <div class="bg-white rounded-[12px] px-[45px] py-[38px] box-border">
                    <p class="text-2xl text-slate-500 font-semibold">
                        Селектор выбора
                    </p>
                    <form method="post" action="/advanced/problem/insert">
                        @csrf
                    <div class="grid grid-cols-2 gap-2">
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
                        <button>Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
