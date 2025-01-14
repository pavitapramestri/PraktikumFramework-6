

<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5">
        <form action="<?php echo e(route('employees.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-center">
                
                <div class="container-sm mt-5">
                    <form action="<?php echo e(route('employees.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row justify-content-center">
                            <div class="p-5 bg-light rounded-3 border col-xl-6">

                                <?php if($errors->any()): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <?php echo e($error); ?>

                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <div class="mb-3 text-center">
                                    <i class="bi-person-circle fs-1"></i>
                                    <h4>Create Employee</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input class="form-control" type="text" name="firstName" id="firstName"
                                            value="" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="lastName" id="lastName"
                                            value="" placeholder="Enter Last Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="text" name="email" id="email"
                                            value="" placeholder="Enter Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input class="form-control" type="text" name="age" id="age"
                                            value="" placeholder="Enter Age">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <select name="position" id="position" class="form-select">
                                        <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($position->id); ?>"
                                                <?php echo e(old('position') == $position->id ? 'selected' : ''); ?>>
                                                <?php echo e($position->code . ' - ' . $position->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 d-grid">
                                        <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                                class="bi-arrow-left-circle me-2"></i> Cancel</a>
                                    </div>
                                    <div class="col-md-6 d-grid">
                                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i
                                                class="bi-check-circle me-2"></i>
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\modul4\resources\views/employee/create.blade.php ENDPATH**/ ?>