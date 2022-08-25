window.addEventListener("load", function () {
  const formProduct = document.querySelector(".form-product");
  const inputSearchProduct = document.querySelector(".product-input");
  const selectProduct = document.querySelector(".select-product");
  const tableProduct = this.document.querySelector(".table-products");
  let loader = document.querySelectorAll(".loader");

  let keyword = JSON.parse(localStorage.getItem("kyw")) || "";
  inputSearchProduct.value = keyword;
  selectProduct.addEventListener("change", function (e) {
    setTimeout(() => {
      localStorage.setItem("idSelect", JSON.stringify(e.target.value));
      loader.forEach((item) => {
        console.log(item);
        tableProduct.style.display = "none";

        item.style.display = "block";
      });
    }, 500);
    setTimeout(() => {
      formProduct.submit();
    }, 1500);
  });
  inputSearchProduct.addEventListener("keyup", function (e) {
    setTimeout(() => {
      localStorage.setItem("kyw", JSON.stringify(e.target.value));
      loader.forEach((item) => {
        console.log(item);
        tableProduct.style.display = "none";

        item.style.display = "block";
      });
    }, 500);
    setTimeout(() => {
      formProduct.submit();
    }, 1500);
  });
  formProduct.addEventListener("submit", function (e) {
    e.preventDefault();
    loader.forEach((item) => {
      console.log(item);
      item.style.display = "block";
    });
    setTimeout(() => {
      loader.forEach((item) => {
        console.log(item);
        tableProduct.style.display = "none";

        item.style.display = "none";
      });
    }, 1000);
  });
});
