@extends('layout')
@section('content')

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2><a href="{{URL::to('trang-chu')}}">Home</a><label>/</label>Products</h2>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
                @foreach($category_by_id as $key=>$product)
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="{{URL::to('public/upload/'.$product->product_image)}}" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="{{URL::to('public/upload/'.$product->product_image)}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="{{URL::to('detail-product/'.$product->product_id)}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span>Women</span>
							<h6><a href="{{URL::to('detail-product/'.$product->product_id)}}">{{$product->product_name}}</a></h6>
							</div>
							<div class="img item_add">
								<a href="#"><img src="{{('public/frontend/images/ca.png')}}" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p >{{$product->product_price}}</p></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>
                    @endforeach
		
					
		
				
					</div>
				
					<div class="clearfix"></div>
				</div>
			</div>
		
			<div class="clearfix"></div>
			</div>
				<!--products-->
			
			<!--//products-->
		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="{{('public/frontend/images/ic.png')}}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{('public/frontend/images/ic1.png')}}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{('public/frontend/images/ic2.png')}}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{('public/frontend/images/ic3.png')}}" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			
			
		</div>

        @endsection