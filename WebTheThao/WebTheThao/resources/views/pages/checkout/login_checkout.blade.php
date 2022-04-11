@extends('layout')
@section('content')
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Login</h1>
		<em></em>
		<h2><a href="{{URL::to('/trang-chu')}}">Home</a><label>/</label>Login</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
		
			<form action="{{URL::to('/login-customer')}}" method="POST">
            {{csrf_field()}}
			<div class="col-md-6 login-do">
			@if(session()->has('error'))
            <div class="alert alert-danger">
             {!! session()->get('error') !!}
             </div>
            @endif
				<div class="login-mail">
					<input type="email" placeholder="Email" required="" name="email_account">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="" name="password_account">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
				<label class="hvr-skew-backward">
					<input type="submit" value="login">
				</label>
			</div>
			<div class="col-md-6 login-right">
				 <h3>Completely Free Account</h3>
				 
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				<a href="{{URL::to('/create-customer')}}" ></a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>
@endsection