<section class="pt-0 height-65">
    <div class="slider-animate home-slider">
        @if (count($params['slider']) > 0)
            @foreach ($params['slider'] as $item)
                <div>
                    <div class="home">
                        <img src="{{ asset('frontend-theme/assets/images/home-slider.jpg') }}" alt=""
                            class="bg-img blur-up lazyload">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-contain">
                                        <div>
                                            <h4 class="animated" data-animation-in="fadeInUp">{{ $item['name'] }}</h4>
                                            <h1 class="animated font-fraunces" data-animation-in="fadeInUp"
                                                data-delay-in="0.3">
                                                {{ $item['description'] }}
                                            </h1><a href="{{ $item['link'] }}" class="btn btn-solid animated"
                                                data-animation-in="fadeInUp" data-delay-in="0.5">shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h1 class="text-center">Dữ liệu đang được cập nhật!!</h1>
        @endif
    </div>
</section>
