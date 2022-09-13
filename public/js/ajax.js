$(document).ready(function () {
  const filterCate = document.querySelectorAll(".filter_cate");
  const productList = document.querySelector(".product-list");
  const cartCount = document.querySelector(".cart-count");
  const cartCenter = document.querySelector(".model-cart-center");
  const sumMoney = document.querySelector(".cart-footer-total span:last-child");
  console.log(sumMoney);
  const renderProduct = (item, img_path, url) => {
    let template = `
    <div class="col-xs-12 col-sm-6 col-lg-3 ">
    <div class="item new-arrival-item shadow " data-id=" <?php echo $new['id'] ?>">
        <div class="new-arrival-img">
            <img src="${img_path}${item.img} ?>">
            <div class="new-arrival-other">
                <div class="other-icon">
                    <span data-url="${url}" data-id=${item.id} data-pathimg=${img_path} class="other-icon-cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-heart"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-scale-balanced"></i>
                    </span>
                </div>
                <div class="other-btn">
                    <button>Quick View</button>
                </div>
            </div>

            <div>
                <span class="sale">12% off</span>
            </div>
        </div>
        <div class="arrival-product-content">
            <h3><a href="details-product.html">${item.name}</a></h3>
            <div class="arrival-product-evaluate">
                <span class="raiting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span class="sold-out">${item.views}</span>
            </div>
            <p class="arrival-product-price">
                <span>$</span>
                <span class="product-price ">${item.price}</span>
            </p>
        </div>
    </div>
</div>
    `;
    productList.insertAdjacentHTML("beforeend", template);
  };
  [...filterCate].forEach((item) => {
    item.addEventListener("click", function (e) {
      let id = item.dataset.id;
      let url = item.dataset.url;
      let path_img = item.dataset.pathimg;
      console.log(path_img);
      if (id > 0) {
        $.ajax({
          type: "POST",
          url: url + "/filterPro",
          data: { id },
          dataType: "text",

          success: function (data) {
            let response = JSON.parse(data);
            // console.log(response);
            productList.innerHTML = "";
            response.forEach((item) => renderProduct(item, path_img, url));
          },
          error: function (e) {
            console.log(e);
          },
        });
      }
    });
  });

  // add card
  var formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",

    // These options are needed to round to whole numbers if that's what you want.
    //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
    //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
  });
  function renderItemCart(item, path_img, url) {
    let template = `
    
    <div class="cart-center-item">
                    <div class="cart-center-left">
                        <p class="title">${item.name}</p>
                        <div class="price-amount">
                            <span class="cart-center-amount">${item.soluong}</span>
                            X
                            <span class="cart-center-price">$ ${item.price}</span>
                        </div>
                    </div>
                    <div class="cart-center-right">
                        <img src="${path_img}${item.img}" alt="">
                        <span data-pathimg=${path_img} data-url="${url}" data-id="${item.id}" class="cart-center-close hover:scale-150" >
                            <i class="fa-solid fa-xmark"></i>
                        </span>
                    </div>
                </div>
    `;
    cartCenter.insertAdjacentHTML("beforeend", template);
  }

  function addCard(e) {
    let id = +e.target.parentElement.dataset.id;
    let url = e.target.parentElement.dataset.url;
    let path_img = e.target.parentElement.dataset.pathimg;
    console.log(path_img);
    // console.log(url);
    if (id > 0) {
      $.ajax({
        type: "POST",
        url: url + "/addCard",
        data: { id },
        dataType: "text",
        success: function (data) {
          let response = JSON.parse(data);
          cartCenter.innerHTML = "";
          let sum = 0;
          let totalLength = 0;
          response.forEach((item) => {
            sum += +item.total;
            totalLength += +item.soluong;
            renderItemCart(item, path_img, url);
          });
          sumMoney.textContent = formatter.format(sum);
          cartCount.textContent = totalLength;

          Swal.fire({
            position: "center-center",
            icon: "success",
            title: "More successful products",
            showConfirmButton: false,
            timer: 1500,
          });
        },
        error: function (e) {
          console.log(e);
        },
      });
    }
  }
  const card = document.querySelectorAll(".other-icon-cart");
  productList.addEventListener("click", function (e) {
    console.log(e.target);
    if (e.target.matches(".other-icon-cart i")) {
      addCard(e);
    }
  });
  toastr.options = {
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-left",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "500",
    timeOut: "2000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  };
  cartCenter.addEventListener("click", function (e) {
    if (e.target.matches(".cart-center-close i")) {
      //xoas
      let id = e.target.parentElement.dataset.id;
      let url = e.target.parentElement.dataset.url;
      let path_img = e.target.parentElement.dataset.pathimg;
      console.log(path_img);
      console.log(url);
      if (id > 0) {
        $.ajax({
          type: "POST",
          url: url + "/removeItem",
          data: { id },
          dataType: "text",
          success: function (data) {
            let response = JSON.parse(data);
            console.log(response);
            cartCount.textContent = response.length;
            cartCenter.innerHTML = "";
            let sum = 0;
            response.forEach((item) => {
              sum += +item.total;
              renderItemCart(item, path_img, url);
            });
            sumMoney.textContent = formatter.format(sum);
          },
          error: function (e) {
            console.log(e);
          },
        });
      }
      toastr.success("Delete item cart success!");
    }
  });
});
