@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                $message = Session::get('message');
                if($message){
                   echo '<span class="error-message"> '.$message.'</span>';
                    Session::put('message',null);
                }
            ?>

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text"name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                            <textarea name="brand_product_desc" style="resize:none" rows="8" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                       
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    @endsection