@extends('admin_layout')
@section('admin_content')
<div class="grid_10">
            <div class="box round first grid">
                <h2>Customer List</h2>
				@if(session('success'))
            			<div>{!! session('success') !!}</div>
        				@endif
                <div class="block">
				<div class="row" style="margin-bottom:15px">
                            	<div class="col-lg-6">
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
					<form method="post" action="">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th><input type="checkbox" onclick="checkall('item',this)" name="check" class="checkbox"/></th>
							<th>Mã khách hàng</th>
                            <th>Họ tên khách hàng</th>
                            <th>Địa chỉ email<th>
							<th>Đơn đặt hàng</th>
                            <th>Số lượng đặt</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
			@foreach($all_customer as $key =>$customer)
						<tr class="odd gradeX">
							<td><input class="item" type="checkbox" value=""/></td>
							<td>{{$customer->customer_id}}</td>
							<td>{{$customer->customer_name}}</td>
							<td>{{$customer->customer_email}} </td>
							<td></td>    
							<td>{{$customer->customer_cart}}</td>                
        					<td> {{$customer->customer_sl}}</td>
							<td><a onclick="return confirm('Bạn có chắc muốn xóa danh mục?')"  href="{{URL::to('delete-customer/'.$customer->customer_id)}}" >Delete</a>
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