@extends('admin_layout')
@section('admin_content')
<div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa danh mục sản phẩm</h2>
              
               <div class="block copyblock"> 
                @foreach($edit_category_product as $key =>$edit_value)
			   <form method="post" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" enctype="multipart/form-data">
                   {{csrf_field()}}
			
            
            <!-- begin row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-lg-4">Tên Danh mục</div>
				<div class="col-lg-8">
					<input value="{{$edit_value->category_name}}" type="text" name="category_product_name" maxlength="50" class="form-control" required="required"  >
				</div>
			</div>
			<!-- end row -->
            
                      
            <!-- begin row -->
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
					<input type="submit" name="add_category_product" class="btn btn-primary" value="Sửa">
				</div>
			</div>
			<!-- end row -->
            
			</form>
                </div>
                @endforeach
            </div>
        </div>
@endsection
