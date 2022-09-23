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
            font-family: "Playfair Display", "sans-serif";
            color: #888888;
        }
    </style>
    <div class="checkout w-[70%] mx-[auto] mb-5">
        <div class="w-full my-3">
            <span>Have a coupon?</span>
            <span class="font-bold text-[#323334]">ENTER YOUR CODE</span>
            <div class="border p-4  my-3 hidden">
                <p>If you have a coupon code, please apply it below.</p>
                <div class=" flex flex-row gap-2 pt-2">
                    <input class="border p-3 " type="text" placeholder="Coupon code">
                    <button class="border border-[#323334] p-3 w-[200px] hover:bg-[#000] text-[#323334] hover:text-[#fff]" type="submit">Apply Coupon</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-7">

                <div>
                    <h3 class="font-bold text-[#323334] text-[22px]">BILLING DETAILS</h3>
                </div>
                <form class="my-3">
                    <div class="form-row row">
                        <div class="form-group col-6">
                            <label for="">First name</label>
                            <input type="text" class="form-control" id="" placeholder="First name">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" id="" placeholder="Lát name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Company name (optional)</label>
                        <input type="text" class="form-control" id="" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Country / Region *</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Street address *</label>
                        <input type="text" class="form-control" id="" placeholder="house number and street name">
                        <input type="text" class="form-control" id="" placeholder="Apartment, suite, unit, etc.(optional)">

                    </div>
                    <div class="form-row row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Town/City *</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">State *</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Zip Code *</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Phone *</label>
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email address *</label>
                        <input type="text" class="form-control" id="" placeholder="mail@gmail.com">
                    </div>
                    t
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
            <div class="col-5">

            </div>
        </div>
    </div>
</div>