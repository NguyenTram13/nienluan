<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Checkout</h2>
            </div>
        </div>
    </div>
    <style>
        .checkout {
            font-family: 'Playfair Display', 'Poppins', sans-serif;
            color: #888888;
        }
    </style>
    <div class="checkout w-[70%] mx-[auto] mb-5">
        <div class="w-full my-3">
            <span>Have a coupon?</span>
            <span class="font-bold text-[#323334]">ENTER YOUR CODE</span>
            <div class="hidden p-4 my-3 border">
                <p>If you have a coupon code, please apply it below.</p>
                <div class="flex flex-row gap-2 pt-2 ">
                    <input class="p-3 border " type="text" placeholder="Coupon code">
                    <button class="border border-[#323334] p-3 w-[200px] hover:bg-[#000] text-[#323334] hover:text-[#fff]" type="submit">Apply Coupon</button>
                </div>
            </div>
        </div>
        <form id="signupForm" method="post" class="my-3 form-horizontal" action="#">
            <div class="row">

                <div class="col-7">
                    <div>
                        <h3 class="font-bold text-[#323334] text-[22px]">BILLING DETAILS</h3>
                    </div>
                    <div class="form-row row">
                        <div class="py-2 form-group col-6">
                            <label for="">First name</label>
                            <input type="text" class="form-control" name="firstname" id="" placeholder="First name">
                        </div>
                        <div class="py-2 form-group col-6">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="" placeholder="Last name" value="<?php echo $_SESSION['user']['fullname'] ?>">
                        </div>
                    </div>
                    <div class="py-2 form-group ">
                        <label for="">Address *</label>
                        <input type="text" class="py-2 my-2 form-control" id="" name="address" placeholder="số nhà, tên đường, xã/phường, quận/huyện, tỉnh/thành phố." value="<?php echo $_SESSION['user']['address'] ?>">

                    </div>
                    <div class="form-row row">

                        <div class="py-2 form-group col-md-6">
                            <label for="">Zip Code *</label>
                            <input type="text" name="zip" class="form-control" id="">
                        </div>
                        <div class="py-2 form-group col-md-6">
                            <label for="">Phone *</label>
                            <input type="text" name="phone" class="form-control" id="" value="<?php echo $_SESSION['user']['tel'] ?>">
                        </div>
                    </div>
                    <div class="py-2 form-group ">
                        <label for="">Email address *</label>
                        <input type="text" class="form-control" id="" placeholder="mail@gmail.com" value="<?php echo $_SESSION['user']['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Order notes (optional)</label>
                        <textarea class="form-control" name id="" rows="3" placeholder="Node about your oder, e.g.special notes for delivery."></textarea>
                    </div>


                </div>
                <div class="col-5">
                    <div class="p-3 border">
                        <h2 class="font-bold text-[#323334] text-[22px] mb-[28px]">YOUR ORDER</h2>
                        <div>
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b">
                                        <th class="pb-3 text-[#323334]">Product</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $sum = 0;
                                    $pay = 0;
                                    if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                                        foreach ($_SESSION['cart'] as $item) {
                                            $sum += $item['total'];
                                    ?>
                                            <tr>
                                                <td class="py-3 text-[14px] "><?php echo $item['name'] . ' x ' . $item['soluong'] ?></td>
                                                <td class="text-end">$<?php echo number_format($item['total'], 2) ?></td>
                                            </tr>
                                        <?php
                                        };
                                        $pay = 10 + $sum;

                                        ?>

                                        <tr class="font-bold text-[#323334] ">
                                            <td class="py-3 ">Subtotal</td>
                                            <td class="text-end">$<?php echo number_format($sum, 2) ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-3 text-[#323334]">Shipping</td>
                                            <td class="text-end"></td>
                                        </tr>
                                        <tr>
                                            <td class="pb-4 text-[14px]">Flat rate: $10.00</td>
                                            <td class="text-end"></td>
                                        </tr>

                                        <tr class="border-y p-3 font-bold text-[#323334]">
                                            <td class="py-3 ">Total</td>
                                            <td class="text-end ">$ <span class="summoney">

                                                    <?php echo number_format($pay, 2) ?></td>
                                            </span>
                                        </tr>


                                    <?php

                                    }; ?>

                                    <tr class="font-bold text-[#323334] ">
                                        <td class="py-3 ">Payment Methods</td>
                                    </tr>
                                    <tr class="w-full border-b text-[14px]">
                                        <td class="w-full" colspan="2">
                                            <div class="w-full accordion accordion-flush" id="accordionFlushExample">
                                                <!-- <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="w-full accordion-button text-[14px] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Direct bank transfer
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                        <button class="accordion-button text-[14px] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                            Check payments
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                                                    </div>
                                                </div> -->
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                        <label for="ttt">
                                                            <button class="accordion-button text-[14px] collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">

                                                                Cash on delivery
                                                            </button>
                                                        </label>
                                                        <input type="radio" id="ttt" class="hidden" name="payment" value="tt thuong" id="">
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Pay with cash upon delivery.</div>
                                                    </div>
                                                </div>
                                                <div id="paypal-button-container"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="my-3 ">
                                        <td colspan="2">
                                            <button type="submit " name="placeorder" class="bg-[#000] text-[#fff] hover:bg-[#4b4d4e] w-full p-2">Place Order</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            let summoney = document.querySelector('.summoney');
            let formPayment = document.querySelector('#signupForm');
            formPayment.addEventListener('submit', function(e) {
                e.preventDefault();
                

            });


            console.log(summoney.textContent)
            paypal
                .Buttons({
                    // Set up the transaction
                    createOrder: function(data, actions) {
                        console.log(data);
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: +summoney.textContent,
                                },
                            }, ],
                        });
                    },

                    // Finalize the transaction
                    onApprove: async function(data, actions) {
                        const order = await actions.order.capture();
                        console.log(order);
                        formPayment.submit();
                    },
                    onError: (err) => {
                        console.log(err);
                    },
                })
                .render("#paypal-button-container");
        </script>
    </div>
</div>