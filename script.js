var knowMoreBtn = document.getElementById("know-more");
var getStartedBtn = document.getElementById("get-started");
var contactBtn = document.getElementById("contact-us-btn");
var sectionHeader = document.getElementById("hero");
var sectionFacilities = document.getElementById("facilities");
var sectionFooter = document.getElementById("footer");
var reserveAppBtn = document.querySelector(".reserve-appointment-btn");
var heroContent = document.querySelector(".hero_content--texts");
var fNum = document.querySelector(".footer-num");
var fMail = document.querySelector(".footer-mail");

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

getStartedBtn.addEventListener("click", () => {
  sectionFacilities.scrollIntoView({
    behavior: "smooth",
  });
});

contactBtn.addEventListener("click", () => {
  sectionFooter.scrollIntoView({
    behavior: "smooth",
  });
  setTimeout(() => {
    outlineTxt();
  }, 600);
});

const outlineBtn = () => {
  reserveAppBtn.style.backgroundColor = "#D8315B";
  setTimeout(() => {
    reserveAppBtn.style.backgroundColor = "#ef9b00";
  }, 1000);
};

const outlineTxt = () => {
  fNum.style.cssText = "color: #D8315B !important;";
  fMail.style.cssText = "color: #D8315B !important;";

  setTimeout(() => {
    fNum.style.color = "#6c757d";
    fMail.style.color = "#6c757d";
  }, 1000);
};

function openNewPage() {
  window.open("signup.html", "_blank");
}
