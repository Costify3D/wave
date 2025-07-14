<?php
    use function Laravel\Folio\{name};
    use Livewire\Volt\Component;
    name('media');

    new class extends Component
	{
        public $upload;
        public $uploadFile;
        public $folder = '/';
        public $storageURL = '';
        public $files;
        public $disk;
        public $breadcrumbs;

        public function mount($disk = 'public'){
            $this->storageURL = $this->storage($disk)->url('/');
            $this->disk = $disk;
            $this->loadFilesInCurrentFolder();
            $this->getBreadcrumbsProperty();
        }

        private function loadFilesInCurrentFolder(){
            $this->files = $this->getFilesInDir($this->folder);
        }
    
        public function storage($disk = false){
            // We want to get the class from the Storage facade, this is probably Illuminate\Filesystem\FilesystemManager
            $storageClass = get_class(\Illuminate\Support\Facades\Storage::getFacadeRoot());

            // create a new instance of this object to be used
            $classInstance = new $storageClass(app());

            // if the disk is set by default return the disk passed in
            if($disk) $classInstance = $classInstance->disk($disk);

            return $classInstance;
        }

        public function getBreadcrumbsProperty(){
            $crumbs = array_filter(explode('/', trim($this->folder, '/')));
            $breadcrumbs = [];

            foreach($crumbs as $index => $crumb){
                $depth = 0;
                $location = '';
                while($depth <= $index){
                    $location .= '/' . $crumbs[$depth];
                    $depth++;
                }
                array_push($breadcrumbs, (object)[
                    'display' => $crumb,
                    'location' => $location
                ]);
            }

            $this->breadcrumbs =  $breadcrumbs;
        }

        private function getFilesInDir($dir){
            $files = [];
            $thumbnails = [];
            $thumbnail_names = [];

            $storageItems = $this->storage($this->disk)->listContents($dir)->sortByPath()->toArray();

            foreach ($storageItems as $item) {
                    if ($item['type'] == 'dir') {
                        $files[] = (object)[
                            'name'          => $item['basename'] ?? basename($item['path']),
                            'type'          => 'folder',
                            'path'          => $this->storage($this->disk)->url($item['path']),
                            'relative_path' => $item['path'],
                            'items'         => '',
                            'last_modified' => '',
                        ];
                    } else {
                        if (empty(pathinfo($item['path'], PATHINFO_FILENAME)) && !config('voyager.hidden_files')) {
                            continue;
                        }
                        // Its a thumbnail and thumbnails should be hidden
                        if (\Illuminate\Support\Str::endsWith($item['path'], $thumbnail_names)) {
                            $thumbnails[] = $item;
                            continue;
                        }
                        $mime = 'file';
                        if (class_exists(\League\MimeTypeDetection\ExtensionMimeTypeDetector::class)) {
                            $mime = (new \League\MimeTypeDetection\ExtensionMimeTypeDetector())->detectMimeTypeFromFile($item['path']);
                        }
                        $files[] = (object)[
                            'name'          => $item['basename'] ?? basename($item['path']),
                            'filename'      => $item['filename'] ?? basename($item['path'], '.'.pathinfo($item['path'])['extension']),
                            'type'          => $item['mimetype'] ?? $mime,
                            'path'          => $this->storage($this->disk)->url($item['path']),
                            'relative_path' => $item['path'],
                            'size'          => $item['size'] ?? $item->fileSize(),
                            'last_modified' => $item['timestamp'] ?? $item->lastModified(),
                            'thumbnails'    => [],
                        ];
                    }
                }

                foreach ($files as $key => $file) {
                    foreach ($thumbnails as $thumbnail) {
                        if ($file['type'] != 'folder' && Str::startsWith($thumbnail['filename'], $file['filename'])) {
                            $thumbnail['thumb_name'] = str_replace($file['filename'].'-', '', $thumbnail['filename']);
                            $thumbnail['path'] = $this->storage($this->disk)->url($thumbnail['path']);
                            $files[$key]['thumbnails'][] = $thumbnail;
                        }
                    }
                }

                return $files;
        }

        public function save()
        {
            $this->validate([
                'upload' => 'image|max:1024', // 1MB Max
            ]);
    
            $this->uploadFile = $this->upload->store('photos', 'public');
            $this->uploadFile = storage()->url($this->uploadFile);
        }

        public function goToDirectory($path){
            $this->folder = '/' . $path;
            $this->loadFilesInCurrentFolder();
        }

    }
?>
<?php if (isset($component)) { $__componentOriginal166a02a7c5ef5a9331faf66fa665c256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
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
[$__name, $__params] = $__split("volt-anonymous-fragment-eyJuYW1lIjoibWVkaWEiLCJwYXRoIjoicmVzb3VyY2VzXFx2aWV3c1xcZmlsYW1lbnRcXHBhZ2VzXFxtZWRpYS5ibGFkZS5waHAifQ==", Livewire\Volt\Precompilers\ExtractFragments::componentArguments([...get_defined_vars(), ...array (
)]));

$__html = app('livewire')->mount($__name, $__params, 'lw-3144723682-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $attributes = $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $component = $__componentOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\costify3d\resources\views\filament\pages\media.blade.php ENDPATH**/ ?>