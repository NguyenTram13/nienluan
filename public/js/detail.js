window.addEventListener("load", function () {
  const tabs = document.querySelectorAll(".hover-border");
  const detailTab = document.querySelectorAll(".detail-tab");
  const changeTab = function (e) {
    tabs.forEach((tab) => tab.classList.remove("active"));
    detailTab.forEach((tabD) => tabD.classList.remove("active"));

    this.classList.add("active");
    detailTab.forEach((tabD) => {
      if (tabD.dataset.tab === this.dataset.tab) {
        tabD.classList.add("active");
      }
    });
  };
  tabs.forEach((tab) => tab.addEventListener("click", changeTab));
});
