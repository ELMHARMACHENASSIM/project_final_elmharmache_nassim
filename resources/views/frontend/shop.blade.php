@extends('layouts.index')
@section('content')
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <div class="container pt-5">
        <div class="row">
            <div class="col-2">
                <div class="nav flex-column nav-pills matlbotonat" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class=" btona active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">all</a>
                    <a class=" btona" id="v-pills-gaming-tab" data-toggle="pill" href="#v-pills-gaming" role="tab"aria-controls="v-pills-gaming" aria-selected="false">gaming</a>
                    <a class=" btona" id="v-pills-cloth-tab" data-toggle="pill" href="#v-pills-cloth" role="tab" aria-controls="v-pills-cloth" aria-selected="false">cloth</a>
                    <a class=" btona" id="v-pills-plastic-tab" data-toggle="pill" href="#v-pills-plastic" role="tab" aria-controls="v-pills-plastic" aria-selected="false">plastic</a>
                    <a class=" btona" id="v-pills-wood-tab" data-toggle="pill" href="#v-pills-wood" role="tab"aria-controls="v-pills-wood" aria-selected="false">wood</a>

                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                        {{-- all --}}
                        <div class="row align-items-center latest_product_inner">
                            @foreach ($productsall as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single_product_item">
                                        <a href={{route('showitem.index',$product->id)}}>    <img src={{ asset('storage/img/adminproduct/' . $product->image) }} alt=""> </a>
                                        <div class="single_product_text">
                                            <h4>{{ $product->name }}</h4>
                                            <h3>$150.00</h3>
                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12">
                                <div class="pageination d-flex justify-content-center align-items-center">
                                    {{ $productsall->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-gaming" role="tabpanel" aria-labelledby="v-pills-gaming-tab">
                        {{-- gaming --}}

                        <div class="row align-items-center latest_product_inner">
                            @foreach ($products as $product)
                                @if ($product->type == 'gaming')
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single_product_item">
                                            <a href={{route('showitem.index',$product->id)}}>     <img src={{ asset('storage/img/adminproduct/' . $product->image) }}
                                                alt=""> </a>
                                            <div class="single_product_text">
                                                <h4>{{ $product->name }}</h4>
                                                <h3>$150.00</h3>
                                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-cloth" role="tabpanel" aria-labelledby="v-pills-cloth-tab">
                        {{-- cloth --}}
                        <div class="row align-items-center latest_product_inner">
                            @foreach ($products as $product)
                                @if ($product->type == 'cloth')
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single_product_item">
                                            <a href={{route('showitem.index',$product->id)}}>   <img src={{ asset('storage/img/adminproduct/' . $product->image) }}
                                                alt=""> </a>
                                            <div class="single_product_text">
                                                <h4>{{ $product->name }}</h4>
                                                <h3>$150.00</h3>
                                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                      
                    </div>
                    <div class="tab-pane fade" id="v-pills-plastic" role="tabpanel" aria-labelledby="v-pills-plastic-tab">
                        {{-- plastic --}}

                        <div class="row align-items-center latest_product_inner">
                            @foreach ($products as $product)
                                @if ($product->type == 'plastic')
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single_product_item">
                                            <a href={{route('showitem.index',$product->id)}}>  <img src={{ asset('storage/img/adminproduct/' . $product->image) }}
                                                alt=""> </a>
                                            <div class="single_product_text">
                                                <h4>{{ $product->name }}</h4>
                                                <h3>$150.00</h3>
                                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-wood" role="tabpanel" aria-labelledby="v-pills-wood-tab">
                        {{-- wood --}}

                        <div class="row align-items-center latest_product_inner">
                            @foreach ($products as $product)
                                @if ($product->type == 'wood')
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="single_product_item">
                                            <a href={{route('showitem.index',$product->id)}}>   <img src={{ asset('storage/img/adminproduct/' . $product->image) }}
                                                alt=""></a>
                                            <div class="single_product_text">
                                                <h4>{{ $product->name }}</h4>
                                                <h3>$150.00</h3>
                                                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <!--================Category Product Area =================-->
        <section class="cat_product_area section_padding">
            <div class="container">
                <div class="row">


                </div>
            </div>
        </section>

    </div>

    <!--================End Category Product Area =================-->
@endsection
