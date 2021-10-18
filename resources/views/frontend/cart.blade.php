<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce</title>

    @include('partials.styles')

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

    @if(Cart::getTotalQuantity()>0)

<header class="header" id="site-header">


    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
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
                <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>

                <p class="heading-text">Buy books, and we ship to you.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="cart">

                        <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary">  {{ Cart::getTotalQuantity() }}</span></h1>

                    </div>


                    <form action="#" method="post" class="cart-main">

                        <table class="shop_table cart">
                            <thead class="cart-product-wrap-title-main">
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>

                           @foreach (Cart::getContent() as $product )
                           <tr class="cart_item">

                            <td class="product-remove">
                                <a href="{{ route('cart.delete',$product->id) }}" class="product-del remove" title="Remove this item">
                                    <i class="seoicon-delete-bold"></i>
                                </a>
                            </td>

                            <td class="product-thumbnail">

                                <div class="cart-product__item">
                                    <a href="#">
                                        <img src="{{ asset('storage/'.$product->image) }}" height="100px" width="100px" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                    </a>
                                    <div class="cart-product-content">
                                        <p class="cart-author"></p>
                                        <h5 class="cart-product-title">{{ $product->name }}</h5>
                                    </div>
                                </div>
                            </td>

                            <td class="product-price">
                                <h5 class="price amount">{{ $product->price }}</h5>
                            </td>

                            <td class="product-quantity">

                                <div class="quantity">
                                    <a href="{{ route('cart.decr',['id' =>$product->id, 'quantity' => $product->quantity]) }}" class="quantity-minus">-</a>
                                    <input title="Qty" class="email input-text qty text" name="qty" value="{{ $product->quantity }}" type="text" placeholder="1" readonly>
                                    <a href="{{ route('cart.incr',['id' =>$product->id,'quantity'=>$product->quantity]) }}" class="quantity-plus">+</a>
                                </div>

                            </td>

                            <td class="product-subtotal">
                                <h5 class="total amount">
                                    {{ $product->getPriceSum() }}



                                </h5>
                            </td>

                        </tr>

                           @endforeach



                            <tr>
                                <td colspan="5" class="actions">

                                    <div class="coupon">
                                        <input name="coupon_code" class="email input-standard-grey" value="" placeholder="Coupon code" type="text">
                                        <div class="btn btn-medium btn--breez btn-hover-shadow">
                                            <span class="text">Apply Coupon</span>
                                            <span class="semicircle--right"></span>
                                        </div>
                                    </div>

                                    <div class="btn btn-medium btn--dark btn-hover-shadow">
                                        <span class="text">Apply Coupon</span>
                                        <span class="semicircle"></span>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>


                    </form>

                    <div class="cart-total">
                        <h3 class="cart-total-title">Cart Totals</h3>
                        <h5 class="cart-total-total">Total: <span class="price">{{ Cart::getTotal() }}</span></h5>
                        <a href="{{ route('checkout') }}" class="btn btn-medium btn--light-green btn-hover-shadow">
                            <span class="text">Checkout</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- End Books products grid -->



</div>

@else

<header class="header" id="site-header">


    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
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
                <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>

                <p class="heading-text">Buy books, and we ship to you.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="cart">

                        <h1 class="cart-title">Shopping Cart Empty: <a href="{{ route('home') }}"><span class="c-primary">Continue Shopping</span></a> </h1>

                    </div>

@endif

<!-- Footer -->




@include('partials.scripts')

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>
