

<?php $__env->startSection('title'); ?>
    <?php echo e(__('product.add_product')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3></h3>
        <?php $__env->endSlot(); ?>

        <li class="breadcrumb-item"><a href="<?php echo e(route('products.index')); ?>"><?php echo e(__('product.product')); ?></a></li>
        <li class="breadcrumb-item active"><?php echo e(__('product.add_product')); ?></li>
    <?php echo $__env->renderComponent(); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5><?php echo e(__('product.product')); ?></h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('products.store')); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('product.title')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" required=""
                                        name="title" placeholder="ex: Black shirt" value="<?php echo e(old('title')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom03"><?php echo e(__('product.price')); ?></label>
                                    <input class="form-control" id="validationCustom03" type="number" name="price" min="0.01"
                                        placeholder="Price in EGP" required="" value="<?php echo e(old('price')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom04"><?php echo e(__('product.discount')); ?></label>
                                    <input class="form-control" id="validationCustom04" type="number" name="discount" min="0" max="1"
                                        placeholder="ex: 0.20" required=""
                                        value="<?php echo e(old('discount')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                            </div>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label class="form-label" for="validationDefault08"><?php echo e(__('product.category')); ?></label>
                                    <select name="category_id" class="form-control" value="<?php echo e(old('category_id')); ?>">
                                        <option value="" selected>No category selected.</option>
                                        <?php $__currentLoopData = $product_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($pcat->id); ?>"><?php echo e($pcat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault08"><?php echo e(__('product.sub-category')); ?></label>
                                    <select name="category_id" class="form-control" value="<?php echo e(old('category_id')); ?>">
                                        <option value="" selected>No sub-category selected.</option>
                                        
                                    </select>
                                </div>

                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom05"><?php echo e(__('master.password')); ?></label>
                                    <input class="form-control" id="validationCustom05" type="text" name="password"
                                        placeholder="***********" required="" value="<?php echo e(old('password')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('product.description')); ?></label>
                                    <textarea class="form-control" id="validationCustom01"  required=""
                                        name="description" placeholder="ex: color, size, about product" value="<?php echo e(old('description')); ?>"> </textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('product.meta_description')); ?></label>
                                    <textarea class="form-control" id="validationCustom01"  required=""
                                        name="meta_description" placeholder="ex: Manufacturer, made in china" value="<?php echo e(old('meta_description')); ?>"> </textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom07"><?php echo e(__('master.image')); ?></label>
                                    <input class="form-control" id="validationCustom07" type="file"
                                        aria-label="file example" name="photo" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>


                            <button class="btn btn-primary" type="submit"><?php echo e(__('master.save')); ?></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\kemia\resources\views/dashboard/products/create.blade.php ENDPATH**/ ?>