<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        path:hover {
            fill: #4f46e5;
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
                <h1 class="text-[#323855] font-bold text-3xl my-6">
                    Выберите наиболее похожие на ваши зубы
                </h1>
                <form method="post" action="advanced/insert">
                    @csrf
                <div class="grid grid-cols-3 gap-3">
                    @for ($i = 1; $i < 4; $i++)
                        <div class="bg-white rounded-[12px] px-[45px] py-[38px] box-border">
                            <input type="radio" value="{{$i}}" name="capId" id="" style="">
                            <img src="../img/{{$i}}.png" class="w-full" />
                        </div>
                    @endfor
                    <input type="text" value="сохранить здоровье зубов" name="target" id="" style="display:none">
                </div>
                <div class="flex mt-8">
                    <button
                        class="bg-[#6366F1] rounded-[12px] px-[24px] py-[10px] text-white font-bold text-2xl ml-auto">
                        Готово
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
