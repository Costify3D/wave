<div
    x-data="{
        logo_image: <?php if ((object) ('logo_image') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_image'->value()); ?>')<?php echo e('logo_image'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_image'); ?>')<?php endif; ?>,
        logo_image_src: <?php if ((object) ('logo_image_src') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_image_src'->value()); ?>')<?php echo e('logo_image_src'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_image_src'); ?>')<?php endif; ?>,
        logo_svg_string: <?php if ((object) ('logo_svg_string') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_svg_string'->value()); ?>')<?php echo e('logo_svg_string'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_svg_string'); ?>')<?php endif; ?>,
        logo_type: <?php if ((object) ('logo_type') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_type'->value()); ?>')<?php echo e('logo_type'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('logo_type'); ?>')<?php endif; ?>.live,
        image_uploaded: <?php if ((object) ('image_uploaded') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('image_uploaded'->value()); ?>')<?php echo e('image_uploaded'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('image_uploaded'); ?>')<?php endif; ?>
    }"
    class="flex justify-start items-start space-x-7 w-full">

    <div class="mx-auto w-full max-w-sm">
        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Logo</label>
        </div>

        <div class="flex flex-col justify-center items-start w-full">
            <div class="flex justify-start items-center p-1 w-auto text-xs font-medium rounded-lg bg-zinc-100">
                <div 
                    x-on:click="logo_type = 'image';"
                    :class="{'bg-white shadow-sm': logo_type == 'image', 'bg-transparent': logo_type != 'image'}"
                    class="flex-shrink-0 px-4 py-2 text-center text-gray-900 rounded-md cursor-pointer">Upload an Image</div>
                    
                <div 
                    x-on:click="logo_type = 'svg'; setTimeout(function(){ document.getElementById('svgTextarea').focus(); }, 10);"
                    :class="{'bg-white shadow-sm': logo_type == 'svg', 'bg-transparent': logo_type != 'svg'}"
                    class="flex-shrink-0 px-4 py-2 text-center text-gray-900 rounded-md cursor-pointer">Use an SVG</div>
            </div>
            <div class="mt-2 w-full bg-white">
                <div x-show="logo_type == 'image'" class="rounded-lg border border-gray-300 border-dashed bg-zinc-50">
                    <div x-show="logo_image" class="flex justify-center items-center py-2">
                        <img src="<?php echo e(url($logo_image_src) . '?' . uniqid()); ?>" class="w-auto" style="height:<?php echo e($logo_height); ?>px" alt="logo" />
                    </div>
                    <div class="flex relative justify-center items-center w-full">                                
                        <div class="flex justify-center items-center w-full">
                            <label for="logo_image" class="relative w-full h-auto">
                                <div x-show="!logo_image" class="flex flex-col justify-center items-center w-full h-auto rounded-lg cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg class="mb-3 w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                        </svg>
                                        <p class="mb-1 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> an image</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">JPG, PNG (png for best results)</p>
                                    </div>
                                </div>
                                <div x-show="logo_image" class="flex justify-center items-center pb-2 w-full">
                                    <div class="inline-flex justify-center items-center px-3 py-2 space-x-1.5 text-xs bg-gray-200 rounded cursor-pointer">
                                        <svg class="w-3 h-3 fill-current" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.706 8.144a.998.998 0 0 0 .707.304.998.998 0 0 0 .708-.304c.379-.378.379-1.01 0-1.414l-1.314-1.314h6.568v7.73a.986.986 0 0 0 1.971 0v-8.74a.986.986 0 0 0-.985-.986h-7.58l1.314-1.313c.38-.38.38-1.01 0-1.415-.378-.404-1.01-.38-1.414 0L10.7 3.724c-.38.378-.38 1.01 0 1.414l3.006 3.006ZM8.224 6.654V2.182c0-.757-.632-1.389-1.39-1.389H2.388c-.758 0-1.39.632-1.39 1.39v4.471c0 .758.632 1.39 1.39 1.39H6.86c.758 0 1.364-.632 1.364-1.39ZM12.291 15.925c-.379-.378-1.01-.378-1.414 0-.405.38-.38 1.01 0 1.415l1.313 1.314H5.622v-7.73a.986.986 0 0 0-.985-.986c-.53 0-.986.455-.986.985v8.716c0 .556.455.985.986.985h7.579l-1.314 1.314c-.379.379-.379 1.01 0 1.415a.997.997 0 0 0 .707.303.997.997 0 0 0 .708-.303l3.006-3.007c.379-.378.379-1.01 0-1.414l-3.032-3.006ZM23.61 16.026h-4.447c-.758 0-1.39.632-1.39 1.39v4.471c0 .758.632 1.39 1.39 1.39h4.446c.758 0 1.39-.632 1.39-1.39v-4.471c0-.758-.632-1.39-1.39-1.39Z" fill=""/></svg>
                                        <span>Replace Logo</span>
                                    </div>
                                </div>
                                <input id="logo_image" type="file" class="hidden" wire:model="logo_image" />
                            </label>
                        </div> 
                    </div>
                </div>
                <div x-show="logo_type == 'svg'" x-data="{ example: false }" class="p-3 rounded-lg border border-gray-200 bg-zinc-50">
                    <small class="block text-xs text-gray-500">Enter the SVG code for your logo (<span x-on:click="example=!example" class="text-blue-500 underline cursor-pointer select-none">view example</span>)</small>
                    <pre wire:ignore x-show="example" class="p-2.5 mt-2.5 font-mono text-xs bg-gray-100 rounded-md" x-collapse><code class="whitespace-pre-line bg-transparent language-html">&lt;svg viewBox=&quot;0 0 24 24&quot; fill=&quot;black&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;&lt;rect width=&quot;24&quot; height=&quot;24&quot; /&gt;&lt;/svg&gt;</code></pre>
                    <textarea id="svgTextarea" wire:blur="updateSvg($el.value)" x-model="logo_svg_string" class="mt-3 w-full h-20 font-mono text-xs text-gray-700 bg-white rounded border shadow-sm outline-none border-gray-200/60 focus:border-gray-900 focus:ring-2 focus:ring-gray-900 focus:ring-opacity-25 focus:outline-none"></textarea>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <?php $__errorArgs = ['logo_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="mt-1 text-sm text-red-400"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="pb-3 w-full">
            <label class="block text-sm font-medium leading-6 text-gray-900">Logo Height (in pixels)</label>
        </div>
        <div class="w-full h-auto">
            <div class="w-24">
                <?php if (isset($component)) { $__componentOriginal5e327c5fbad515135de14875b2f02308 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e327c5fbad515135de14875b2f02308 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.setup.input','data' => ['type' => 'number','wire:model.live' => 'logo_height']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::setup.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','wire:model.live' => 'logo_height']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e327c5fbad515135de14875b2f02308)): ?>
