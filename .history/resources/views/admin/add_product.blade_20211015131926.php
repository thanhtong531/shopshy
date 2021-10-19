@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
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
                        <form role="form" action="{{URL::to('/save-product')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text"name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text"name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea name="product_desc" style="resize:none" rows="8" class="form-control" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea name="product_content" style="resize:none" rows="8" class="form-control" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Iphone</option>
                                <option value="1">Samsung</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thương hiệu</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                       
                        <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    @endsection