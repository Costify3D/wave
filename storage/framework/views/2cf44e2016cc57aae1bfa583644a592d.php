<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site <?php echo e($user['name']); ?></h2>
<br/>
Your registered email-id is <?php echo e($user['email']); ?> , Please click on the below link to verify your email account
<br/>
<a href="<?php echo e(url('user/verify/', $user['verification_code'])); ?>">Verify Email</a>
</body>

</html><?php /**PATH C:\laragon\www\costify3d\resources\themes\Costify3D\emails\verify-email.blade.php ENDPATH**/ ?>