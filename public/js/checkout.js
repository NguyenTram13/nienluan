window.addEventListener("load", function () {
  $.validator.setDefaults({
    submitHandler: function (e) {
      alert("submitted!");
    },
  });
  let fromPay = document.querySelector("#signupForm");
  fromPay.addEventListener("submit", function (e) {
    e.preventDefault();
    console.log(this.querySelector("#ttt").value);
  });
  $(document).ready(function () {
    $("#signupForm").validate({
      rules: {
        // firstname: "required",
        lastname: "required",
        address: "required",
        phone: {
          required: "true",
          minlength: 5,
        },
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        // firstname: "Bạn chưa nhập vào họ của bạn",s
        lastname: "Bạn chưa nhập vào tên của bạn",
        addresss: "Bạn chưa nhập vào địa chỉ của bạn",

        phone: {
          required: "Bạn chưa nhập vào số điện thoại đăng nhập",
          minlength: "Số điện thoại phải 10 ký tự",
        },

        email: "Email không hợp lệ",
      },
      errorElement: "div",
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        if (element.prop("type") === "checkbox") {
          error.insertAfter(element.siblings("label"));
        } else {
          error.insertAfter(element);
        }
      },
    });
  });
});
