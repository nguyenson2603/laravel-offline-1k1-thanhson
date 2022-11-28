@extends('admin.app')
@php
    use App\Helpers\Template;
    use App\Helpers\Highlight;
@endphp
@section('content')
    @include('admin.elements.page-header', ['title' => ucfirst($model)])
    <div class="card bg-gradient-white">
        <div class="card-body" style="display: block;">
            <div class="text-right">
                <a href="{{ route("admin.{$model}.create") }}" class="btn btn-success btn-block btn-lg font-weight-bold">Thêm
                    mới</a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card bg-gradient-white">
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 15px">ID</th>
                        <th>Name</th>
                        <th class="text-center">Move</th>
                        <th class="text-center">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($items) > 0)
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nameWithDepth }}</td>
                                <td class="text-center">
                                    @if ($item->getNextSibling() != null)
                                        <a href="{{ route('admin.categories.move', ['category' => $item, 'action' => 'down']) }}" class="btn btn-info"><i
                                                class="fas fa-arrow-down"></i></a>
                                    @endif
                                    @if ($item->getPrevSibling() != null)
                                        <a href="{{ route('admin.categories.move', ['category' => $item, 'action' => 'up']) }}" class="btn btn-info"><i
                                                class="fas fa-arrow-up"></i></a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @include('admin.components.button-status', [
                                        'item' => $item,
                                        'model' => $model,
                                    ])
                                </td>
                                <td>
                                    <form action="{{ route("admin.{$model}.destroy", ['category' => $item]) }}"
                                        method="POST" class="form-delete form-{{ $item->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route("admin.{$model}.edit", ['category' => $item]) }}"
                                            class="btn btn-success"><i class="fas fa-pen"></i></a>
                                        <button type="button" class="btn btn-dark btn-delete"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
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
@endsection
