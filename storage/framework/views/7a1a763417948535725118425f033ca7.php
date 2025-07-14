<?php

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Devdojo\Auth\Traits\HasConfigs;
use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

//middleware(['auth', 'throttle:6,1']);
name('verification.notice');

new class extends Component
{
    use HasConfigs;

    public function mount(){
        $this->loadConfigs();
    }

    public function resend()
    {
        $user = auth()->user();
        if ($user->hasVerifiedEmail()) {
            redirect('/');
        }

        $user->sendEmailVerificationNotification();

        event(new Verified($user));

        $this->dispatch('resent');
        session()->flash('resent');
    }
};

?>

<?php if (isset($component)) { $__componentOriginal67ed6d3aaccf7789a5a85f930ccb5eb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67ed6d3aaccf7789a5a85f930ccb5eb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.layouts.app','data' => ['title' => ''.e(config('devdojo.auth.language.verify.page_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(config('devdojo.auth.language.verify.page_title')).'']); ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC52ZXJpZnkiLCJwYXRoIjoidmVuZG9yXFxkZXZkb2pvXFxhdXRoXFxyZXNvdXJjZXNcXHZpZXdzXFxwYWdlc1xcYXV0aFxcdmVyaWZ5LmJsYWRlLnBocCJ9", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-2556976574-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67ed6d3aaccf7789a5a85f930ccb5eb5)): ?>
<?php $attributes = $__attributesOriginal67ed6d3aaccf7789a5a85f930ccb5eb5; ?>
<?php unset($__attributesOriginal67ed6d3aaccf7789a5a85f930ccb5eb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67ed6d3aaccf7789a5a85f930ccb5eb5)): ?>
<?php $component = $__componentOriginal67ed6d3aaccf7789a5a85f930ccb5eb5; ?>
<?php unset($__componentOriginal67ed6d3aaccf7789a5a85f930ccb5eb5); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\pages\auth\verify.blade.php ENDPATH**/ ?>