@extends('admin.app')
@php
    use App\Helpers\Template;
    use App\Helpers\Highlight;
@endphp
@section('content')
    @include('admin.elements.page-header', ['title' => ucfirst($model)])
    <div class="card bg-gradient-white">
        <div class="card-body" style="display: block;">
            <div class="d-flex justify-content-between align-items-center">
                <x-admin.filter-status-product currentStatus="{{ $params['filter-status'] }}" />
                <form action="" method="GET">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false" id="input-group-prepend" data-value="all">
                                {{ request()->get('filter') != '' ? request()->get('filter') : 'all ' }}
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item btn-click" data-value="all" selected>All</button>
                                <button class="dropdown-item btn-click" data-value="name">Name</button>
                                <button class="dropdown-item btn-click" data-value="price">Price</button>
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
                <a href="{{ route("admin.{$model}.create") }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card bg-gradient-white">
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="15px">ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th class="text-center">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($items) > 0)
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td width="20%">{!! Highlight::show($item->name, $params, 'name') !!}</td>
                                <td>{!! Highlight::show($item->price_formatted, $params, 'price') !!}</td>
                                <td>{{ $item->category->name }}</td>
                                <td class="text-center">
                                    @include('admin.components.button-status', [
                                        'item' => $item,
                                        'model' => $model,
                                    ])
                                </td>
                                <td>
                                    <form action="{{ route("admin.{$model}.destroy", ['product' => $item]) }}"
                                        method="POST" class="form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route("admin.{$model}.edit", ['product' => $item]) }}"
                                            class="btn btn-success"><i class="fas fa-pen"></i></a>
                                        <button type="button" class="btn btn-dark btn-delete"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="h3 text-center">Dữ liệu đang được cập nhật!!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card bg-gradient-white">
        <div class="card-body" style="display: block;">
            {!! $items->appends(request()->input())->links() !!}
        </div>
    </div>
    <!-- /.card-footer -->
@endsection
