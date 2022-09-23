@extends('admin.app')
@php
use App\Helpers\Template;
@endphp
@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Danh sách</h4>
                <form action="">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control form-control-lg" placeholder="Search..."
                            value="{{ $search }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <a href="{{ route('admin.products.create') }}" class="btn btn-success">Thêm mới</a>
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
                        <th>Price Formatted</th>
                        <th>Category</th>
                        <th class="text-center">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        @php
                            $status = Template::showButtonStatus($product, ['task' => 'product']);
                        @endphp
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->price_formatted }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td class="text-center">{!! $status !!}</td>
                            <td>
                                <form action="{{ route('admin.products.destroy', ['product' => $product]) }}" method="POST"
                                    class="form-delete">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.products.edit', ['product' => $product]) }}"
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
        <!-- /.card-body -->
        <div class="card-footer">
            {!! $products->appends(request()->input())->links('pagination.admin.pagination_backend') !!}
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
