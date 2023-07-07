@extends('user_template.layouts.template')

@section('main-content')



<div class="fashion_section">
    <div id="main_slider">

        <!--<div class="carousel-inner">-->

            <!--<div class="carousel-item active">-->

            <div class="container">
                <h1 class="fashion_taital">{{ $category->category_name}}</h1>
                <div class="fashion_section_2">
                    <div class="row">

                        @foreach ($products as $product )

                        <div class="col-lg-4 col-sm-4">
                            <div class="box_main">
                                <h4 class="shirt_text">{{ $product->product_name}}</h4>
                                <p class="price_text">Price <span style="color: #262626;">$ {{ $product->precio}}</span></p>
                                <div class="tshirt_img"><img src=""></div>
                                <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">Añadir al Carrito</a></div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <!--<div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Man -shirt</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/dress-shirt-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Woman Scart</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/women-clothes-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>-->
                    </div>
                </div>
            </div>



            <!--<div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Man & Woman Fashion</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Man T -shirt</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/tshirt-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Man -shirt</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/dress-shirt-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Woman Scart</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/women-clothes-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <h1 class="fashion_taital">Man & Woman Fashion</h1>
                    <div class="fashion_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Man T -shirt</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/tshirt-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Man -shirt</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/dress-shirt-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Woman Scart</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 30</span></p>
                                    <div class="tshirt_img"><img src="{{ asset('clientefrontend/images/women-clothes-img.png') }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

       
        <!--<a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>-->

    </div>
</div>

@endsection