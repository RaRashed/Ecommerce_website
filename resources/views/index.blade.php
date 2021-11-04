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
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        <div class="header-content-wrapper">

            <ul class="nav-add">
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                <li class="cart">

                    <div class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{ Cart::getTotalQuantity() }}</span>
                    </div>

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

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">

            <div class="row mb30">


            @foreach($products as $product)

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="books-item">
                    <div class="books-item-thumb">
                        <img src="{{ asset('storage/'.$product->image)}}" width="100px" height="100px" alt="book">
                        <div class="new">New</div>
                        <div class="sale">Sale</div>
                        <div class="overlay overlay-books"></div>
                    </div>

                    <div class="books-item-info">
                        <a href="{{ route('singleProduct',$product->id) }}"><h5 class="books-title">{{ $product->name }}</h5></a>


                        <div class="books-price">{{$product->price}}</div>
                    </div>

                    <a href="{{ route('singleProduct',$product->id) }}" class="btn btn-small btn--dark add">
                        <span class="text">Product Details</span>

                    </a>

                </div>
            </div>
            @endforeach
            </div>

            <div class="row pb120">


                <div class="col-lg-12">
                    {{ $products->links() }}



                </div>

            </div>
        </div>
        </div>
    </div>
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