<?php $attributes = $__attributesOriginal5e327c5fbad515135de14875b2f02308; ?>
<?php unset($__attributesOriginal5e327c5fbad515135de14875b2f02308); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e327c5fbad515135de14875b2f02308)): ?>
<?php $component = $__componentOriginal5e327c5fbad515135de14875b2f02308; ?>
<?php unset($__componentOriginal5e327c5fbad515135de14875b2f02308); ?>
<?php endif; ?>
            </div>
        </div>
    </div>

    

    <div class="relative w-full">
        <strong class="block pb-5 text-xs">Preview</strong>
        <div class="flex justify-center items-center py-10 w-full bg-white rounded-lg border border-dashed">

            <?php if (isset($component)) { $__componentOriginal750c918a0b7b8bc9e85b7a3437026879 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal750c918a0b7b8bc9e85b7a3437026879 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'auth::components.elements.logo','data' => ['height' => $logo_height,'isImage' => ($logo_type == 'image'),'imageSrc' => ($logo_image_src) . '?' . uniqid(),'svgString' => $logo_svg_string]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth::elements.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['height' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logo_height),'isImage' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($logo_type == 'image')),'imageSrc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($logo_image_src) . '?' . uniqid()),'svgString' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logo_svg_string)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal750c918a0b7b8bc9e85b7a3437026879)): ?>
<?php $attributes = $__attributesOriginal750c918a0b7b8bc9e85b7a3437026879; ?>
<?php unset($__attributesOriginal750c918a0b7b8bc9e85b7a3437026879); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal750c918a0b7b8bc9e85b7a3437026879)): ?>
<?php $component = $__componentOriginal750c918a0b7b8bc9e85b7a3437026879; ?>
<?php unset($__componentOriginal750c918a0b7b8bc9e85b7a3437026879); ?>
<?php endif; ?>
            
        </div>
    </div>

</div><?php /**PATH C:\laragon\www\costify3d\vendor\devdojo\auth\resources\views\livewire\setup\logo.blade.php ENDPATH**/ ?>