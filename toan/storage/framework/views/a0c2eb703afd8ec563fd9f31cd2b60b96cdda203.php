<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Tiêu đề trang</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/dashboard.css')); ?>" media="all">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
    <script src="<?php echo e(asset('/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>

<body id="new">
<?php echo $__env->make('includes.sideleft', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\Xampp\htdocs\Toan\resources\views/Dashboard/Dash.blade.php ENDPATH**/ ?>