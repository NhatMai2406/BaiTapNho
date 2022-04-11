@extends('layout')
@section('content')

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Checkout</h2>
	</div>
</div>

<?php


$content=Cart::content();

?>
<!--login-->
	<!-- <script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script> -->

<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script> 
<div class="check-out">
<div class="container">
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th class="table-grid">Item</th>
			<th>Tên sản phẩm</th>
			<th>Prices</th>
			<th >Số lượng </th>
			<th >Tổng tiền </th>
			<th>Thanh toán</th>
			<th></th>
		  </tr>
		  <tbody>
			  @foreach($content as $key=> $v_content)
		  <tr class="cart-header">

			<td class="">
				<img src="{{asset('public/upload/'.$v_content->options->images)}}" class="img-responsive" alt="" width="50" height="30">
				<!-- <div class="sed">
				<h5><a href="single.html">Sed ut perspiciatis unde</a></h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus ) </p>
			
			</div>
			<div class="clearfix"> </div>
			<div class="close1"> </div></td> -->
			<td style="color: red;">{{($v_content->name)}}</td>
			<td>{{($v_content->price.' '.'đ')}}</td>
			<td class="item_price">	
			<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
					{{csrf_field()}}
			<input  type="text" value="{{$v_content->qty}}" class="entry value" name="quantity_cart" />
			<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control" >	
			<input type="submit" value="Cap nhat" name="update_qty" class="btn btn-small btn-default" >							
				</form>	</td>
			<td>{{(Cart::subtotal()).''.' đ'}}</td>
			<td class="add-check"><a class="item_add hvr-skew-backward" href="#">Add To Cart</a></td>
			<td><a  onclick="return confirm('Bạn có chắc muốn xóa sản phẩm?')"
			  href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}">Delete</i></a>
			</td>
		  </tr>
		@endforeach
		  </tbody>
		  
	</table>
	</div>
	</div>
	<div class="produced">
	<?php
		$customer_id=Session::get('customer_id');
		if($customer_id!=NULL){
?>
	<a href="{{URL::to('/checkout')}}" class="hvr-skew-backward">Produced To Buy</a>
	<?php }else{ ?>
		<a href="{{URL::to('/login-checkout')}}" class="hvr-skew-backward">Produced To Buy</a>
		<?php }?>
	 </div>
</div>
</div>
@endsection
<!--//login-->