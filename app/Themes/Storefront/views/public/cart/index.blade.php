@extends('public.layout')

@section('title', trans('storefront::cart.cart'))

@section('content')
    <cart-index inline-template v-cloak>
        <div>
            <section class="shopping-cart-wrap">
                <div class="container">
                    @include('public.cart.index.steps')

                    <div class="shopping-cart">
                        <div class="shopping-cart-inner" v-if="cartIsNotEmpty">
                            @include('public.cart.index.cart_items')
                            @include('public.cart.index.coupon')
                        </div>

                        @include('public.cart.index.order_summary')
                    </div>

                    @include('public.cart.index.empty_cart')
                </div>
            </section>

           
        </div>
    </cart-index>
@endsection
