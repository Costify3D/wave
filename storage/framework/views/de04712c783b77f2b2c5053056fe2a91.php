<?php

use App\Models\User;
use function Laravel\Folio\{middleware, name};
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use PragmaRX\Google2FA\Google2FA;
use Devdojo\Auth\Traits\HasConfigs;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

if(!isset($_GET['preview']) || (isset($_GET['preview']) && $_GET['preview'] != true) || !app()->isLocal()){
    middleware(['two-factor-challenged', 'throttle:5,1']);
}

name('auth.two-factor-challenge');

new class extends Component
{
    use HasConfigs;
    
    public $recovery = false;
    public $google2fa;

    #[Validate('required|min:6')] 
    public $auth_code;
    public $recovery_code;

    public function mount()
    {
        $this->loadConfigs();
        $this->recovery = false;
    }

    public function switchToRecovery()
    {
        $this->recovery = !$this->recovery;
        if($this->recovery){
            $this->js("setTimeout(function(){ window.dispatchEvent(new CustomEvent('focus-auth-2fa-recovery-code', {})); }, 10);");
        } else {
            $this->js("setTimeout(function(){ window.dispatchEvent(new CustomEvent('focus-auth-2fa-auth-code', {})); }, 10);");
        }
        return;
    }

     #[On('submitCode')] 
    public function submitCode($code)
    {
        $this->auth_code = $code;
        $this->validate();

        $user = User::find(session()->get('login.id'));
        $secret = decrypt($user->two_factor_secret);
        $google2fa = new Google2FA();
        $valid = $google2fa->verifyKey($secret, $code);

        if($valid){
            $this->loginUser($user);
        } else {
            $this->addError('auth_code', 'Invalid authentication code. Please try again.');
        }

    }

    public function submit_recovery_code(){
        $user = User::find(session()->get('login.id'));
        $valid = in_array($this->recovery_code, json_decode(decrypt($user->two_factor_recovery_codes)));

        if ($valid) {
            $this->loginUser($user);
        } else {
            $this->addError('recovery_code', 'This is an invalid recovery code. Please try again.');
        }
    }

    public function loginUser($user){
        Auth::login($user);

        // clear out the session that is used to determine if the user can visit the 2fa challenge page.
        session()->forget('login.id');

        event(new Login(auth()->guard('web'), $user, true));
        
        if(session()->get('url.intended') != route('logout.get')){
            return redirect()->intended(config('devdojo.auth.settings.redirect_after_auth'));
        } else {
            return redirect(config('devdojo.auth.settings.redirect_after_auth'));
        }
    }
}

?>

<?php if (isset($component)) { $__componentOriginal67ed6d3aaccf7789a5a85f930ccb5eb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67ed6d3aaccf7789a5a85f930ccb5eb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.layouts.app','data' => ['title' => ''.e(config('devdojo.auth.language.twoFactorChallenge.page_title')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(config('devdojo.auth.language.twoFactorChallenge.page_title')).'']); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC50d28tZmFjdG9yLWNoYWxsZW5nZSIsInBhdGgiOiJ2ZW5kb3JcXGRldmRvam9cXGF1dGhcXHJlc291cmNlc1xcdmlld3NcXHBhZ2VzXFxhdXRoXFx0d28tZmFjdG9yLWNoYWxsZW5nZS5ibGFkZS5waHAifQ==", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-3558818940-1', $__slots ?? [], get_defined_vars());

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
<?php endif; ?><?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\pages\auth\two-factor-challenge.blade.php ENDPATH**/ ?>