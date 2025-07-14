<?php

use Devdojo\Auth\Traits\HasConfigs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

name('password.reset');

new class extends Component
{
    use HasConfigs;

    #[Validate('required')]
    public $token;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:8|same:passwordConfirmation')]
    public $password;
    public $passwordConfirmation;

    public function mount($token)
    {
        $this->loadConfigs();
        $this->email = request()->query('email', '');
        $this->token = $token;
    }

    public function resetPassword()
    {
        $this->validate();

        $response = Password::broker()->reset(
            [
                'token' => $this->token,
                'email' => $this->email,
                'password' => $this->password,
            ],
            function ($user, $password) {
                $user->password = Hash::make($password);

                $user->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));

                Auth::guard()->login($user);
            },
        );

        if ($response == Password::PASSWORD_RESET) {
            session()->flash(trans($response));

            return redirect('/');
        }

        $this->addError('email', trans($response));
    }
};

?>

<?php if (isset($component)) { $__componentOriginal67ed6d3aaccf7789a5a85f930ccb5eb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67ed6d3aaccf7789a5a85f930ccb5eb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::layouts.app'); ?>
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
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC5wYXNzd29yZC50b2tlbiIsInBhdGgiOiJ2ZW5kb3JcXGRldmRvam9cXGF1dGhcXHJlc291cmNlc1xcdmlld3NcXHBhZ2VzXFxhdXRoXFxwYXNzd29yZFxcW3Rva2VuXS5ibGFkZS5waHAifQ==", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-2337461062-1', $__slots ?? [], get_defined_vars());

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
<?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\pages\auth\password\[token].blade.php ENDPATH**/ ?>