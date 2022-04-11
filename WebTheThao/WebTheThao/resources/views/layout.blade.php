<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="{{asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="{{asset('public/frontend/css/style4.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<!--- start-rate---->
<script src="{{asset('public/frontend/js/jstarbox.js')}}"></script>
	<link rel="stylesheet" href="{{asset('public/frontend/css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<link href="{{asset('public/frontend/css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.html"><img src="{{asset('public/frontend/images/logo.png')}}" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
					<?php



$customer_id=Session::get('customer_id');
if($customer_id!=NULL){
?>
<li><a href="{{URL::to('/logout-checkout')}}">Logout</a></li>

<?php }else{
?>
		<li><a href="{{URL::to('/login-checkout')}}">Login</a></li>
<?php }?>
						<li><a href="{{URL::to('/register-customer')}}">Register</a></li>
						<li><a href="{{URL::to('/gio-hang')}}">Checkout</a></li>
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="{{URL::to('trang-chu')}}">Home</a></li>
            
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">San Pham<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
                            <ul>
							@foreach($category as $key => $cate)
							@if($cate->category_status==0)
                                <li><a href="{{URL::to('category-product/'.$cate->category_id)}}">
                                    {{$cate->category_name}}</a>
                                </li>
                            @endif
							@endforeach	
								</ul>
							</div>							
						</div>
					
					
						
						<div class="col1 col5">
						<img src="images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			
			<li><a class="color3" href="{{URL::to('/gio-hang')}}">Giỏ hàng</a></li>
			<li><a class="color4" href="404.html">About</a></li>
            <li><a class="color5" href="typo.html">Short Codes</a></li>
            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a >
				<?php
				$customer_name=Session::get('customer_name');
			if($customer_name){
							echo  $customer_name;}
						?>	
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="{{asset('public/frontend/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
			<script src="{{asset('public/frontend/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<form action="{{URL::to('/search-product')}}" method="post">
						{{csrf_field()}}
						<input type="submit" value="">
						<input type="text" value="" name="keywords_submit">	
						</form>	
					</div>
					<p>Shopin</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>

	<!--//content-->
    @yield('content')
    
		<!--//footer-->
		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="{{asset('public/frontend/images/ic.png')}}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{asset('public/frontend/images/ic1.png')}}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{asset('public/frontend/images/ic2.png')}}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{asset('public/frontend/images/ic3.png')}}" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="images/log.png" alt=""></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="404.html">About</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Lorem</a></li>
							<li><a href="#">Sed</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Contrary</a></li>
							<li><a href="#">Chunk</a></li>
							<li><a href="#">Amet</a></li>
							<li><a href="#">Omnis</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2016 Shopin. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="{{asset('public/frontend/js/simpleCart.min.js')}}"> </script>
<!-- slide -->
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
 <!--light-box-files -->
		<script src="{{asset('public/frontend/js/jquery.chocolat.js')}}"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>

</body>
</html>