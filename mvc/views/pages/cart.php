<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Cart</h2>
            </div>
        </div>
    </div>
    <div class="cart  ">
        <div class="w-[70%] mx-[auto]">
            <div class="row body-font font-Poppins">
                <div class="col-8">
                    <form action="" method="POST" enctype="multipart/form" class="cart-form m-0">

                        <table class="cf-table text-[#323334] w-full border-spacing-4">
                            <thead>
                                <tr class="cft-title font-Poppins  ">
                                    <th>Product</th>
                                    <th> </th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>

                            </thead>

                            <tbody class=" ">
                                <?php
                                foreach ($data['products'] as $pro) {
                                    echo '
                            
                            <tr class="cft-content   my-[12px] border-b">
                                <td class="py-2"><img src="' . _PATH_UPLOAD_PRODUCT . $pro['img'] . '" alt="" class="w-20"></td>
                                <td><a href"#" class="hover:text-[#98cb50]  cursor-pointer">' . $pro['name'] . '</a></td>
                                <td>' . $pro['price'] . '</td>
                                <td > 
                                    <span class=" hover:bg-[#98cb50] transition-all  hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">-</span>
                                    <span class="  transition-all hover:text-[#98cb50] inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">2</span>
                                    <span class=" hover:bg-[#98cb50] transition-all hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">+</span>


                                </td>
                                <td></td>
                                
                            </tr>
                            
                            ';
                                }

                                ?>

                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="col-4 ">
                    <div class="border">
                        <div class="cr-title p-[30px] ">
                            <div class="cr-top ">
                                <h2 class="font-bold text-[2rem] body-font font-Poppins pb-[20px]">CART TOTALS
                                </h2>
                                <P class="flex justify-between font-bold">
                                    <span>Subtotal</span>
                                    <span class="subtotal py-[5px]">$324.48</span>
                                </P>
                            </div>
                            <hr>
                            <div class="cr-center py-[28px]">
                                <h3>Shipping</h3>
                                <p> Flat rate: <span class="flat_rate"> $10.00</span></p>
                                <p>Shipping to <span class="font-bold">Address</span>
                                </p>

                                <div class="mb-3">
                                    <label for="" class="form-label">Address:</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="cr-bottom">
                                <P class="flex justify-between font-bold">
                                    <span>Total</span>
                                    <span class="subtotal">$324.48</span>
                                </P>
                                <button class="bg-[#323334] text-[#fff] p-[4px] w-full">PROCEED TO CHECKOUT <i class="fa-solid fa-arrow-right-long"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 ">

                    <div class="cart-collaterals sticky-sidebar">
                        <div class="cart_totals border-md ">
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
                </div> -->
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