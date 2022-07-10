<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


    <title>OUR Student Management Database</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">



</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('create')); ?>">create</a></li>

                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>

    </div>

</div>
<script type="text/javascript" src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\Student_Management\resources\views/master.blade.php ENDPATH**/ ?>