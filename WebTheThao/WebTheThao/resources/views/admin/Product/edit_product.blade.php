@extends('admin_layout')
@section('admin_content')
<div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa sản phẩm</h2>
              
               <div class="block copyblock"> 
                
			   <form method="post" action="{{URL::to('/update-product/'.$edit_product->product_id)}}" enctype="multipart/form-data">
               {{csrf_field()}}
            
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên Sản Phẩm</div>
				<div class="col-lg-8">
					<input value="{{$edit_product->product_name}}" type="text" name="product_name" class="form-control" required="required" >
				</div>
			</div>
			<!-- end row -->
             <!-- begin row  -->
	
			<!-- end row -->
            
                      
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"> Thuộc Danh mục sản phẩm</div>
				<div class="col-lg-8">
                <select name="category_id">	
                @foreach($cate_product as $key =>$cate)
              
                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                    @endforeach
           
                   
                </select>
                
				</div>
			</div>
			<!-- end row -->
            <!-- begin row -->
	
			<!-- end row -->
            <!-- begin row -->
             
			<!-- end row -->
            <!-- begin row -->
        
			<!-- end row -->
            <!-- begin row -->
        
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Giá</div>
                    <div class="col-lg-8">
                        <input value="{{$edit_product->product_price}}" type="text" name="product_price" class="form-control" required="required">
                    </div>
                </div>
			<!-- end row -->
			<!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Mô tả</div>
                    <div class="col-lg-8">
                        <textarea name="product_desc" cols="" rows="" class="form-control">{{$edit_product->product_desc}}</textarea>
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Nôi Dung</div>
                    <div class="col-lg-8">
                        <textarea name="product_content" cols="" rows="" class="form-control">{{$edit_product->product_content}}</textarea>
                        <script language="javascript">
				
					</script>
                    </div>
                </div>
			<!-- end row -->
            <!-- begin row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Ảnh</div>
                    <div class="col-lg-8">
                        <input value="" type="file" name="product_image">
                        <img src="{{asset('public/upload/'.$edit_product->product_image)}}">
                    </div>
                </div>
			<!-- end row -->
            <div class="row" style="margin-top:5px;">
                    <div class="col-lg-4">Trang thai</div>
                    <div class="col-lg-8">
                        <select value="" type="file" name="product_status" required="required"  >
                        @if($edit_product->product_status==2)
                                    <option selected value="2">Mới</option>
                                    <option value="1">Khuyến mãi</option>
                                    <option value="0">Trống</option>
                                @elseif($edit_product->product_status==1)
                                    <option value="2">Mới</option>
                                    <option selected value="1">Khuyến mãi</option>
                                    <option value="0">Trống</option>
                                @else
                                    <option value="2">Mới</option>
                                    <option value="1">Khuyến mãi</option>
                                    <option selected value="0">Trống</option>
                                @endif
                        </select>
                    </div>
                </div>
           <!-- begin row -->
          
			<!-- end row --> 
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input type="submit" name="edit_product" class="btn btn-primary" value="Sửa">
				</div>
			</div>
			<!-- end row -->
			</form>
                </div>

            </div>
        </div>
        @endsection