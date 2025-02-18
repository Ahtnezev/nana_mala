<div id="promociones">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title mb-4">Nuestras promociones</h2>
                <div class="mb-5 position-relative">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ((array) config('vdata.swiper.items') as $item)
                                <div class="swiper-slide">
                                    <div class="slider__image image-in">
                                        <img class="img-fluid" src="{{ $item }}" alt="">
                                    </div>
                                </div> <!-- swiper-slide -->
                            @endforeach
                        </div> <!-- swiper-wraper -->
                    </div> <!-- swiper -->
                    <div class="swiper-pagination swiper-pagination-nosotros"></div>
                </div> <!-- __slider -->
            </div>
        </div>
    </div>
</div>
