<div
    x-data="{
        initPickr: function (element) {
            
        }
    }"
    x-init="
        let pickr = Pickr.create(<?php echo e(json_encode($options())); ?>);
        let input = document.getElementById('<?php echo e($id . '-input'); ?>');

        pickr.on('save', function (color) {
            let currentColor = color ? color.toHEXA().toString() : '';

            input.setAttribute('value', currentColor);
            $root.setAttribute('title', currentColor);
        });
    "
    <?php echo e($attributes->merge(['title' => $value])); ?>

>
    <div id="<?php echo e($id); ?>"></div>

    <input
        id="<?php echo e($id); ?>-input"
        name="<?php echo e($name); ?>"
        type="hidden"
        <?php if($value): ?>value="<?php echo e($value); ?>"<?php endif; ?>
    />
</div><?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\components\setup\color-picker.blade.php ENDPATH**/ ?>