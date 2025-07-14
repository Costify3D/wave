<?php
    use function Laravel\Folio\{middleware, name};
    name('subscription.welcome');
    middleware('auth');
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<?php if (isset($component)) { $__componentOriginal08db35abc15b88d7e891883ef0dd6bed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08db35abc15b88d7e891883ef0dd6bed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.container','data' => ['xData' => true,'class' => 'space-y-6','xCloak' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => true,'class' => 'space-y-6','x-cloak' => true]); ?>
        <div class="w-full">
            <?php if (isset($component)) { $__componentOriginal3f5896b1021d72739df36ad207fd93d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3f5896b1021d72739df36ad207fd93d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.heading','data' => ['title' => 'Successfully Purchased 🎉','description' => 'Thanks for upgrading to a subscription plan.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Successfully Purchased 🎉','description' => 'Thanks for upgrading to a subscription plan.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3f5896b1021d72739df36ad207fd93d6)): ?>
<?php $attributes = $__attributesOriginal3f5896b1021d72739df36ad207fd93d6; ?>
<?php unset($__attributesOriginal3f5896b1021d72739df36ad207fd93d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3f5896b1021d72739df36ad207fd93d6)): ?>
<?php $component = $__componentOriginal3f5896b1021d72739df36ad207fd93d6; ?>
<?php unset($__componentOriginal3f5896b1021d72739df36ad207fd93d6); ?>
<?php endif; ?>
            <div class="py-5 space-y-5">
                <p>This is your customer's successful purchase welcome screen. After a user upgrades their account they will be redirected to this page after a successful transaction.</p>
                <p>You can modify this view inside your theme folder at <?php if (isset($component)) { $__componentOriginal68e0f96d76bf96b9d63ca83d04db52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '5356d735b60953a9e4d1ee0912eba302::code-inline','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('code-inline'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>pages/subscription/welcome <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da)): ?>
<?php $attributes = $__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da; ?>
<?php unset($__attributesOriginal68e0f96d76bf96b9d63ca83d04db52da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68e0f96d76bf96b9d63ca83d04db52da)): ?>
<?php $component = $__componentOriginal68e0f96d76bf96b9d63ca83d04db52da; ?>
<?php unset($__componentOriginal68e0f96d76bf96b9d63ca83d04db52da); ?>
<?php endif; ?>.</p>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08db35abc15b88d7e891883ef0dd6bed)): ?>
<?php $attributes = $__attributesOriginal08db35abc15b88d7e891883ef0dd6bed; ?>
<?php unset($__attributesOriginal08db35abc15b88d7e891883ef0dd6bed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08db35abc15b88d7e891883ef0dd6bed)): ?>
<?php $component = $__componentOriginal08db35abc15b88d7e891883ef0dd6bed; ?>
<?php unset($__componentOriginal08db35abc15b88d7e891883ef0dd6bed); ?>
<?php endif; ?>
     <?php $__env->slot('javascript', null, []); ?> 
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
        <script>
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }
            });
        </script>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\pages\subscription\welcome.blade.php ENDPATH**/ ?>