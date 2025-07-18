<section class="relative top-0 flex flex-col items-center justify-center w-full min-h-screen -mt-24 bg-white lg:min-h-screen">
    
        <div class="flex flex-col items-center justify-between flex-1 w-full max-w-2xl gap-6 px-8 pt-32 mx-auto text-left md:px-12 xl:px-20 lg:pt-32 lg:pb-16 lg:max-w-7xl lg:flex-row">
            <div class="w-full lg:w-1/2">
                <h1 class="text-6xl font-bold tracking-tighter text-left sm:text-7xl md:text-8xl sm:text-center lg:text-left text-zinc-900 text-balance">
                    <span class="block origin-left lg:scale-90 text-nowrap text-primary-500"style="filter: drop-shadow(0 0 0.35rem rgba(242, 140, 40, 0.4));"><?php echo e(__('landingpage.title_part1')); ?></span>
                    <span class="pr-4 text-transparent text-neutral-600 bg-clip-text bg-gradient-to-b from-neutral-900 to-neutral-500"><?php echo e(__('landingpage.title_part2')); ?></span>
                <p class="mx-auto mt-5 text-2xl font-normal text-left sm:max-w-md lg:ml-0 lg:max-w-md sm:text-center lg:text-left text-zinc-500"><?php echo e(__('landingpage.slogan')); ?></span>
                </p>
                <div class="flex flex-col items-center justify-center gap-3 mx-auto mt-8 md:gap-2 lg:justify-start md:ml-0 md:flex-row">
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['size' => 'lg','class' => 'w-full lg:w-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'lg','class' => 'w-full lg:w-auto']); ?><?php echo e(__('buttons.register')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['tag' => 'a','href' => '#features','size' => 'lg','color' => 'secondary','class' => 'w-full lg:w-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => '#features','size' => 'lg','color' => 'secondary','class' => 'w-full lg:w-auto']); ?><?php echo e(__('buttons.show_features')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-12 lg:w-1/2 lg:mt-0">
                <div class="image-frame-container shadow-2xl shadow-[#f28c28]/40" style="max-width: 450px;">
                    <img alt="Costify 3D Printer" class="relative w-full rounded-3xl lg:scale-125 xl:translate-x-6" src="/wave/img/costify3Dprinter.webp">
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 lg:h-[150px] flex border-t border-zinc-200 items-center w-full bg-white">
            <div class="grid h-auto grid-cols-1 px-8 py-10 mx-auto space-y-5 divide-y max-w-7xl lg:space-y-0 lg:divide-y-0 divide-zinc-200 lg:py-0 lg:divide-x md:px-12 lg:px-20 lg:divide-zinc-200 lg:grid-cols-3">
                <div class="">
                    <h3 class="flex items-center font-medium text-zinc-900">
                        <?php echo e(__('landingpage.title_keyfeartures')); ?>

                    </h3>
                    <p class="mt-2 text-sm font-medium text-zinc-500">
                        <?php echo e(__('landingpage.text_keyfeatures')); ?>

                        
                    </p>
                </div>
                <div class="pt-5 lg:pt-0 lg:px-10">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.title_funcionality')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        <?php echo e(__('landingpage.text_funcionality')); ?>

                    </p>
                </div>
                <div class="pt-5 lg:pt-0 lg:px-10">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.title_uniqieadvantage')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        <?php echo e(__('landingpage.text_uniqieadvantage')); ?>

                    </p>
                </div>
            </div>
        </div>
</section><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\components\marketing\sections\hero.blade.php ENDPATH**/ ?>