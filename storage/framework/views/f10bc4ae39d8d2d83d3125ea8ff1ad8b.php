<!-- update 21/6/2023 -->
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_component :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo e(asset('admin/css/style-responsive.css')); ?>" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/font.css')); ?>" type="text/css" />
    <link href="<?php echo e(asset('admin/css/font-awesome.css')); ?>" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="<?php echo e(asset('/admin/js/jquery2.0.3.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        button.btn.btn-info {
    margin-left: 205px;
}
        .preview{
            display: block;
            width: 150px;
            height: 150px;
            border: 1px solid black;
            margin-top: 10px;
        }
        span.text-alert {
            width: 116%;
            color: red;
            text-align: center;
            font-weight: bold;
            font-size: 15px;
            margin-left: -20px;
        }
    </style>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">

                <a href="/admin/dashboard" class="logo">
                    VISITORS
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->


            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo e(asset('admin/images/2.png')); ?>">
                            <span class="username">
                                <?php
                                $name = Session::get('username');
                                if ($name) {
                                    echo $name;
                                }
                                ?>
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="/admin/logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                    <a class="active" href="/admin/dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>List category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/add_category">Add category</a></li>
                        <li><a href="/list_all_category">Show list category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>List photo</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/add_photo">Add photo</a></li>
                        <li><a href="/show_photo">Show list photo</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>List Product</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/add_Product">Add Product</a></li>
                        <li><a href="/list_product">Show list Product</a></li>
                    </ul>
                </li>

        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="form-w3layouts">
                    <!-- page start-->
                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Add List category
                                </header>
                               
                                <div class="panel-body">
                               
                                  
                                    <div class="position-center">
                                    <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form role="form" action="<?php echo e(URL::to('/update_product/'.$row->id_product)); ?>" method="post"  >
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Product</label>
                                    <input type="text" class="form-control" value="<?php echo e($row->name_product); ?>"  id="exampleInputEmail1" name="nameProduct" placeholder="Enter name Product">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo e($row->money); ?>" name="Price" placeholder="Enter name Product">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Description</label>
                                    <textarea name="description"  id="" class="form-control" style="resize: none;"  rows="8" ><?php echo e($row->content); ?></textarea>
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">category</label>
                                    
                                    <select name="category" class="form_control input-sm m-bot15" id="">
                                   <?php $__currentLoopData = $list_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if($category->id==$row->id_category): ?>
                                 <option selected value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    
                               
                                </div>
                            
   
    
                                </label>
                               </div>
                               
                              
                               
                                
                               
                   
                               
                                <button type="submit" class="btn btn-info">Add catelogies</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        <section class="panel">
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                    </div>
                    <!-- page end-->
                </div>
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>

        <!--main content end-->
    </section>
    <script src="<?php echo e(asset('admin/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery.dcjqaccordion.2.7.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery.nicescroll.js')); ?>"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="<?php echo e(asset('admin/js/jquery.scrollTo.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\votan\Desktop\x\resources\views\Product\edit_product.blade.php ENDPATH**/ ?>