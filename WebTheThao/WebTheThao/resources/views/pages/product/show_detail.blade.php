
@extends('layout')
@section('content')
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Single</h1>
		<em></em>
		<h2><a href="{{URL::to('trang-chu')}}">Home</a><label>/</label>Single</h2>
	</div>
</div>
<div class="single">
@foreach($detail_product as $key => $value)
<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			  
			        <div class="thumb-image"> <img src="{{URL::to('public/upload/'.$value->product_image)}}" data-imagezoom="true" class="img-responsive"> </div>
			   
			
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3>{{$value->product_name}}</h3>
				<p class="in-para"> Mã ID:{{$value->product_id}} </p>
			
				<h4 class="quick">Quick Overview:</h4>
				<p class="quick_desc">{{$value->product_content}}</p>
			    <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
				 	</ul>
				 </div>
	<!-- cart -->			 
				 <form action="{{URL::to('save-cart')}}" method="POST">
			
				 <input type="hidden" value="{{$value->product_id}}"
                                class="cart_product_id_{{$value->product_id}}">

                            <input type="hidden" value="{{$value->product_name}}"
                                class="cart_product_name_{{$value->product_id}}">

                            <input type="hidden" value="{{$value->product_image}}"
                                class="cart_product_image_{{$value->product_id}}">

                          

                            <input type="hidden" value="{{$value->product_price}}"
                                class="cart_product_price_{{$value->product_id}}">
				 {{csrf_field()}}
				 <div class="quantity"> 
				 <div class="price_single">
				  <span class="reducedfrom item_price">{{number_format($value->product_price).'đ'}}</span>
				
				</div>
				<input type="hidden" name="product_hidden" value="{{$value->product_id}}" >
</br>
						<div class="quantity"> 		
								<div class="quantity-select">                           
							
									<input name="qty" type="number" min="1" value="1"
                                            class="entry value {{$value->product_id}}" />
									<input name="productid_hidden" type="hidden"
                                            value="{{$value->product_id}}" />

								
								</div>
							</div>
							</div>
						
                                        
							<!--quantity-->
	<script>
    $('.value-plus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
    	divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
    	var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
    	if(newVal>=1) divUpd.text(newVal);
    });
	</script>
	<!--quantity-->
				 
			<button  class="add-to item_add hvr-skew-backward add-to-cart" type="submit"  data-id="{{$value->product_id}}" name="add-to-cart"> 
				   <a style="color:#fff;">Add to cart</a> </button>
				 </form>
			<div class="clearfix"> </div>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Chi tiết</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Hồ sơ</a></li> 
          <li class=""><a href="#tab3" data-toggle="tab">Đánh giá</a></li>  
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p > {{$value->product_content}}</p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
										</ul>         
							        </div>

</div>
<div class="tab-pane text-style" id="tab2">
	
									<div class="facts">									
										<p > Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
										<ul >
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Multimedia Systems</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Digital media adapters</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Set top boxes for HDTV and IPTV Player  </li>
										</ul>
							        </div>	

</div>
<div class="tab-pane text-style" id="tab3">

									 <div class="facts">
									  <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Research</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Design and Development</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Porting and Optimization</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>System integration</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verification, Validation and Testing</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Maintenance and Support</li>
										</ul>     
							     </div>	

 </div>
  
  </div>
  <div class="clearfix"></div>
  </div>
			<!---->	
</div>
</div>
@endforeach

</div>
@endsection