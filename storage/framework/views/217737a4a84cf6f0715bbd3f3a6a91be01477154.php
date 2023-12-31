<?php $__env->startSection('content'); ?>
<div class="container-fluid py-5">
    <div class="col-12 mx-auto">
        <h1 class="text-center"><span style="color: #C43F52;">Cart</span></h1>
        <div class="row row-cols-3 gap-5 justify-content-center">
            <div class="card col p-5" style="border-color: #C43F52; border-style: solid; border-radius: 10px;">
                <div class="card-body row-cols-1" style="border-radius: 10px; background-color: #FFD8DE; padding: 15px;">
                    <div class="card-body mt-1" style="border-radius: 10px; background-color: white;">
                        <span style="color: #C43F52;">Spaghetti </span>
                        <button class="btn btn-secondary" type="button" id="spaghetti-minus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">-</span></button>
                        <div class="vr"></div>
                        <input type="text" id="spaghetti-quantity" class="text-center" value="1" style="width: 50px; color: #C43F52; font-weight: bold; border: 1px; margin-left: 10px; margin-right: 10px;">
                        <div class="vr"></div>
                        <button class="btn btn-secondary" type="button" id="spaghetti-plus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">+</span></button>
                        ₱ <span id="spaghetti-total-price" style="margin-left: 10px; margin-right: 10px;">70.00</span>
                    </div>
                    <div class="card-body mt-1" style="border-radius: 10px; background-color: white;">
                        <span style="color: #C43F52;">Turon </span>
                        <button class="btn btn-secondary" type="button" id="turon-minus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">-</span></button>
                        <div class="vr"></div>
                        <input type="text" id="turon-quantity" class="text-center" value="1" style="width: 50px; color: #C43F52; font-weight: bold; border: 1px; margin-left: 10px; margin-right: 10px;">
                        <div class="vr"></div>
                        <button class="btn btn-secondary" type="button" id="turon-plus-btn" style="background-color: white; height: 30px; border: 1px; margin-left: 10px; margin-right: 10px;"><span style="color: #C43F52; font-weight: bold;">+</span></button>
                        ₱ <span id="turon-total-price" style="margin-left: 10px; margin-right: 10px;">30.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cells\OneDrive\Documents\GitHub\NpcDev\resources\views/shop.blade.php ENDPATH**/ ?>