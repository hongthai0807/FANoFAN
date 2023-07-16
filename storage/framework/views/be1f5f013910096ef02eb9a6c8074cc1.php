<?php $__env->startSection('title_page'); ?>
    Recycle Bin Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body_content'); ?>
        <style>
            .btn-danger {
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
                margin-left: 3vh;
            }
            .col-md-2 {
                margin-left: 5vh;
            }
        </style>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recycle Bin Product
                        </div>
                        <div class="row w3-res-tb">
                            <div class="col-sm-5 m-b-xs">


                            </div>
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-3">

                            </div>
                        </div>
                        <?php

                        ?>
                        <div class="panel-body">
                            <?php if(Session::has('success')): ?>
                                <script>
                                    toastr.success("<?php echo e(session('success')); ?>")
                                </script>

                            <?php endif; ?>

                            <div class="table-responsive">
                                <div class="row py-2" style="    margin-right: 1vh;">
                                </div>
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th> Name Product</th>
                                        <th>Money</th>
                                        <th>Category</th>
                                        <th>Restore</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <?php $__currentLoopData = $recycle_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><img src="<?php echo e($rp->value); ?>" width="100" height="100" alt=""></td>
                                            <td><?php echo e($rp->name_product); ?></td>
                                            <td><?php echo e($rp->money); ?></td>
                                            <td><?php echo e($rp->name); ?></td>
                                            <td><a href="/recycle_bin/product/restore/<?php echo e($rp->id_product); ?>"><i class="fa-solid fa-trash-can-arrow-up"></i></a></td>
                                            <td><a href="/recycle_bin/product/delete/<?php echo e($rp->id_product); ?>"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <?php echo e($recycle_product->links()); ?>

            </section>
            <!-- footer -->
            <div class="footer" style="width: 100%;position: absolute ;bottom: 0; text-align: center">
                <div class="wthree-copyright">
                    <p>© 2023. All rights reserved | Design by <a href="/about">Favorable Team</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"
             id="mi-modal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Are you Delete</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="deleteAllSelectedRecord">Yes</button>
                        <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!--main content end-->
        </section>
        <script>
            $(function (e) {
                $("#select_all_ids").click(function () {
                    $('.checkbox_ids').prop('checked', $(this).prop('checked'));
                });
                $('#deleteAllSelectedRecord').click(function (e) {
                    e.preventDefault();
                    var all_ids = [];
                    $('input:checkbox[name=ids]:checked').each(function () {
                        all_ids.push($(this).val());
                    })
                    $.ajax({
                        url: "<?php echo e(route('photo.delete')); ?>",
                        type: 'DELETE',
                        data: {
                            ids: all_ids,
                            _token: '<?php echo e(csrf_token()); ?>'
                        },
                        success: function (response) {
                            $.each(all_ids, function (key, val) {
                                $('#photo_ids' + val).remove();
                            })
                        }
                    });
                });
            });
        </script>
        <script>
            var modalConfirm = function (callback) {

                $("#btn-confirm").on("click", function () {
                    $("#mi-modal").modal('show');
                });

                $("#modal-btn-si").on("click", function () {
                    callback(true);
                    $("#mi-modal").modal('hide');
                });

                $("#modal-btn-no").on("click", function () {
                    callback(false);
                    $("#mi-modal").modal('hide');
                });
            };

            modalConfirm(function (confirm) {
                if (confirm) {
                    //Acciones si el usuario confirma
                    $("#result").html("CONFIRMADO");
                } else {
                    //Acciones si el usuario no confirma
                    $("#result").html("NO CONFIRMADO");
                }
            });
        </script>
        <script>
            $( function() {
                $( "#datepicker" ).datepicker({
                    prevText:'Last month',
                    nextText:'Next month',
                    dateFormat:'yy-mm-dd',
                    dayNamMin:['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                    duration:'slow'
                });

                $( "#datepicker2" ).datepicker({
                    prevText:'Last month',
                    nextText:'Next month',
                    dateFormat:'yy-mm-dd',
                    dayNamMin:['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                    duration:'slow'
                });
            } );
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-FANoFAN\resources\views/recycle_bin/recycle_bin_product.blade.php ENDPATH**/ ?>