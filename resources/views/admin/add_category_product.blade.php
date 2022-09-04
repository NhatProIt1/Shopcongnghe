@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Danh Mục Sản Phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="email" name ="category_product_name"class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea style="resize: none" rows="5" type="password"name ="category_product_desc"class="form-control" id="exampleInputPassword1" placeholder="Mô Tả Danh Mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển Thị</label>
                                        <select class="form-control input-sm m-bot15">
                                            <option>Ẩn</option>
                                            <option>hiển Thị</option>
                                            
                                        </select>
                                </div>
                                
                                <button type="submit" name="add_category_product"class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div
@endsection             