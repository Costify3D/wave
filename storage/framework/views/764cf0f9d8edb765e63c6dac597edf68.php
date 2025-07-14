<section id="features" class="scroll-mt-40">
    <?php if (isset($component)) { $__componentOriginale1ab5bbebb00493b37a64682853d7e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::marketing.elements.heading','data' => ['level' => 'h2','title' => ''.e(__('landingpage.features_title')).'','description' => ''.e(__('landingpage.features_description')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marketing.elements.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['level' => 'h2','title' => ''.e(__('landingpage.features_title')).'','description' => ''.e(__('landingpage.features_description')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1ab5bbebb00493b37a64682853d7e7d)): ?>
<?php $attributes = $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d; ?>
<?php unset($__attributesOriginale1ab5bbebb00493b37a64682853d7e7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1ab5bbebb00493b37a64682853d7e7d)): ?>
<?php $component = $__componentOriginale1ab5bbebb00493b37a64682853d7e7d; ?>
<?php unset($__componentOriginale1ab5bbebb00493b37a64682853d7e7d); ?>
<?php endif; ?>
    <div class="text-center">
        <div class="grid grid-cols-2 gap-x-6 gap-y-12 mt-12 text-center lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/articles.png" alt="Article Management Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_articlemanagent')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_articlemanagent')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/models.png" alt="Model Management Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_modelemanagent')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_modelemanagent')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/warehouse.png" alt="Storage Management Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_storagemanagent')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_storagemanagent')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/calculator.png" alt="Cost Calculation Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_costcalculation')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_costcalculation')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/energy.png" alt="Energy Management Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_energymanagement')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_energymanagement')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/employee.png" alt="Employee Management Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_employeeemanagement')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_employeeemanagement')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/consumption.png" alt="Consumables Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_consumables')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_consumables')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/invoice.png" alt="Receipt Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_receiptmanagement')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_receiptmanagement')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/printer.png" alt="3D Printer Management Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_printermanagement')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_printermanagement')); ?></p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <img src="/images/icons/coming-soon.png" alt="Coming Soon Icon" class="w-7 h-7">
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900"><?php echo e(__('landingpage.features_title_comingsoon')); ?></h3>
                    <p class="mt-2 text-sm text-zinc-500"><?php echo e(__('landingpage.features_text_comingsoon')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\components\marketing\sections\features.blade.php ENDPATH**/ ?>