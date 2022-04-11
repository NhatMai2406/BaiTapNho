
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{('public/backend/css/stylelogin.css')}}" media="screen" />
</head>
<body>
	
<div class="container">
	<section id="content">
    <h1>Admin Login</h1>
            @if(session('error'))
                <div class="alert alert-danger">{!! session('error') !!}</div>
            @endif
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
        {{csrf_field()}}
			<div>
				<input type="text" placeholder="Username" required="" name="admin_email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="admin_password"/>
			</div>
			<div>
				<input type="submit" value="Dang nhap" name="login" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>