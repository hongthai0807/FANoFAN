<!doctype html>
<html lang="en">
  <head>
    <title>Programming Fields | Login Form | Password Reset | </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

    <div class="container py-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form action="<?php echo e(route('reset-password')); ?>" method="post" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card shadow">

                        <?php if(Session::has("success")): ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php elseif(Session::has("failed")): ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <?php echo e(Session::get('failed')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="card-header">
                            <h5 class="card-title"> Change Password </h5>
                        </div>

                        <div class="card-body px-4">

                            <input type="hidden" name="email" value="<?php echo e($email); ?> "/>

                            <div class="form-group py-2">
                                <label> Password </label>
                                <input type="password" name="password" class="form-control <?php echo e($errors->first('password') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('password')); ?>" placeholder="New Password">
                                    <?php echo $errors->first('password', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>

                            <div class="form-group py-2">
                                <label> Confirm Password </label>
                                <input type="password" name="confirm_password" class="form-control <?php echo e($errors->first('confirm_password') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('confirm_password')); ?>" placeholder="Confirm Password">
                                <?php echo $errors->first('confirm_password', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Change Password </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\Phong\project-FANoFAN\resources\views/reset/change-password.blade.php ENDPATH**/ ?>