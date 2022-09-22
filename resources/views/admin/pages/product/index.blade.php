@extends('admin.app')
@push('style')
	<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
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
                                <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST" class="form-delete">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('products.edit', ['product' => $product]) }}"
                                        class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <a href="" class="btn btn-dark btn-delete"><i class="fas fa-trash"></i></a>
                                </form>
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {!! $products->appends(request()->input())->links('pagination.admin.pagination_backend') !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
