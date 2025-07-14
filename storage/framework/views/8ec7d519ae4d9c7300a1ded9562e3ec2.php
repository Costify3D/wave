<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;
use Devdojo\Auth\Helper;
use Devdojo\ConfigWriter\ArrayFile;

middleware(['view-auth-setup']);
name('auth.setup.providers');

new class extends Component
{
    public $providers;
    public $descriptions;
    private $config;

    public function mount(){
        $this->providers = (object)config('devdojo.auth.providers');
        $this->descriptions = (object)config('devdojo.auth.descriptions');
    }

    public function update($slug, $checked){
        \Config::write('devdojo.auth.providers.' . $slug . '.active', $checked);
        Artisan::call('config:clear');
        $this->providers = (object)config('devdojo.auth.providers');
        $this->js('savedMessageOpen()');
    }
};

?>

<div>
    <?php if (isset($component)) { $__componentOriginalb712378cd8e1df1bb1322f561191a03a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb712378cd8e1df1bb1322f561191a03a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.layouts.setup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::layouts.setup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC5zZXR1cC5wcm92aWRlcnMiLCJwYXRoIjoidmVuZG9yXFxkZXZkb2pvXFxhdXRoXFxyZXNvdXJjZXNcXHZpZXdzXFxwYWdlc1xcYXV0aFxcc2V0dXBcXHByb3ZpZGVycy5ibGFkZS5waHAifQ==", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-815310728-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb712378cd8e1df1bb1322f561191a03a)): ?>
<?php $attributes = $__attributesOriginalb712378cd8e1df1bb1322f561191a03a; ?>
<?php unset($__attributesOriginalb712378cd8e1df1bb1322f561191a03a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb712378cd8e1df1bb1322f561191a03a)): ?>
<?php $component = $__componentOriginalb712378cd8e1df1bb1322f561191a03a; ?>
<?php unset($__componentOriginalb712378cd8e1df1bb1322f561191a03a); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\pages\auth\setup\providers.blade.php ENDPATH**/ ?>