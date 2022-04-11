@extends('welcome')
@section('content')
<div class="content-mid">
				<h3>Kết quả tìm kiếm sản phẩm</h3>
</div>
				<label class="line"></label>
				<div class="mid-popular">
					@foreach($search_product as $key=>$product)
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
						<a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<form>
						{{ csrf_field() }}
						<input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">

			<input type="hidden" value="{{$product->product_name}}"
				class="cart_product_name_{{$product->product_id}}">

		

			<input type="hidden" value="{{$product->product_image}}"
			class="cart_product_image_{{$product->product_id}}">

			<input type="hidden" value="{{$product->product_price}}"
			class="cart_product_price_{{$product->product_id}}">

			<input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">	
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span>Women</span>
							<h6><a href="single.html">{{$product->product_name}}</a></h6>
							</div>
							<div class="img item_add">
								<a href="#"><img src="{{('public/frontend/images/ca.png')}}" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p >{{$product->product_price}}</p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
						</form>
					</div>
					</div>
		@endforeach
			
				
				
				</div>
	

			@endsection