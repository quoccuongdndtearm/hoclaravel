<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiêu đề trang</title>
    <link rel="stylesheet" href="đường_dẫn_tới_file_css" media="all">
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body id="new">
<?php echo $__env->make('includes.sideleft', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h2>Tiêu đề từ template</h2>
<?php echo $__env->yieldContent('content'); ?>
<script src="đường_dẫn_tới_file_js"></script>

<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH D:\Xampp\htdocs\Toan\resources\views/admin/pro.blade.php ENDPATH**/ ?>