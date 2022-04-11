@extends('admin_layout')
@section('admin_content')
<div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm danh mục sản phẩm</h2>
              
               <div class="block copyblock"> 
           
			   <form method="post" action="{{URL::to('/save-category-product')}}" enctype="multipart/form-data">
                   {{csrf_field()}}
				   <div class="row" style="margin-top:5px;">
				   @if(session('success'))
                    <div>{!! session('success') !!}</div>
                    @endif
					</div>
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên Danh mục</div>
				<div class="col-lg-8">
					<input value="" type="text" name="category_product_name" maxlength="50" class="form-control" required="required" style="height: 30px;">
				</div>
			</div>
			<!-- end row -->
            
                      
            <!-- begin row  -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Danh mục cha</div>
				<div class="col-lg-8">
                <select name="category_product_status">
                	<option value="0">Danh mục cha</option>	
				
   
                </select>
                
				</div>
			</div>
			<!-- end row -->
		
			<!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4"></div>
				<div class="col-lg-8">
					<input type="submit" name="add_category_product" class="btn btn-primary" value="Thêm" onclick="return confirm('Bạn muốn thêm danh mục không?')">
				</div>
			</div>
			<!-- end row -->
			</form>
                </div>
            </div>
        </div>
@endsection
