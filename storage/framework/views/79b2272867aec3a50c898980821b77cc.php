<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // total number of boxes to display
    'digits' => 4,

    'eventCallback' => null
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
    // total number of boxes to display
    'digits' => 4,

    'eventCallback' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="
    {
        total_digits: <?php echo \Illuminate\Support\Js::from($digits)->toHtml() ?>,
        eventCallback: <?php echo \Illuminate\Support\Js::from($eventCallback)->toHtml() ?>,
        callbackSubmitted: false,
        moveCursorNext (index, digits, evt) {
        
            if (!isNaN(parseInt(evt.key)) && parseInt(evt.key) >= 0 && parseInt(evt.key) <= 9 && index != digits) {
                evt.preventDefault();
                evt.stopPropagation();
                this.$refs['input' + index].value = evt.key;
                this.$refs['input' + (index+1)].focus();
                
            } else {

                if (evt.key === 'Backspace') {
                    evt.preventDefault();
                    evt.stopPropagation();
                    if (index > 1) {
                        if (this.$refs['input' + index].value !== '') {
                            this.$refs['input' + index].value = '';
                        } else {
                            if (index > 1) {
                                this.$refs['input' + (index-1)].value='';
                                this.$refs['input' + (index-1)].focus();
                            }
                        }
                    } else {
                        this.$refs['input' + index].value = '';
                    }
                } else {
                    
                }

            }

            let that = this;
            setTimeout(function(){
                that.$refs.pin.value = that.generateCode();
                if (index === digits && [...Array(digits).keys()].every(i => that.$refs['input' + (i + 1)].value !== '')) {
                    that.submitCallback();
                }
            }, 100);

            



        },
        submitCallback(){
            if(this.eventCallback && !this.callbackSubmitted){
                this.callbackSubmitted = true;
                window.dispatchEvent(new CustomEvent(this.eventCallback, { detail: { code: this.generateCode() }}));
            }
        },
        pasteValue(event){
            event.preventDefault();
            
            let paste = (event.clipboardData || window.clipboardData).getData('text');
            for (let i = 0; i < paste.length; i++) {
                if (i < this.total_digits) {
                    this.$refs['input' + (i + 1)].value = paste[i];
                }
                let focusLastInput = (paste.length <= this.total_digits) ? paste.length : this.total_digits;
                this.$refs['input' + focusLastInput].focus();
                if(paste.length >= this.total_digits){
                    let that = this;
                    setTimeout(function(){
                        that.$refs.pin.value = that.generateCode();
                        that.submitCallback();
                    }, 100);
                    
                }
            }
        },
        generateCode() {
            let code = '';
            for (let i = 1; i <= this.total_digits; i++) {
                code += this.$refs['input' + i].value;
            }
            return code;
        },
    }" 
    x-init="
        setTimeout(function(){
            $refs.input1.focus();
        }, 100);
    "
    @focus-auth-2fa-auth-code.window="$refs.input1.focus()"
    class="relative"
>
    <div class="flex">
        <div class="flex mx-auto space-x-2">
            <?php for($x = 1; $x <= $digits; $x++): ?>
                <input
                    x-ref="input<?php echo e($x); ?>"
                    numeric="true"
                    type="number"
                    x-on:paste="pasteValue"
                    x-on:keydown="moveCursorNext(<?php echo e($x); ?>, <?php echo e($digits); ?>, event)"
                    x-on:focus="$el.select()"
                    class="w-12 h-12 font-light text-center text-black rounded-md border shadow-sm appearance-none auth-component-code-input dark:text-dark-400 border-zinc-200 focus:border-2"
                    maxlength="1"
                />
            <?php endfor; ?>
        </div>
    </div>
    <input <?php echo e($attributes->whereStartsWith('id')); ?> type="hidden" x-ref="pin" name="pin" />
</div>
<?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\components\elements\input-code.blade.php ENDPATH**/ ?>