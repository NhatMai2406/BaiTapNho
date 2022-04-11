@extends('admin_layout')
@section('admin_content')
<div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                @if(session('success'))
            <div>{!! session('success') !!}</div>
                     @endif
                <div class="block">
				<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="{{URL::to('/add-product')}}" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Danh Mục Sản Phẩm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
					<form method="post" action="">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình sản phẩm</th>
                            <th>Giá sản phẩm</th>
							<th>Trạng thái</th>
                            <th>Danh mục sản phẩm</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
				@foreach($all_product as $key=> $product)
						<tr class="odd gradeX">
							<td><input class="item" type="checkbox" value=""/></td>
							<td>{{$product->product_id}}</td>
							<td>{{$product->product_name}}</td>
                            <td><img src="public/upload/{{$product->product_image}}" height="100" width="100" alt=""></td>
							<td>{{number_format($product -> product_price).'đ'}} </td>
							<td>
                            <span class="text-ellipsis">
                                @if($product -> product_status==2)
                                Mới
                                @elseif($product -> product_status==1)
                                Khuyến mãi
                                @else
                                Trống
                                @endif
                            </span>
                        </td>
                            <td>{{$product->category_name}}</td>
							<td><a onclick="return confirm('Bạn có chắc muốn xóa san pham?')"  href="{{URL::to('delete-product/'.$product -> product_id)}}" >Delete</a> || <a href="{{URL::to('edit-product/'.$product -> product_id)}}">Edit</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
@endsection