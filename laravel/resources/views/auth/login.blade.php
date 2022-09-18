@extends('layouts/auth')
@section('content')
    <p class="font-bold text-xl  mt-[40px]">Вход в аккаунт</p>
    <p class="font-semibold text-sm">
        Для успешного входа заполните следующее...
    </p>
    <hr class="my-3 h-px bg-[#9FA8DA] border-0 w-[400px] " />

    <form class="z-20 mt-5"  method="POST" action="{{ route('login') }}">
        @csrf
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Почта</label>
        <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="aqua@mail.ru" name="email" required />

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Пароль</label>
        <input type="password" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="Password" name="password" required />
        <div><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить</div>
        <button type="submit"
                class="text-white bg-[#3949AB] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none mt-[50px] w-[400px]">
            Войти
        </button>
    </form>
    <div class="flex">
        <p class="font-thin text-center my-auto">
            Нет аккаунта?
        </p>
        <a href="{{ route('register') }}" class="decoration-0 ml-2 text-[#3949AB] my-auto">Создать аккаунт</a>
    </div>
@endsection