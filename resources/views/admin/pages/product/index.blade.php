@extends('admin.app')
@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Danh sách</h4>
                <a href="{{ route('products.create') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 15px">ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ '$' . number_format($product['price']) }}</td>
                            <td>{{ $product['status'] }}</td>
                            <td>
                                <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('products.edit', ['product' => $product]) }}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <button class="btn btn-dark"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
