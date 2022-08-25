window.addEventListener("load", function () {
  const formProduct = document.querySelector(".form-product");
  const inputSearchProduct = document.querySelector(".product-input");
  const selectProduct = document.querySelector(".select-product");
  const tableProduct = this.document.querySelector(".table-products");
  let loader = document.querySelectorAll(".loader");

  let keyword = JSON.parse(localStorage.getItem("kyw")) || "";
  inputSearchProduct.value = keyword;

  function setLoading(selector) {
    setTimeout(() => {
      loader.forEach((item) => {
        console.log(item);
        selector.style.visibility = "hidden";

        item.style.display = "block";
      });
    }, 500);
  }

  //loading product page begin
  selectProduct.addEventListener("change", function (e) {
    localStorage.setItem("idSelect", JSON.stringify(e.target.value));
    setLoading(tableProduct);
    setTimeout(() => {
      formProduct.submit();
    }, 1500);
  });

  inputSearchProduct.addEventListener("keyup", function (e) {
    localStorage.setItem("kyw", JSON.stringify(e.target.value));
    setLoading(tableProduct);
    setTimeout(() => {
      formProduct.submit();
    }, 1500);
  });

  formProduct.addEventListener("submit", function (e) {
    e.preventDefault();
    loader.forEach((item) => {
      console.log(item);
      tableProduct.style.visibility = "hidden";

      item.style.display = "block";
    });
    setTimeout(() => {
      loader.forEach((item) => {
        console.log(item);
        tableProduct.style.visibility = "visible";

        item.style.display = "none";
      });
    }, 1000);
  });
  //loading product page end
});
