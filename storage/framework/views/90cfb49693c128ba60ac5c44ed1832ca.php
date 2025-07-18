<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'color' => 'blue', 
    'size' => 'md', 
    'tag' => 'button',
    'href' => '/',
    'submit' => false,
    'rounded' => 'full'
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'color' => 'blue', 
    'size' => 'md', 
    'tag' => 'button',
    'href' => '/',
    'submit' => false,
    'rounded' => 'full'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $sizeClasses = match ($size) {
        'sm' => 'px-2.5 py-1.5 text-xs font-medium rounded-' . $rounded,
        'md' => 'px-4 py-2 text-sm font-medium rounded-' . $rounded,
        'lg' => 'px-5 py-3  text-sm font-medium rounded-' . $rounded,
        'xl' => 'px-6 py-3.5 text-base font-medium rounded-' . $rounded,
        '2xl' => 'px-7 py-4 text-base font-medium rounded-' . $rounded
    };
?>

<?php
    $colorClasses = match ($color) {
        'black' => 'bg-gray-800 dark:bg-gray-100 text-white dark:text-gray-700 hover:bg-gray-900 dark:focus:ring-offset-gray-900 dark:focus:ring-gray-100 dark:hover:bg-white dark:hover:text-gray-800 focus:ring-2 focus:ring-gray-900 focus:ring-offset-2',
        'white' => 'bg-white border text-gray-500 hover:text-gray-700 border-gray-200/70 dark:focus:ring-offset-gray-900 dark:border-gray-400/10 hover:bg-gray-50 active:bg-white dark:focus:ring-gray-700 focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200/60 dark:bg-gray-800/50 dark:hover:bg-gray-800/70 dark:text-gray-400 focus:shadow-outline',
        'red' => 'bg-red-500 text-white hover:bg-red-500/90 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-red-600/90 focus:ring-red-600',
        'green' => 'bg-green-600 text-white hover:bg-green-600/90 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-green-700/90 focus:ring-green-700',
        'blue' => 'bg-blue-600 text-white hover:bg-blue-600/90 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-blue-700/90 focus:ring-blue-700',
        'yellow' => 'bg-yellow-300 text-yellow-700 hover:bg-yellow-400 hover:text-yellow-900 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-yellow-400 focus:ring-yellow-400',
        'orange' => 'bg-orange-500 text-white hover:bg-orange-500/90 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-orange-600/90 focus:ring-orange-600',
        'pink' => 'bg-pink-500 text-white hover:bg-pink-500/90 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-pink-600/90 focus:ring-pink-600',
        'purple' => 'bg-purple-600 text-white hover:bg-purple-600/90 focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:bg-purple-600/90 focus:ring-purple-600',
    };
?>

<?php
switch ($tag ?? 'button') {
    case 'button':
        $tagAttr = ($submit) ? 'button type="submit"' : 'button type="button"';
        $tagClose = 'button';
        break;
    case 'a':
        $link = $href ?? '';
        $tagAttr = 'a  href="' . $link . '"';
        $tagClose = 'a';
        break;
    default:
        $tagAttr = 'button type="button"';
        $tagClose = 'button';
        break;
}
?>

<<?php echo $tagAttr; ?> <?php echo $attributes->except(['class']); ?> class="<?php echo e($sizeClasses); ?> <?php echo e($colorClasses); ?> cursor-pointer shadow-sm inline-flex items-center w-full justify-center disabled:opacity-50 font-semibold focus:outline-none">
    <?php echo e($slot); ?>

</<?php echo e($tagClose); ?>><?php /**PATH C:\laragon\www\costify3d\wave\resources\views\components\billing\button.blade.php ENDPATH**/ ?>