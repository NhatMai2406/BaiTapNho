
<?php use Illuminate\Support\Facades\Session; ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/reset.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/layout.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/css/nav.css')}}" media="screen" />
    <link href="{{('public/backend/css/table/demo_page.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="{{asset('public/backend/js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="public/backend/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="{{asset('public/backend/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/jquery-ui/jquery.ui.sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/table/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <!-- END: load jquery -->
   
    <script src="{{asset('public/backend/js/setup.js')}}" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
   </head>
<body>
    <!--  wrapper -->
    <div class="container_12">
        <!-- navbar top -->
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="{{('public/backend/images/livelogo.png')}}" alt="Logo" />
				</div>
				<div class="floatleft middle">
					<h1>Training with live project</h1>
					<p>www.trainingwithliveproject.com</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="{{('public/backend/images/img-profile.jpg')}}" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li><a href="">Hello  </a>
                            <?php
                    $name=Session::get('admin_name');
                    if($name){
                        echo $name;
                    }
                ?>
                
                        </li>
                            <li><a href="{{URL::to('/logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <!-- end navbar top -->

        <!-- navbar side -->
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="changepassword.php"><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li>
                <li class="ic-charts"><a href=""><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
                    
        <div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
				
               
                
                        <li>
                        <a class="menuitem"> Danh mục sản phẩm</a>
                        <ul class="submenu">
                        <li><a href="{{URL::to('/add-category-product')}}">Thêm danh mục sản phẩm</a> </li>
                        <li><a href="{{URL::to('/all-category-product')}}">Danh sách danh mục sản phẩm</a> </li>

                        </ul>
                     </li>
                     <li>
                        <a class="menuitem">Sản phẩm</a>
                        <ul class="submenu">
                        <li><a href="{{URL::to('/add-product')}}">Thêm  sản phẩm</a> </li>
                        <li><a href="{{URL::to('/all-product')}}">Danh sách sản phẩm</a> </li>

                        </ul>
                     </li>
                     <li>
                        <a class="menuitem">Quản lý khách hàng </a>
                        <ul class="submenu">
                        <li><a href="{{URL::to('/all-customer')}}">Danh sách khách hàng</a> </li>

                        </ul>
                     </li>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                    
                </div>
                <!--End Page Header -->
            </div>
           
            

            <div class="row">
           @yield('admin_content')

            </div>



         


        </div>
        <!-- end page-wrapper -->

        <div class="clear">
        </div>
        
    </div>
    
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
    <!--test-->
    
    <!-- end test-->
    
    <!-- end wrapper -->



</body>

</html>
