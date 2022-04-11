@extends('welcome')
@section('content')
<div class="content-mid">
				<h3>Trending Items</h3>
				<label class="line"></label>
				<div class="mid-popular">
					@foreach($all_product as $key=>$product)
					<div class="col-md-3 item-grid simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="{{URL::to('public/upload/'.$product->product_image)}}" class="img-responsive" alt="">
						@if($product->product_status==2)
               				 <span class="label">
                    Mới
               				 </span>
               			 @elseif($product->product_status==1)
              		  <span class="label">
                    Khuyến mãi
                </span>
                @else
                @endif
						<div class="zoom-icon ">
						<a class="picture" href="{{URL::to('public/upload/'.$product->product_image)}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="{{URL::to('detail-product/'.$product->product_id)}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span>men</span>
							<form action="{{URL::to('save-cart')}}" method="POST" >
							{{ csrf_field() }}
							<input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">

					<input type="hidden" value="{{$product->product_name}}"
						class="cart_product_name_{{$product->product_id}}">

					<input type="hidden" value="{{$product->product_image}}"
					class="cart_product_image_{{$product->product_id}}">

					<input type="hidden" value="{{$product->product_price}}"
					class="cart_product_price_{{$product->product_id}}">

					<input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">		
							<h6><a href="single.html">{{$product->product_name}}</a></h6>
							</div>
							<input type="hidden" name="product_hidden" value="{{$product->product_id}}" >
							<div class="img item_add">
								<a href="#"><img src="{{('public/frontend/images/ca.png')}}" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p >{{number_format($product->product_price).'đ'}}</p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
							</form>
							
							</div>
							
						</div>
					</div>
					</div>
		@endforeach
			
				
					<div class="clearfix"></div>
				</div>
								<div class="mid-popular">
			
					</div>
				
					
				
					<div class="clearfix"></div>
			
			
			

			@endsection