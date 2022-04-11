@extends('admin_layout')
@section('admin_content')
<div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
				@if(session('success'))
            <div style="color: red"><h3>{!! session('success') !!}</h3>	</div>
       			 @endif
                <div class="block">
				<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                <a href="{{URL::to('/add-category-product')}}" class="btn btn-info" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm Danh Mục Sản Phẩm</a>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
					<form method="post" action="">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
							<th>STT</th>
							<th>Tên danh mục sản phẩm</th>
							<th>Thuộc danh mục</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
				@foreach($all_category_product as $key =>$cate_pro)
						<tr class="odd gradeX">
							<td><input class="item" type="checkbox" value=""/></td>
							<td>{{$cate_pro->category_id}}</td>
							<td>{{$cate_pro->category_name}}</td>
							<td>   @if($cate_pro -> category_status == 0)
                            Danh mục cha
                            @else
                            @foreach($category_product as $key => $category_sub_product)
                            @if($category_sub_product -> category_id == $cate_pro -> category_parent)
                            {{$category_sub_product -> category_name}}
                            @endif
                            @endforeach
                            @endif</td>
							<td><a onclick="return confirm('Bạn có chắc muốn xóa danh mục?')"  href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" >Delete</a> || <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}">Edit</a></td>
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