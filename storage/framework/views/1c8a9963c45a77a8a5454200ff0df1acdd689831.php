<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', config('app.name', '')); ?></title>
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="estech developer">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', config('app.name', '')); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:image" content="<?php echo e(asset('img/icon.png')); ?>" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta property="og:type" content="website" />
    <?php if(!config('app.debug')): ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128595187-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-128595187-2');
        </script>
    <?php endif; ?>

    <link rel="shortcut icon" href="<?php echo e(asset('img/icon.png')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('__frontend/build/style.css')); ?>">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fa/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <?php echo NoCaptcha::renderJs(); ?>

    <!--begin::Extra Style -->

    <style>
        html {
            height: 100% !important;
            width: 100% !important;
        }
    </style>
    <?php echo $__env->yieldContent('extraCss'); ?>
    <!--end::Extra Style -->
</head>
<?php if(config('app.debug')): ?>
    <div class="corner-ribbon top-<?php echo e(session('lang')->direction == 'rtl' ? 'right' : 'left'); ?> fixed red shadow"><?php echo e(__('development')); ?></div>
<?php endif; ?>

<body class="bg-gray-brand font-sans leading-normal tracking-normal">
    
    <?php echo $__env->make('frontend.layouts.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('__frontend/js/index.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <!--begin::Extra Script -->
    <?php echo $__env->yieldContent('extraJs'); ?>
    <!--end::Extra Script -->
</body>

</html>
<?php /**PATH C:\MAMP\htdocs\evote2024\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>