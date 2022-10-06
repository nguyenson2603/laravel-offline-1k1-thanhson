@extends('admin.app')
@php
use App\Helpers\Template;
@endphp
@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between align-items-center">
                <x-admin.filter-status-product currentStatus="{{ $params['filter-status'] }}" params="{{ $params }}"/>
                <form action="" method="GET">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false" id="input-group-prepend">
                                {{ request()->get('filter') != '' ? request()->get('filter') : 'Type..' }}
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item btn-click" data-value="id">id</button>
                                <button class="dropdown-item btn-click" data-value="name">Name</button>
                                <button class="dropdown-item btn-click" data-value="description">Description</button>
                                <button class="dropdown-item btn-click" data-value="content">Content</button>
                                <button class="dropdown-item btn-click" data-value="price">Price</button>
                                <div role="separator" class="dropdown-divider"></div>
                                <button class="dropdown-item btn-click" data-value="category_id">category_id</button>
                            </div>
                        </div>
                        <input type="hidden" name="filter" class="data-field" value="{{ request()->get('filter') }}">
                        <input type="search" name="search" class="form-control form-control-lg" placeholder="Search..."
                            value="{{ request()->get('search') }}">
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
                        <th width="15px">ID</th>
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
                            <td width="30%">
                                <strong>Name:</strong> {{ $product['name'] }} <br>
                                <strong>Description:</strong> {{ $product['description'] }} <br>
                                <strong>Content:</strong> {{ $product['content'] }} <br>
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->price_formatted }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td class="text-center">
                                @include('admin.components.button-status', [
                                    'item' => $product,
                                    'model' => $model,
                                ])
                            </td>
                            <td>
                                <form action="{{ route('admin.products.destroy', ['product' => $product]) }}"
                                    method="POST" class="form-delete">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.products.edit', ['product' => $product]) }}"
                                        class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <button type="button" class="btn btn-dark btn-delete"><i
                                            class="fas fa-trash"></i></button>
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
            {!! $products->appends(request()->input())->links() !!}
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
