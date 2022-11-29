<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>{{ $name }}</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home.index') }}">Home</a></li>
                        @if (isset($category))
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home.category', [$category->name, $category->id]) }}">{{ $category->name }}</a></li>
                        @endif
                        <li class="breadcrumb-item active">{{ $name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
