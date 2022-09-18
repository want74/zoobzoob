<?php $__env->startSection('content'); ?>
<div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
    <div class="mx-auto w-[98%] my-3">
        <h1 class="text-3xl font-bold text-[#323855]">
            Ваши записи и стоматологии
        </h1>
        <div class="flex my-3">
            <div class="grid grid-cols-3 gap-3 w-full">
                <!-- Записи -->
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] overflow-y-auto h-[350px]">
                    <!-- Начало блоков записей -->
                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recordid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($recordid->status == 'Ожидаем ответа от агента'): ?>
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-full">
                            <p class="font-semibold text-slate-500 text-xl mb-3">
                                Ожидается
                            </p>
                            <p class="font-semibold text-slate-500 text-xl mb-3">
                                Врач: Ожидается
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Время: Ожидается
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Адрес: Ожидается
                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Причина: Осмотр у ортодонта
                            </p>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="flex border-b-2 border-indigo-100 border-solid py-1">
                        <div class="w-full">
                            <p class="font-semibold text-slate-500 text-xl mb-3">
                                <?php echo e($recordid->date); ?>

                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Врач: <?php echo e($recordid->doctor); ?>

                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Время: <?php echo e($recordid->time); ?>

                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Адрес: <?php echo e($recordid->address); ?>

                            </p>
                            <p class="font-base text-slate-500 text-lg">
                                Причина: Осмотр у ортодонта
                            </p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- О нас -->
                <div class="bg-white rounded-[12px] px-[34px] py-[27px] flex col-span-2 bg-[url('img/bgAbout.svg')] bg-cover">
                    <div class="w-1/2">
                        <h1 class="text-xl text-slate-500 font-semibold mb-5">
                            ZoobZoob
                        </h1>
                        <p class="text-xl text-slate-500 font-semibold mb-5">
                            предостовляет необходимую информацию про поддержание и
                            улучшение состояния полости рта с помощью веб платформы.
                        </p>
                    </div>
                    <div class="w-1/2 bg-[url('./img/para.svg')] h-full bg-no-repeat bg-right"></div>
                </div>
            </div>
        </div>
        
        <h1 class="text-3xl font-bold text-[#323855]">Наши гайды</h1>
        <div class="flex my-3">
            <div class="grid grid-cols-4 gap-3 w-full">
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('guidelink',['id'=>$result->id])); ?>">
                        <div
                            class="bg-white rounded-[12px] px-[34px] py-[27px] h-[250px] bg-[url('./img/bgGid.svg')] bg-[length:100%_120%]">
                            <div class="flex h-full">
                                <div
                                    class="w-1/3 bg-[url('./img/chetka.svg')] h-full bg-no-repeat bg-contain bg-left">
                                </div>
                                <div class="w-full">
                                    <p class="my-auto font-semibold text-slate-500 text-xl">
                                        <?php echo e($result->name); ?>

                                    </p>
                                    <p class="my-auto font-base text-slate-500 text-lg mt-3">
                                        <?php echo e($result->description); ?>

                                    </p>
                                    <div class="flex sticky top-full">
                                        <img src="img/play-circle.svg" alt="play" class="ml-auto mt-auto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                        </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>

        <h1 class="text-3xl font-bold text-[#323855]">
            Копи очки для бонусов, выполняя челленджи!
        </h1>
        <div class="flex my-3">
            <div class="grid grid-cols-4 gap-3 w-full">
                <?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $challenge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-[12px] h-[120px]">
                    <div class="flex h-full">
                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                            <img src="<?php echo e(asset('img/zalupa.svg')); ?>" class="h-1/2 w-1/2 m-auto">
                        </div>

                        <div class="w-auto box-border p-3 ml-auto">
                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                <?php echo e($challenge->name); ?>

                            </p>
                            
                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                <?php echo e($challenge->description); ?> 
                            </p>
                            
                            <div class="flex sticky top-full">
                                <!--<img src="img/yellow star.svg" class="ml-auto my-auto w-[40px] h-[40px]" />-->
                                <p class="text-indigo-500 font-semibold text-xl my-auto ml-auto"><?php echo e($cntDoneChallenge[$challenge->id]); ?>/<?php echo e($cntChallenge[$challenge->id]); ?></p>
                            </div>
                        </div>                               
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <h1>Личный кабинет</h1>
                                <p>Имя пользователя: <?php echo e($user->name); ?></p>
                                <p>Телефон: <?php echo e($user->phone); ?></p>
                                <p>Город: <?php echo e($user->city); ?></p>
                                <p>Электронная почта: <?php echo e($user->email); ?></p>
                                <p>Подписка: <?php if($user->subscription == null): ?>Обычная<?php else: ?> <?php echo e($user->subscription); ?> <?php endif; ?></p>
                                <p>Язык: <?php echo e($user->language); ?></p>
                            </div>
                            <form action="<?php echo e(route('editUser')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div style="display:none" id="hiddenInput">
                                    <input type="text" name="name" placeholder="Имя пользователя" value="<?php echo e($user->name); ?>">
                                    <input type="text" name="phone" placeholder="Телефон" value="<?php echo e($user->phone); ?>">
                                    <input type="text" name="city" placeholder="Город" value="<?php echo e($user->city); ?>">
                                    <input type="text" name="email" placeholder="Электронная почта" value="<?php echo e($user->email); ?>">
                                    <input type="text" name="language" placeholder="Язык" value="<?php echo e($user->language); ?>">
                                </div>
                                <button type="button" id="userEditButton">Редактировать</button>
                                <button type="submit" style="display:none" id="userSubmit">Отправить</button>
                            </form>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <h1>Записаться к врачу</h1>
                            <form action="<?php echo e(route('insertRecord')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button>Записаться к врачу</button>
                            </form>
                        </div>
                        <hr>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recordid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($recordid->status == 'true'): ?>
                                <p>Дата:<?php echo e($recordid->datetime); ?></p>
                                <p>Время:<?php echo e($recordid->time); ?></p>
                                <p>Адрес:<?php echo e($recordid->address); ?></p>
                                <p>Статус:Одобрен</p>
                                <p>Рассмотрили заявку:<?php echo e($recordid->updated_at); ?></p>
                                <hr>
                            <?php endif; ?>
                            <?php if($recordid->status == 'Ожидаем ответа от агента'): ?>
                                <p>Статус:<?php echo e($recordid->status); ?></p>
                                <p>Заявка создана:<?php echo e($recordid->created_at); ?></p>
                                <hr>
                            <?php endif; ?>
                            <?php if($recordid->status == 'ended'): ?>
                                <p>Дата:<?php echo e($recordid->datetime); ?></p>
                                <p>Время:<?php echo e($recordid->time); ?></p>
                                <p>Адрес:<?php echo e($recordid->address); ?></p>
                                <p>Статус:Завершен</p>
                                <p>Запись завершена:<?php echo e($recordid->updated_at); ?></p>
                                <hr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Auth::user()->role == 2): ?>
                            <h1>Записи:</h1>
                            <?php $__currentLoopData = $editorRecords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $editorRecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($editorRecord->status == 'Ожидаем ответа от агента'): ?>
                                    <p>Имя:<?php echo e($editorRecord->name); ?></p>
                                    <p>Телефон:<?php echo e($editorRecord->phone); ?></p>
                                    <p>Почта:<?php echo e($editorRecord->email); ?></p>
                                    <p>Возраст:<?php echo e($editorRecord->date); ?></p>
                                    <form action="<?php echo e(route('editRecord')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div>
                                            <input type="text" name="id" value="<?php echo e($editorRecord->id); ?>" style="display:none">
                                            <input type="text" name="date" placeholder="Введите дату приема">
                                            <input type="text" name="time" placeholder="Введите время приема">
                                            <input type="text" name="doctor" placeholder="Врач">
                                            <input type="text" name="address" placeholder="Введите адрес">
                                            <button>Принять</button>
                                        </div>
                                    </form>
                                    <hr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <h1>Ваши записи:</h1>
                            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recordid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($recordid->status == 'true'): ?>
                                    <p>Имя:<?php echo e($recordid->name); ?></p>
                                    <p>Телефон:<?php echo e($recordid->phone); ?></p>
                                    <p>Почта:<?php echo e($recordid->email); ?></p>
                                    <p>Возраст:<?php echo e($recordid->date); ?></p>
                                    <p>Дата:<?php echo e($recordid->datetime); ?></p>
                                    <p>Время:<?php echo e($recordid->time); ?></p>
                                    <p>Адрес:<?php echo e($recordid->address); ?></p>
                                    <p>Рассмотрили заявку:<?php echo e($recordid->updated_at); ?></p>
                                    <form action="<?php echo e(route('endRecord')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" style="display:none" name="id" value="<?php echo e($recordid->id); ?>">
                                        <button>Завершить</button>
                                    </form>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <hr>
                        <h1>Гайды</h1>
                        <?php if(Auth::user()->role == 1): ?>
                            <div>
                                <form action="<?php echo e(route('insertGuide')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name="name" placeholder="Название">
                                    <input type="text" name="youtube_url" placeholder="Ссылка на ютуб">
                                    <input type="text" name="description" placeholder="Краткое описание">
                                    <button type="submit">Отправить</button>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </form>
                            </div>
                        <?php endif; ?>
                        <hr>
                        <div>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div id="dataContainer<?php echo e($result->id); ?>">
                                    <h1><?php echo e($result->name); ?></h1>
                                    <p><?php echo e($result->youtube_url); ?></p>
                                    <p><?php echo e($result->description); ?></p>
                                </div>
                                <?php if(Auth::user()->role): ?>
                                    <form action="<?php echo e(route('guideEdit')); ?>" method="GET">
                                        <?php echo csrf_field(); ?>
                                        <div class="input-group">
                                            <input type="text" style="display:none" value="<?php echo e($result->id); ?>" name="id">
                                            <input type="text" style="display:none" value="<?php echo e($result->name); ?>" name="name"  id="name<?php echo e($result->id); ?>">
                                            <input type="text" style="display:none" value="<?php echo e($result->youtube_url); ?>" name="youtube_url"  id="youtube_url<?php echo e($result->id); ?>">
                                            <input type="text" style="display:none" value="<?php echo e($result->description); ?>" name="description"  id="description<?php echo e($result->id); ?>">
                                            <button class="btn btn-outline-secondary" id="edit<?php echo e($result->id); ?>" type="button">Редактировать</button>
                                            <input id="submit<?php echo e($result->id); ?>" style="display:none" type="submit" value="Принять">
                                        </div>
                                    </form>
                                    <form action="<?php echo e(route('deleteGuide')); ?>" method="GET">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" style="display:none" value="<?php echo e($result->id); ?>" name="id">
                                        <Button class="btn btn-outline-secondary">Удалить</Button>
                                    </form>
                                <?php endif; ?>
                                <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            var editButton<?php echo e($result->id); ?> = document.getElementById('edit<?php echo e($result->id); ?>')
            var submitButton<?php echo e($result->id); ?> = document.getElementById('submit<?php echo e($result->id); ?>')
            var dataContainer<?php echo e($result->id); ?> = document.getElementById('dataContainer<?php echo e($result->id); ?>')
            var newName<?php echo e($result->id); ?> = document.getElementById('name<?php echo e($result->id); ?>')
            var newYoutube_url<?php echo e($result->id); ?> = document.getElementById('youtube_url<?php echo e($result->id); ?>')
            var newDescription<?php echo e($result->id); ?> = document.getElementById('description<?php echo e($result->id); ?>')
            editButton<?php echo e($result->id); ?>.onclick = function (){
                editButton<?php echo e($result->id); ?>.style.display = 'none'
                dataContainer<?php echo e($result->id); ?>.style.display = 'none'
                submitButton<?php echo e($result->id); ?>.style.display = 'block'
                newName<?php echo e($result->id); ?>.style.display = 'block'
                newYoutube_url<?php echo e($result->id); ?>.style.display = 'block'
                newDescription<?php echo e($result->id); ?>.style.display = 'block'
            }
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });
    </script>
-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zoobzoob-end\laravel\resources\views/home.blade.php ENDPATH**/ ?>