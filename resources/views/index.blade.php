@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản Lý Sản Phẩm</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('products.create') }}" class="btn btn-primary float-end">Thêm Mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Mô Tả SP</th>
                            <th>Giá</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                            <tr>
                                <td>{{ $p->product_id }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->description }}</td>
                                <td>{{ $p->price }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $p->product_id) }}" method="POST">
                                        <a href="{{ route('products.edit', $p->product_id) }}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection