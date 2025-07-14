<section class="w-full">
    <?php if (isset($component)) { $__componentOriginale1ab5bbebb00493b37a64682853d7e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1ab5bbebb00493b37a64682853d7e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '1929d69541870f736d4a47ee2f87330b::marketing.elements.heading','data' => ['level' => 'h2','title' => ''.e(__('landingpage.testimonials_title')).'','description' => ''.e(__('landingpage.testimonials_title_description')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marketing.elements.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['level' => 'h2','title' => ''.e(__('landingpage.testimonials_title')).'','description' => ''.e(__('landingpage.testimonials_title_description')).'']); ?>
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
    <ul role="list" class="grid grid-cols-1 gap-12 py-12 mx-auto max-w-2xl lg:max-w-none lg:grid-cols-3">
        <li>
            <figure class="flex flex-col justify-between h-full">
                <blockquote class="">
                    <p class="text-sm sm:text-base font-medium text-zinc-500"><?php echo e(__('landingpage.testimonials_text1')); ?></p>
                </blockquote>
                <figcaption class="flex flex-col justify-between mt-6">
                    <img alt="#_" src="https://cdn.devdojo.com/images/june2024/adam.jpeg" class="object-cover rounded-full grayscale size-14">
                    <div class="mt-4">
                        <div class="font-medium text-zinc-900">John Nolan</div>
                        <div class="mt-1 text-sm text-zinc-500">
                            CEO of 3D Innovations
                        </div>
                    </div>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="flex flex-col justify-between h-full">
                <blockquote class="">
                    <p class="text-sm sm:text-base font-medium text-zinc-500"><?php echo e(__('landingpage.testimonials_text2')); ?></p>
                </blockquote>
                <figcaption class="flex flex-col justify-between mt-6">
                    <img alt="#_" src="https://cdn.devdojo.com/images/june2024/caleb.jpeg" class="object-cover rounded-full grayscale size-14">
                    <div class="mt-4">
                        <div class="font-medium text-zinc-900">Steven Mandola</div>
                        <div class="mt-1 text-sm text-zinc-500">
                            Head of IT at We print for YOU!
                        </div>
                    </div>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="flex flex-col justify-between h-full">
                <blockquote class="">
                    <p class="text-sm sm:text-base font-medium text-zinc-500"><?php echo e(__('landingpage.testimonials_text3')); ?></p>
                </blockquote>
                <figcaption class="flex flex-col justify-between mt-6">
                    <img alt="#_" src="https://cdn.devdojo.com/images/june2024/taylor.jpeg" class="object-cover rounded-full grayscale size-14">
                    <div class="mt-4">
                        <div class="font-medium text-zinc-900">Thomas James Anderson</div>
                        <div class="mt-1 text-sm text-zinc-500">
                            Founder of 3D Printing Solutions
                        </div>
                    </div>
                </figcaption>
            </figure>
        </li>
    </ul>
</section><?php /**PATH C:\laragon\www\costify3d\resources\themes/Costify3D/components/marketing/sections/testimonials.blade.php ENDPATH**/ ?>