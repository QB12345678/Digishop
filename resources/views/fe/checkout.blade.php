
@extends('fe.layout')

@section('contents')
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>checkout</h2>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space b-g-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form method="POST" action="{{ Route('processCheckout') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Shipping Name</label>
                                        <input required type="text" name="shipping_name" autocomplete="name" value="{{ old('name', Auth()->user()->name) }}" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Shipping Phone</label>
                                        <input required pattern="[0-9]{10}" id="shipping_phone" type="text" name="shipping_phone" autocomplete="phone" value="{{ old('phone', Auth()->user()->phone) }}" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Shipping Email</label>
                                        <input required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="shipping_email" type="text" name="shipping_email" value="{{ old('email', Auth()->user()->email) }}" autocomplete="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Shipping Address</label>
                                        <input required type="text" id="shipping_address" name="shipping_address" value="{{ old('address', Auth()->user()->address) }}" autocomplete="address" placeholder="Shipping address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Price</span></div>
                                    </div>
                                    <ul class="qty">
                                        <?php
                                        $total = 0;
                                        if (Session::has('cart')) {
                                            foreach(Session::get('cart') as $item) {
                                                $total += $item->quantity * $item->product->getCurrentPrice();
                                                ?>
                                                <li>{{$item->product->name}} x {{ $item->quantity }} <span>$ {{ number_format($item->product->getCurrentPrice() * $item->quantity, 2) }}</span></li>
                                                <?php
                                            }
                                        } else {
                                            ?>

                                            <li>No products</li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">$ {{ number_format($total, 2) }}</span></li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">$ {{ number_format($total, 2) }}</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="text-right"><button type="submit" class="btn-normal btn">Place Order</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

@endsection