<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kontaktanfrage</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #ddd; border-radius: 5px; max-width: 600px; margin: 20px auto; }
        h2 { color: #000; }
        strong { color: #555; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Neue Kontaktanfrage über Costify3D</h2>
        <hr>
        <p><strong>Von:</strong> <?php echo e($data['name']); ?></p>
        <?php if(!empty($data['mobile_number'])): ?><p><strong>Telefonnummer:</strong> <?php echo e($data['mobile_number']); ?></p><?php endif; ?>
        <p><strong>E-Mail:</strong> <a href="mailto:<?php echo e($data['email']); ?>"><?php echo e($data['email']); ?></a></p>
        <p><strong>Nachricht:</strong></p>
        <p><?php echo nl2br(e($data['message'])); ?></p>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\costify3d\resources\views\emails\contact-form.blade.php ENDPATH**/ ?>