<?php $__env->startSection('content'); ?>  <!-- Content -->
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = explode('?v=', $result->youtube_url); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
        <div class="mx-auto w-[70%] my-3">
            <div class="flex h-[500px]">
                    <iframe class="w-full" height="500" src="https://www.youtube.com/embed/<?php echo e($url); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h1 class="text-4xl font-bold text-[#323855] my-4"><?php echo e($result->name); ?></h1>
            <div class="bg-white rounded-[12px] p-[10px]">
                <p class="text-xl font-bold text-[#323855]"><?php echo e($result->description); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zoobzoob-end\laravel\resources\views/guide.blade.php ENDPATH**/ ?>