<div x-data="{ sidebarOpen: false }"  @open-sidebar.window="sidebarOpen = true"
    x-init="
        $watch('sidebarOpen', function(value){
            if(value){ document.body.classList.add('overflow-hidden'); } else { document.body.classList.remove('overflow-hidden'); }
        });
    "
    class="relative z-50 w-screen md:w-auto" x-cloak>
    
    <div x-show="sidebarOpen" @click="sidebarOpen=false" class="fixed top-0 right-0 z-50 w-screen h-screen duration-300 ease-out bg-black/20 dark:bg-white/10"></div>
    
     
    <div :class="{ '-translate-x-full': !sidebarOpen }"
        class="fixed top-0 left-0 flex items-stretch -translate-x-full overflow-hidden lg:translate-x-0 z-50 h-dvh md:h-screen transition-[width,transform] duration-150 ease-out bg-zinc-50 dark:bg-zinc-900 w-64 group <?php if(config('wave.dev_bar')): ?><?php echo e('pb-10'); ?><?php endif; ?>">  
        <div class="flex flex-col justify-between w-full overflow-auto md:h-full h-svh pt-4 pb-2.5">
            <div class="relative flex flex-col">
                <button x-on:click="sidebarOpen=false" class="flex items-center justify-center flex-shrink-0 w-10 h-10 ml-4 rounded-md lg:hidden text-zinc-400 hover:text-zinc-800 dark:hover:text-zinc-200 dark:hover:bg-zinc-700/70 hover:bg-gray-200/70">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
                </button>

                <div class="flex items-center px-5 space-x-2">
                    <a href="/" class="flex justify-center items-center py-4 pl-0.5 space-x-1 font-bold text-zinc-900">
                        <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'w-auto h-7']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-auto h-7']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
                    </a>
                </div>
                <div class="flex items-center px-4 pt-1 pb-3">
                    <div class="relative flex items-center w-full h-full rounded-lg">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-magnifying-glass'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute left-0 w-5 h-5 ml-2 text-gray-400 -translate-y-px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <input type="text" class="w-full py-2 pl-8 text-sm border rounded-lg bg-zinc-200/70 focus:bg-white duration-50 dark:bg-zinc-950 ease border-zinc-200 dark:border-zinc-700/70 dark:ring-zinc-700/70 focus:ring dark:text-zinc-200 dark:focus:ring-zinc-700/70 dark:focus:border-zinc-700 focus:ring-zinc-200 focus:border-zinc-300 dark:placeholder-zinc-400" placeholder="Search">
                    </div>
                </div>

                <div class="flex flex-col justify-start items-center px-4 space-y-1.5 w-full h-full text-slate-600 dark:text-zinc-400">
                    <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['href' => '/dashboard','icon' => 'phosphor-house','active' => Request::is('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/dashboard','icon' => 'phosphor-house','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('dashboard'))]); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal456a49cac8cca255edec02e5cd077ea8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal456a49cac8cca255edec02e5cd077ea8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-dropdown','data' => ['text' => 'Projects','icon' => 'phosphor-stack','id' => 'projects_dropdown','active' => (Request::is('projects')),'open' => (Request::is('project_a') || Request::is('project_b') || Request::is('project_c')) ? '1' : '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Projects','icon' => 'phosphor-stack','id' => 'projects_dropdown','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((Request::is('projects'))),'open' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((Request::is('project_a') || Request::is('project_b') || Request::is('project_c')) ? '1' : '0')]); ?>
                        <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-cube','active' => (Request::is('project_a'))]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-cube','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((Request::is('project_a')))]); ?>Project A <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-cube','active' => (Request::is('project_b'))]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-cube','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((Request::is('project_b')))]); ?>Project B <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-cube','active' => (Request::is('project_c'))]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-cube','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((Request::is('project_c')))]); ?>Project C <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal456a49cac8cca255edec02e5cd077ea8)): ?>
