<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'locales' => ['en' => 'English', 'de' => 'Deutsch'], // Verfügbare Sprachen
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
    'locales' => ['en' => 'English', 'de' => 'Deutsch'], // Verfügbare Sprachen
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="{ open: false }" class="relative" @click.away="open = false">
    <button @click="open = !open" class="flex items-center gap-2 px-3 py-2 text-sm font-semibold text-gray-700 transition duration-300 rounded-md hover:bg-gray-100 hover:text-gray-900">
        <!-- Zeigt die Flagge der aktuellen Sprache an -->
        <?php if(app()->getLocale() == 'de'): ?>
            <img src="https://flag.pk/flags/4x3/de.svg" alt="German Flag" class="w-5 h-auto">
        <?php else: ?>
            <img src="https://flag.pk/flags/4x3/gb.svg" alt="British Flag" class="w-5 h-auto">
        <?php endif; ?>
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
    </button>

    <div 
        x-show="open" 
        x-transition
        x-cloak
        class="absolute right-0 z-50 mt-2 w-40 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
    >
        <div class="py-1">
            <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a 
                    href="<?php echo e(route('locale.switch', $localeCode)); ?>"
                    class="flex items-center gap-3 px-4 py-2 text-sm <?php echo e(app()->getLocale() == $localeCode ? 'bg-gray-100 text-gray-900' : 'text-gray-700'); ?> hover:bg-gray-100 hover:text-gray-900"
                >
                    <?php if($localeCode == 'de'): ?>
                        <img src="https://flag.pk/flags/4x3/de.svg" alt="German Flag" class="w-5 h-auto">
                    <?php else: ?>
                        <img src="https://flag.pk/flags/4x3/gb.svg" alt="British Flag" class="w-5 h-auto">
                    <?php endif; ?>
                    <span><?php echo e($properties); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\components\language-switcher.blade.php ENDPATH**/ ?>