<?php if (isset($component)) { $__componentOriginalf103f87f9e6975b672a2453f5462c100 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf103f87f9e6975b672a2453f5462c100 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '1929d69541870f736d4a47ee2f87330b::layouts.marketing','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.marketing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginala766c2d312d6f7864fe218e2500d2bba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala766c2d312d6f7864fe218e2500d2bba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f22a0330db7dc726483f505748853c44::container','data' => ['class' => 'py-12 md:py-20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'py-12 md:py-20']); ?>
        <div class="max-w-2xl mx-auto">
            
            <div class="text-center">
                <h1 class="text-4xl font-bold md:text-5xl font-heading"><?php echo e(__('mail_contact.contact_title')); ?></h1>
                <p class="mt-4 text-lg text-gray-600"><?php echo e(__('mail_contact.contact_subtitle')); ?></p>
            </div>

            <?php if(session('success')): ?>
                <div class="p-4 mt-8 text-green-800 bg-green-100 border-l-4 border-green-500" role="alert">
                    <p class="font-bold"><?php echo e(__('mail_contact.success_title')); ?></p>
                    <p><?php echo e(session('success')); ?></p>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="mt-10 space-y-8">
                <?php echo csrf_field(); ?>
                
                <div>
                    <label for="name" class="form-label"><?php echo e(__('mail_contact.contact_name')); ?></label>
                    <input type="text" name="name" id="name" class="form-input" required>
                </div>

                <div>
                    <label for="email" class="form-label"><?php echo e(__('mail_contact.contact_email')); ?></label>
                    <input type="email" name="email" id="email" class="form-input" required>
                </div>

                <div>
                    <label for="mobile_number" class="form-label"><?php echo e(__('mail_contact.contact_phone')); ?></label>
                    <input type="tel" name="mobile_number" id="mobile_number" class="form-input">
                </div>

                <div>
                    <label for="message" class="form-label"><?php echo e(__('mail_contact.contact_message')); ?></label>
                    <textarea name="message" id="message" rows="5" class="form-textarea" required></textarea>
                </div>

                <div>
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'submit','size' => 'lg','class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','size' => 'lg','class' => 'w-full']); ?>
                        <?php echo e(__('buttons.contact_submit')); ?>

                     <?php echo $__env->renderComponent(); ?>
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
            </form>

        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $attributes = $__attributesOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__attributesOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala766c2d312d6f7864fe218e2500d2bba)): ?>
<?php $component = $__componentOriginala766c2d312d6f7864fe218e2500d2bba; ?>
<?php unset($__componentOriginala766c2d312d6f7864fe218e2500d2bba); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $attributes = $__attributesOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__attributesOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf103f87f9e6975b672a2453f5462c100)): ?>
<?php $component = $__componentOriginalf103f87f9e6975b672a2453f5462c100; ?>
<?php unset($__componentOriginalf103f87f9e6975b672a2453f5462c100); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\pages\mail\contact.blade.php ENDPATH**/ ?>