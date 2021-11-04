<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce</title>

    @include('partials.styles')

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
    	.text-center{
    		text-align: center;
    	}
    </style>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">0</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart">No products in the cart!</h4>
                            <p class="subtitle">Please make your choice.</p>
                            <div class="btn btn-small btn--dark">
                                <span class="text">view all catalog</span>
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
	<div class="row medium-padding120 bg-border-color">
		<div class="container">

			<div class="row">

				<div class="col-lg-12">
			<div class="order">
				<h2 class="h1 order-title text-center">Your Order</h2>
				<form action="#" method="post" class="cart-main">
					<table class="shop_table cart">
						<thead class="cart-product-wrap-title-main">
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
						</tr>
						</thead>
						<tbody>
                            @foreach (Cart::getContent() as $product )

						<tr class="cart_item">

							<td class="product-thumbnail">

								<div class="cart-product__item">
									<div class="cart-product-content">
										<h5 class="cart-product-title">{{ $product->name }}</h5>
									</div>
								</div>
							</td>

							<td class="product-quantity">

								<div class="quantity">
									{{ $product->quantity }}
								</div>

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">{{ $product->getPriceSum() }}</h5>
							</td>

						</tr>



                        @endforeach
                        </tbody>
                        <tr class="cart_item subtotal">

                            <td class="product-thumbnail">


                                <div class="cart-product-content">
                                    <h5 class="cart-product-title">	Subtotal:</h5>
                                </div>


                            </td>

                            <td class="product-quantity">

                            </td>

                            <td class="product-subtotal">
                                <h5 class="total amount">{{ number_format( Cart::getTotal())}}</h5>
                            </td>
                        </tr>
					</table>

					<div class="cheque">

						<div class="logos">
							<a href="#" class="logos-item">
								<img src="{{asset('assets/img/visa.png')}}" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="{{asset('assets/img/mastercard.png')}}" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="{{asset('assets/img/discover.png')}}" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="{{asset('assets/img/amex.png')}}" alt="Amex">
							</a>

							<span style="float: right;">
								<form action="{{ route('checkout') }}" method="POST">

                                    @csrf
									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="pk_test_51JqeYMC4CQn9TaQHBGVefJn0LMVkGsp60yw4MuIHaqeDeoG0eIYAuRniLQM1NVe54hNX51FGPmQSLVwIxCvDe0DP004Qq1gXFw"
									    data-amount="{{ Cart::getTotal() * 100 }}"
									    data-name="Ecommerce"
									    data-description="Buy Books"
									    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
									    data-locale="auto"
									    data-zip-code="true">
									  </script>
								</form>
							</span>
						</div>
					</div>

				</form>
			</div>
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
