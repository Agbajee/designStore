<aside class="order-summary-wrap">
    <div class="order-summary">
        

        <div class="order-summary-middle" :class="{ loading: loadingOrderSummary }">
            <ul class="list-inline order-summary-list">
                <li v-for="cartItem in cart.items">
                    <label>
                        <a :href="productUrl(cartItem.product)" class="product-name" v-text="cartItem.product.name"></a>
                       
                    </label>

                    <span class="price-amount" v-html="cartItem.unitPrice.inCurrentCurrency.formatted"></span>
                </li>

                <li v-if="hasCoupon" v-cloak>
                    <label>
                        {{ trans('storefront::cart.coupon') }}

                        <span class="coupon-code">
                            [@{{ cart.coupon.code }}]
                            <span class="btn-remove-coupon" @click="removeCoupon">
                                <i class="las la-times"></i>
                            </span>
                        </span>
                    </label>

                    <span
                        class="price-amount"
                        v-html="'-' + cart.coupon.value.inCurrentCurrency.formatted"
                    >
                    </span>
                </li>
            </ul>

            

            <div class="order-summary-total">
                <label>{{ trans('storefront::cart.total') }}</label>
                <span class="total-price" v-html="cart.total.inCurrentCurrency.formatted"></span>
            </div>
        </div>

        <div class="order-summary-bottom">
            <div class="form-group checkout-terms-and-conditions">
                <div class="form-check">
                    <input type="checkbox" v-model="form.terms_and_conditions" id="terms-and-conditions">

                    <label for="terms-and-conditions" class="form-check-label">
                        {{ trans('storefront::checkout.i_agree_to_the') }}
                        <a href="{{ $termsPageURL }}">
                            {{ trans('storefront::checkout.terms_&_conditions') }}
                        </a>
                    </label>

                    <span class="error-message" v-if="errors.has('terms_and_conditions')" v-text="errors.get('terms_and_conditions')"></span>
                </div>
            </div>

            <div id="paypal-button-container" v-if="form.payment_method === 'paypal'"></div>

            <button
                type="submit"
                class="btn btn-primary btn-place-order"
                :class="{ 'btn-loading': placingOrder }"
                :disabled="! form.terms_and_conditions"
                v-else
                v-cloak
            >
                {{ trans('storefront::checkout.place_order') }}
            </button>
        </div>
    </div>
</aside>