<?php $attributes = $__attributesOriginal456a49cac8cca255edec02e5cd077ea8; ?>
<?php unset($__attributesOriginal456a49cac8cca255edec02e5cd077ea8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal456a49cac8cca255edec02e5cd077ea8)): ?>
<?php $component = $__componentOriginal456a49cac8cca255edec02e5cd077ea8; ?>
<?php unset($__componentOriginal456a49cac8cca255edec02e5cd077ea8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-pencil-line','active' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-pencil-line','active' => 'false']); ?>Stories <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-users','active' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'event.preventDefault(); new FilamentNotification().title(\'Modify this button inside of sidebar.blade.php\').send()','icon' => 'phosphor-users','active' => 'false']); ?>Users <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                </div>
            </div>

            <div class="relative px-2.5 space-y-1.5 text-zinc-700 dark:text-zinc-400">
                
                <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['href' => 'https://devdojo.com/wave/docs','target' => '_blank','icon' => 'phosphor-book-bookmark-duotone','active' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://devdojo.com/wave/docs','target' => '_blank','icon' => 'phosphor-book-bookmark-duotone','active' => 'false']); ?>Documentation <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['href' => 'https://devdojo.com/questions','target' => '_blank','icon' => 'phosphor-chat-duotone','active' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'https://devdojo.com/questions','target' => '_blank','icon' => 'phosphor-chat-duotone','active' => 'false']); ?>Questions <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalbd8bf167f40cf8687e797695f7591708 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8bf167f40cf8687e797695f7591708 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.sidebar-link','data' => ['href' => route('changelogs'),'icon' => 'phosphor-book-open-text-duotone','active' => Request::is('changelog') || Request::is('changelog/*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.sidebar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('changelogs')),'icon' => 'phosphor-book-open-text-duotone','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Request::is('changelog') || Request::is('changelog/*'))]); ?>Changelog <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $attributes = $__attributesOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__attributesOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8bf167f40cf8687e797695f7591708)): ?>
<?php $component = $__componentOriginalbd8bf167f40cf8687e797695f7591708; ?>
<?php unset($__componentOriginalbd8bf167f40cf8687e797695f7591708); ?>
<?php endif; ?>

                <div x-show="sidebarTip" x-data="{ sidebarTip: $persist(true) }" class="px-1 py-3" x-collapse x-cloak>
                    <div class="relative w-full px-4 py-3 space-y-1 border rounded-lg bg-zinc-50 text-zinc-700 dark:text-zinc-100 dark:bg-zinc-800 border-zinc-200/60 dark:border-zinc-700">
                        <button @click="sidebarTip=false" class="absolute top-0 right-0 z-50 p-1.5 mt-2.5 mr-2.5 rounded-full opacity-80 cursor-pointer hover:opacity-100 hover:bg-zinc-100 hover:dark:bg-zinc-700 hover:dark:text-zinc-300 text-zinc-500 dark:text-zinc-400">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('phosphor-x-bold'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        </button>
                        <h5 class="pb-1 text-sm font-bold -translate-y-0.5">Edit This Section</h5>
                        <p class="block pb-1 text-xs opacity-80 text-balance">You can edit any aspect of your user dashboard. This section can be found inside your theme component/app/sidebar file.</p>
                    </div>
                </div>

                <div class="w-full h-px my-2 bg-slate-100 dark:bg-zinc-700"></div>
                <?php if (isset($component)) { $__componentOriginal262b77ea6d221dabc34c6f9febac9fba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal262b77ea6d221dabc34c6f9febac9fba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '96f8a32918383f00e0c445c8d4ba4d74::app.user-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.user-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal262b77ea6d221dabc34c6f9febac9fba)): ?>
<?php $attributes = $__attributesOriginal262b77ea6d221dabc34c6f9febac9fba; ?>
<?php unset($__attributesOriginal262b77ea6d221dabc34c6f9febac9fba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal262b77ea6d221dabc34c6f9febac9fba)): ?>
<?php $component = $__componentOriginal262b77ea6d221dabc34c6f9febac9fba; ?>
<?php unset($__componentOriginal262b77ea6d221dabc34c6f9febac9fba); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\costify3d\resources\themes/Costify3D/components/app/sidebar.blade.php ENDPATH**/ ?>