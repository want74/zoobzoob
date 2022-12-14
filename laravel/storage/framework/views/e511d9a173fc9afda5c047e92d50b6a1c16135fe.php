<?php $__env->startSection('content'); ?>
    <p class="font-bold text-xl mt-[40px]">Регистрация аккаунта</p>
    <p class="font-semibold text-sm">
        Для успешной регистрации заполните следуещее...
    </p>
    <hr class="my-3 h-px bg-[#9FA8DA] border-0 w-[400px]" />

    <form class="z-20 mt-5" method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">ФИО</label>
        <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="Иванов Иван Иванович" name="name" required />

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Почта</label>
        <input type="email" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="aqua@mail.ru" name="email" required />

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Номер
            телефона</label>
        <input type="tel" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="+79142917801" name="phone" required />

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Дата рождения</label>
        <input type="date" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="aqua@mail.ru" name="date" required />

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Пароль</label>
        <input type="password" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="Password" name="password" required />

        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 mt-2">Повторите
            пароль</label>
        <input type="password" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[400px] p-2.5"
                placeholder="Password" name="password_confirmation" required />

        <button type="submit"
                class="text-white bg-[#3949AB] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none mt-[50px] w-[400px]">
            Зарегистрироваться
        </button>
    </form>
    <div class="flex">
        <p class="font-thin text-center my-auto">Есть аккаунт?</p>
        <a href="<?php echo e(route('login')); ?>" class="decoration-0 ml-2 text-[#3949AB] my-auto">Войти</a>
    </div>
<?php $__env->stopSection(); ?>
            

<?php echo $__env->make('layouts/auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zoobzoob-end\laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>