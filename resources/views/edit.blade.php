@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm sản phẩm</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('products.index') }}" class="btn btn-primary float-end">Danh sách sản phẩm</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->product_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã Sản Phẩm</strong>
                            <input type="text" name="product_id" class="form-control" value="{{ $product->product_id }}">
                        </div>
                        <div class="form-group">
                            <strong>Tên Sản Phẩm</strong>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <strong>Mô Tả SP</strong>
                            <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                        </div>
        
                        <div class="form-group">
                            <strong>Giá</strong>
                            <input type="text" name="price" class="form-control"value="{{ $product->price }}" >
                        </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Cập Nhật</button>
        </div>
    </div>
</div>
    
@endsection