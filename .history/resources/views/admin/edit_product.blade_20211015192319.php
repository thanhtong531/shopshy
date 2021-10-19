@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                </header>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="error-message"> '.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                        @foreach($edit_category_product as $key =>$edit_value)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update-product/'.$edit_value->category_id)}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text"name="product_name" value="{{$edit_value->category_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea name="product_desc"  style="resize:none" rows="8" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">
                                {{$edit_value->category_desc}}
                            </textarea>
                        </div>
                       
                       
                        <button type="submit" name="update_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
    @endsection