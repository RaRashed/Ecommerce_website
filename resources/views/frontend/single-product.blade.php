<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce</title>

    @include('partials.styles')

</head>


<body class=" ">


    <header class="header" id="site-header">

        <div class="container">

            <div class="header-content-wrapper">

                <ul class="nav-add">
                    <li class="cart">

                        <a href="{{ route('cart.show') }}" class="js-cart-animate">
                            <i class="seoicon-basket"></i>
                            <span class="cart-count">{{ Cart::getTotalQuantity() }}</span>
                        </a>

                        <div class="cart-popup-wrap">
                            <div class="popup-cart">
                                <h4 class="title-cart">No products in the cart!</h4>
                                <p class="subtitle">Please make your choice.</p>
                                <div class="btn btn-small btn--dark">
                                    <a href="{{ route('cart.show') }}">
                                        <span class="text" style="color: white">view all catalog</span>
                                        </a>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

        </div>

    </header>


    <div class="content-wrapper">



    <!-- Books products grid -->


    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">E-commerce Website</h4>

                    <p class="heading-text">Buy books, and we ship to you.

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row medium-padding120">
            <div class="product-details">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="product-details-thumb">
                        <div class="swiper-container" data-effect="fade">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="product-details-img-wrap swiper-slide">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="product" data-swiper-parallax="-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="product-details-info">
                        <div class="product-details-info-price">{{ $product->price }}</div>
                        <h3 class="product-details-info-title">{{ $product->name }}</h3>
                        <p class="product-details-info-text">{{ $product->description }}
                        </p>

                    <form action="{{route('cart')}}" method="POST">
                        @csrf

                        <div class="quantity">
                            <a href="" class="quantity-minus quantity-minus-d">-</a>
                            <input title="Qty" class="email input-text qty text" name="qty" type="text" value="2">
                            <a href="" class="quantity-plus quantity-plus-d">+</a>
                        </div>

                        <input type="hidden" name="pdt_id" value="{{ $product->id  }}" id="">

                        <button class="btn btn-medium btn--primary">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                            <span class="semicircle"></span>
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->



    </div>

    <!-- Footer -->

    <footer class="footer">

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div>

    </footer>


@include('partials.scripts')

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>
