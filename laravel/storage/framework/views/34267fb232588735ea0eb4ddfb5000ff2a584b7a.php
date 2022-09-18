<?php $__env->startSection('content'); ?>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zoobzoob-end\laravel\resources\views/guides.blade.php ENDPATH**/ ?>