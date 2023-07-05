

<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-5">
        <div class="col-10 mx-auto">
            <h1 class="text-center"><span style="color: #C43F52;">Canteens</span></h1>
            <div class="row row-cols-6 gap-3 justify-content-center align-items-center">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <?php $canteensChunk = $canteens->chunk(3); ?>
                        <?php $__currentLoopData = $canteensChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $canteenChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item<?php echo e($index == 0 ? ' active' : ''); ?>">
                                <div class="row">
                                    <?php $__currentLoopData = $canteenChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $canteen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-4">
                                        <div style="<?php echo e($canteen->id == 3 ? 'background-color: #222222;' : ($canteen->id == 2 ? 'background-color: #FED700;' : ($canteen->id == 1 ? 'background-color: #DED5C6;' : ''))); ?>">
                                            <a href=<?php echo e(route('menu',['id'=>$canteen->id])); ?>> <img
                                                    src="<?php echo e(url('/'.$canteen->gallery)); ?>" class="d-block w-100" alt=""
                                                    height="225vt"></a>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color: #C43F52;"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" style="background-color: #C43F52; "
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

            </div>

        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cells\OneDrive\Documents\GitHub\NpcDev\NpcDev\resources\views/canteen.blade.php ENDPATH**/ ?>