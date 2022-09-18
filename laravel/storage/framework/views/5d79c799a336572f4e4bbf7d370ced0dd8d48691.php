<?php $__env->startSection('content'); ?>
    <!-- Content -->
    <div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
        <div class="mx-auto w-[98%] my-3">
            <h1 class="text-3xl font-bold text-[#323855]">
                Ваши записи
            </h1>

            <div class="flex my-3">
                <div class="grid grid-cols-3 gap-3 w-full">
                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recordid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($recordid->status == 'Ожидаем ответа от агента'): ?>
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
                        <?php endif; ?>
                        <?php if($recordid->status == 'true'): ?>
                                <div class="bg-white rounded-[12px] h-auto">
                                    <div class="flex h-full">
                                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                            <img src="img/check-circle.svg" class="h-1/3 w-1/2 m-auto" />
                                        </div>

                                        <div class="w-[calc(100%-120px)] box-border p-3">
                                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                                <?php echo e($recordid->datetime); ?>

                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Время: <?php echo e($recordid->time); ?>

                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Врач: <?php echo e($recordid->doctor); ?>

                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Адрес: <?php echo e($recordid->address); ?>

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
                            <?php endif; ?>
                        <?php if($recordid->status == 'ended'): ?>
                                <div class="bg-white rounded-[12px] h-auto">
                                    <div class="flex h-full">
                                        <div class="w-[120px] h-full flex bg-indigo-100 rounded-[12px]">
                                            <img src="img/check-done-01.svg" class="h-1/3 w-1/2 m-auto" />
                                        </div>

                                        <div class="w-[calc(100%-120px)] box-border p-3">
                                            <p class="my-auto font-semibold text-slate-500 text-xl w-max">
                                                <?php echo e($recordid->datetime); ?>

                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Время: <?php echo e($recordid->time); ?>

                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Врач: <?php echo e($recordid->doctor); ?>

                                            </p>

                                            <p class="my-auto font-base text-slate-500 text-lg mt-3 w-max">
                                                Адрес: <?php echo e($recordid->address); ?>

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
                            <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('insertRecord')); ?>" class="hover:opacity-70 duration-300">
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
    <?php if(Auth::user()->role == 2): ?>
    <div>
        <h1>Записи:</h1>
        <?php $__currentLoopData = $editorRecords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $editorRecord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($editorRecord->status == 'Ожидаем ответа от агента'): ?>
                <p>Имя:<?php echo e($editorRecord->name); ?></p><br>
                <p>Телефон:<?php echo e($editorRecord->phone); ?></p><br>
                <p>Почта:<?php echo e($editorRecord->email); ?></p><br>
                <p>Возраст:<?php echo e($editorRecord->date); ?></p><br>
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
        <?php $__currentLoopData = $editorRecords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recordid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($recordid->status == 'true'): ?>
                <p>Имя:<?php echo e($recordid->name); ?></p><br>
                <p>Телефон:<?php echo e($recordid->phone); ?></p><br>
                <p>Почта:<?php echo e($recordid->email); ?></p><br>
                <p>Возраст:<?php echo e($recordid->date); ?></p><br>
                <p>Дата:<?php echo e($recordid->datetime); ?></p><br>
                <p>Время:<?php echo e($recordid->time); ?></p><br>
                <p>Адрес:<?php echo e($recordid->address); ?></p><br>
                <p>Рассмотрили заявку:<?php echo e($recordid->updated_at); ?></p><br>
                <form action="<?php echo e(route('endRecord')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" style="display:none" name="id" value="<?php echo e($recordid->id); ?>">
                    <button>Завершить</button>
                </form>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zoobzoob-end\laravel\resources\views/records.blade.php ENDPATH**/ ?>