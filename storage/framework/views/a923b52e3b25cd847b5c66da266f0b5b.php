<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <?php echo $__env->make('theme::partials.head', ['seo' => ($seo ?? null) ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Used to add dark mode right away, adding here prevents any flicker -->
    <script>
        if (typeof(Storage) !== "undefined") {
            if(localStorage.getItem('theme') && localStorage.getItem('theme') == 'dark'){
                document.documentElement.classList.add('dark');
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<style>
.jakarta{
  font-family: "Plus Jakarta Sans", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}
.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}
</style>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="flex flex-col px-10 min-h-screen bg-white lg:px-0 dark:bg-zinc-950">
    <?php echo e($slot); ?>

</body>
</html>

<?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\components\layouts\empty.blade.php ENDPATH**/ ?>