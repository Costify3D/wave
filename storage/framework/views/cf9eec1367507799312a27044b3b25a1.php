<?php if(config('wave.demo')): ?>
<!--

<?php if(strlen(strstr($_SERVER['HTTP_USER_AGENT'], 'Chrome') > 0)): ?>
┏┓┓        ┏  ┓┓        ┓      ┓        ╻
┣┫┣┓┏┓┓┏   ╋┏┓┃┃┏┓┓┏┏  ┏┫┏┓┓┏┏┓┃┏┓┏┓┏┓┏┓┃
┛┗┛┗┗┛┗┫╻  ┛┗ ┗┗┗┛┗┻┛  ┗┻┗ ┗┛┗ ┗┗┛┣┛┗ ┛ •
       ┛                          ┛
<?php else: ?>
Ahoy, Fellow Developer! 
<?php endif; ?>

<?php echo $__env->make('wave::premium-theme-messages.' . rand(1, 9), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

-->
<?php endif; ?><?php /**PATH C:\laragon\www\costify3d\wave\resources\views\premium-theme-message.blade.php ENDPATH**/ ?>