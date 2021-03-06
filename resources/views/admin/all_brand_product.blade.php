@extends ('admin_layout')
@section ('admin_content')
<section class="wrapper2">
<div class="table-agile-info-vieworder">
  <div class="panel panel-default">
    <div class="panel-heading">
      Tất cả thương hiệu
    </div>
    <div class="table-responsive">
			<?php
                $message = Session::get('message');
                if($message){
                    echo '<span style="color: red; width: 100%; text-align: center; ">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên thương hiệu</th>
            <th>Trạng thái</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @php
            $i=0;
          @endphp
        	@foreach($all_brand_product as $key => $brand_pro)
          @php
            $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{($brand_pro->brand_name )}}</td>
            <td><span>
            	<?php
            	if($brand_pro->brand_status==0){
            	?>
            		<a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}" ><span class="btn btn-danger" style="width: 55px">Ẩn</span></a>
            	<?php
            	}else{
            	?>
            		<a href="{{URL::to('/inactive-brand-product/'.$brand_pro->brand_id)}}" ><span class="btn btn-primary" style="width: 55px">Hiện</span></a>
            	<?php
            	}
            	?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}">
              	<span class="btn btn-success">Sửa</span>
              </a>
              <a onclick="return confirm('Xóa danh mục sản phẩm?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}">
              	<span class="btn btn-danger">Xóa</span>
              </a>
            </td>
          </tr>
          	@endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@endsection