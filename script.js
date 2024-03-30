var knowMoreBtn = document.getElementById("know-more");
var sectionHeader = document.getElementById("hero");
var reserveAppBtn = document.querySelector(".reserve-appointment-btn");
var heroContent = document.querySelector(".hero_content--texts");

const isInViewport = (element) => {
  var bounding = element.getBoundingClientRect();
  return (
    bounding.top >= 0 &&
    bounding.left >= 0 &&
    bounding.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    bounding.right <=
      (window.innerWidth || document.documentElement.clientWidth)
  );
};

knowMoreBtn.addEventListener("click", () => {
  sectionHeader.scrollIntoView({
    behavior: "smooth",
  });

  setTimeout(() => {
    outlineBtn();
  }, 800);
});

const outlineBtn = () => {
  reserveAppBtn.style.backgroundColor = "#D8315B";
  setTimeout(() => {
    reserveAppBtn.style.backgroundColor = "#ef9b00";
  }, 1000);
};
