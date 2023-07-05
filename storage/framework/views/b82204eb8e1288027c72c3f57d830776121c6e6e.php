
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row hero">
        <div class="col-6 my-5 p-5 d-flex align-items-center" style="height: 90%;">
            <div class="container-fluid">
            <h1 class="heading1 text-yellow">LMAO,</h1>
            <h1 class="heading1">your food to go!</h1>
            <p class="fs-5 col-8 mt-4 mb-5">
            By pre-ordering your meals, you're not only promoting a healthier lifestyle, but also creating a safer environment for your school community. Avoid crowds and enjoy nutritious meals hassle-free!
            </p>
            <a href="<?php echo e(url('/login')); ?>"><button class="btn btn-primary btn-red px-4 py-2 text-uppercase" style="box-shadow: 0px 10px 20px rgba(235, 45, 72, 0.5);">
                Get Started
            </button></a>
            </div>
        </div>
        <div class="column right" style="background-image: url(<?php echo e(asset('img/landing.png')); ?>)">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cells\OneDrive\Documents\GitHub\NpcDev\NpcDev\resources\views/welcome.blade.php ENDPATH**/ ?>