@extends('layout')
@section('content')

<!--banner-->
<div class="banner-top">
	<div class="container"> 
		<h1>Register</h1>
		<em></em>
		<h2><a href="{{URL::to('/trang-chu')}}">Home</a><label>/</label>Register</h2>
		
	
	</div>
</div>
<!--login-->
<div class="product">
<div class="container">
		<div class="login">
		@if(session('error'))
        <div class="alert alert-danger">
             {{session('error')}}
            </div>
        @endif
			<form action="{{URL::to('/add-customer-fe')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
			<div class="col-md-6 login-do">
			<div class="login-mail">
					<input type="text" placeholder="Điền họ và tên" name="customer_name" required="">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail" >
					<input type="email" placeholder="Email" name="customer_email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
                <div class="login-mail">
					<input type="tel" placeholder="Phone" name="customer_phone" required="">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="customer_password" required="" min='4' max='8'>
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
		
                <button type="submit" value="submit" class="hvr-skew-backward">Đăng ký</button>
		
			
			</div>
			<div class="col-md-6 login-right">
				 <h3>Completely Free Account</h3>
				 
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>
</div>
@endsection
<!--//login-->
