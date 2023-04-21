<div class="table-responsive">
    <table class="table table-borderless shopping-cart-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Gigs</th>
                <th>{{ trans('storefront::cart.table.unit_price') }}</th>
                <th>
                    <button class="btn-remove" @click="clearCart">
                        <i class="las la-times"></i>
                    </button>
                </th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="cartItem in cart.items" :key="cartItem.id">
                <td>
                    <div class="product-image">
                        <img
                            :src="baseImage(cartItem.product)"
                            :class="{ 'image-placeholder': ! hasBaseImage(cartItem.product) }"
                            alt="product image"
                        >
                    </div>
                </td>

                <td>
                    <a
                        :href="productUrl(cartItem.product)"
                        class="product-name"
                        v-text="cartItem.product.name"
                    >
                    </a>

                    <ul class="list-inline product-options" v-cloak>
                        <li v-for="option in cartItem.options">
                            <label>@{{ option.name }}:</label> @{{ optionValues(option) }}
                        </li>
                    </ul>
                </td>

                <td>
                    <label>{{ trans('storefront::cart.table.unit_price:') }}</label>

                    <span class="product-price" v-html="cartItem.unitPrice.inCurrentCurrency.formatted"></span>
                </td>

                


                <td>
                    <button class="btn-remove" @click="remove(cartItem)">
                        <i class="las la-times"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
