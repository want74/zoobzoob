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
            <div class="m-auto">
                <img src="{{asset('img/LogoFull.svg')}}" class="mx-auto" />
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>

</html>