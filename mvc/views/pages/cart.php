<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Cart</h2>
            </div>
        </div>
    </div>
    <div class="cart  ">
        <div class="container">
            <div class="row ">
                <div class="col-8">
                    <form action="" method="POST" enctype="multipart/form" class="cart-form">

                        <table class="cf-table">
                            <thead>
                                <tr class="cft-title g-5">
                                    <th>Product</th>
                                    <th></th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data['products'] as $pro) {
                                    echo '
                            
                            <tr class="cft-content">
                                <td ><img src="' . _PATH_UPLOAD_PRODUCT . $pro['img'] . '" alt="" class="w-20"></td>
                                <td>' . $pro['name'] . '</td>
                                <td>' . $pro['price'] . '</td>
                                <td></td>
                                <td></td>
                            </tr>
                            </hr>
                            ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
                <!-- <div class="col-4">
                    <div class="border">
                        <div class="cr-title">
                            <h2 class="font-bold">CART TOTALS
                            </h2>
                            <P class="flex justify-between font-bold">
                                <span>Subtotal</span>
                                <span class="subtotal">$324.48</span>
                            </P>

                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 ">

                    <div class="cart-collaterals sticky-sidebar">
                        <div class="cart_totals border -md ">
                            <div class="cart-information">


                                <h3 class="cart-title">Cart Totals</h3>

                                <table cellspacing="0" class="shop_table">


                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>342.48</bdi></span></td>
                                    </tr>



                                    <tr class="woocommerce-shipping-totals shipping">
                                        <th class="d-none"></th>
                                        <td data-title="Shipping" colspan="2">
                                            <h4>Shipping</h4>
                                            <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                <li class="custom-input">
                                                    <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1" class="shipping_method" /> <label for="shipping_method_0_flat_rate1">Flat rate: <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span></label>
                                                </li>
                                            </ul>
                                            <p class="woocommerce-shipping-destination">
                                                Shipping to <strong>CA, United States (US)</strong>. </p>



                                            <form class="woocommerce-shipping-calculator" action="https://d-themes.com/wordpress/udesign/tea/cart/" method="post">

                                                <section class="shipping-calculator-form d-block">

                                                    <p class="form-row form-row-wide" id="calc_shipping_country_field">
                                                        <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
                                                            <option value="default">Select a country / region&hellip;</option>
                                                        </select>
                                                    </p>

                                                    <p class="form-row form-row-wide" id="calc_shipping_state_field">
                                                        <span>
                                                            <select name="calc_shipping_state" class="border state_select" id="calc_shipping_state" data-placeholder="State / County">
                                                                <option value="">Select an option&hellip;</option>

                                                            </select>
                                                        </span>
                                                    </p>

                                                    <p class="form-row form-row-wide" id="calc_shipping_city_field">
                                                        <input type="text" class="input-text" value="" placeholder="City" name="calc_shipping_city" id="calc_shipping_city" />
                                                    </p>

                                                    <p class="form-row form-row-wide" id="calc_shipping_postcode_field">
                                                        <input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode" />
                                                    </p>

                                                    <div class="shipping-calculator-footer"><button type="submit" name="calc_shipping" value="1" class="btn btn-dark btn-outline btn-border-thin">Update Totals</button></div>
                                                    <input type="hidden" id="woocommerce-shipping-calculator-nonce" name="woocommerce-shipping-calculator-nonce" value="fa83d1bfd0" /><input type="hidden" name="_wp_http_referer" value="/wordpress/udesign/tea/cart/" />
                                                </section>
                                            </form>

                                        </td>
                                    </tr>







                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>352.48</bdi></span></strong> </td>
                                    </tr>


                                </table>

                                <div class="wc-proceed-to-checkout">

                                    <a href="https://d-themes.com/wordpress/udesign/tea/checkout/" class="checkout-button button btn-icon-right alt wc-forward">
                                        Proceed to checkout<i class="a-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>