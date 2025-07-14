<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use PragmaRX\Google2FA\Google2FA;
use Devdojo\Auth\Actions\TwoFactorAuth\DisableTwoFactorAuthentication;
use Devdojo\Auth\Actions\TwoFactorAuth\GenerateNewRecoveryCodes;
use Devdojo\Auth\Actions\TwoFactorAuth\GenerateQrCodeAndSecretKey;

name('user.two-factor-authentication');
middleware(['auth', 'verified', 'two-factor-enabled']);

new class extends Component
{
    public $enabled = false;

    // confirmed means that it has been enabled and the user has confirmed a code
    public $confirmed = false;

    public $showRecoveryCodes = true;

    #[Validate('required|min:6')] 
    public $auth_code;

    public $secret = '';
    public $codes = '';
    public $qr = '';
    
    public function mount(){
        if(is_null(auth()->user()->two_factor_confirmed_at)) {
            app(DisableTwoFactorAuthentication::class)(auth()->user());
        } else {
            $this->confirmed = true;
        }
    }

    public function enable(){

        $QrCodeAndSecret = new GenerateQrCodeAndSecretKey();
        [$this->qr, $this->secret] = $QrCodeAndSecret(auth()->user());
        
        auth()->user()->forceFill([
            'two_factor_secret' => encrypt($this->secret),
            'two_factor_recovery_codes' => encrypt(json_encode($this->generateCodes()))
        ])->save();

        $this->enabled = true;
    }

    private function generateCodes(){
        $generateCodesFor = new GenerateNewRecoveryCodes();
        return $generateCodesFor(auth()->user());
    }

    public function regenerateCodes(){
        auth()->user()->forceFill([
            'two_factor_recovery_codes' => encrypt(json_encode($this->generateCodes()))
        ])->save();
    }

    public function cancelTwoFactor(){
        auth()->user()->forceFill([
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null
        ])->save();

        $this->enabled = false;
    }

    #[On('submitCode')]
    public function submitCode($code)
    {
        $this->auth_code = $code;
        $this->validate();

        $google2fa = new Google2FA();
        $valid = $google2fa->verifyKey($this->secret, $code);

        if($valid){
            auth()->user()->forceFill([
                'two_factor_confirmed_at' => now(),
            ])->save();

            $this->confirmed = true;
        } else {
            $this->addError('auth_code', 'Invalid authentication code. Please try again.');
        }
    }

    public function disable(){
        $disable = new DisableTwoFactorAuthentication;
        $disable(auth()->user());

        $this->enabled = false;
        $this->confirmed = false;
        $this->showRecoveryCodes = true;
    }

}

?>

<?php if (isset($component)) { $__componentOriginalca53d670d58baa6c0df4d15aab0e71c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca53d670d58baa6c0df4d15aab0e71c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.layouts.empty','data' => ['title' => 'Two Factor Authentication']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::layouts.empty'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Two Factor Authentication']); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoidXNlci50d28tZmFjdG9yLWF1dGhlbnRpY2F0aW9uIiwicGF0aCI6InZlbmRvclxcZGV2ZG9qb1xcYXV0aFxccmVzb3VyY2VzXFx2aWV3c1xccGFnZXNcXHVzZXJcXHR3by1mYWN0b3ItYXV0aGVudGljYXRpb25cXGluZGV4LmJsYWRlLnBocCJ9", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-257936165-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca53d670d58baa6c0df4d15aab0e71c5)): ?>
<?php $attributes = $__attributesOriginalca53d670d58baa6c0df4d15aab0e71c5; ?>
<?php unset($__attributesOriginalca53d670d58baa6c0df4d15aab0e71c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca53d670d58baa6c0df4d15aab0e71c5)): ?>
<?php $component = $__componentOriginalca53d670d58baa6c0df4d15aab0e71c5; ?>
<?php unset($__componentOriginalca53d670d58baa6c0df4d15aab0e71c5); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\pages\user\two-factor-authentication\index.blade.php ENDPATH**/ ?>