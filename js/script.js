var knowMoreBtn = document.getElementById("know-more");
var getStartedBtn = document.getElementById("get-started");
var contactBtn = document.getElementById("contact-us-btn");
var sectionHeader = document.getElementById("hero");
var sectionFacilities = document.getElementById("facilities");
var sectionContact = document.getElementById("contactus");

var sectionFooter = document.getElementById("footer");
var modal1 = document.getElementById("staticBackdrop");
var modal2 = document.getElementById("staticBackdrop1");
var reserveAppBtn = document.querySelector(".reserve-appointment-btn");
var sectionMessage = document.getElementById("message");
var heroContent = document.querySelector(".hero_content--texts");
var fNum = document.querySelector(".footer-num");
var fMail = document.querySelector(".footer-mail");
var createAccountBtn = document.querySelector(".create-account");
var loginBtn = document.querySelector(".login-account");

createAccountBtn.addEventListener("click", function () {
  var newBsModal = new bootstrap.Modal(modal2);
  newBsModal.show();
});

const showModal1 = () => {
  var newBsModal = new bootstrap.Modal(modal1);
  newBsModal.show();
};

const showModal2 = () => {
  var newBsModal = new bootstrap.Modal(modal2);
  newBsModal.show();
};

loginBtn.addEventListener("click", showModal1);

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

reserveAppBtn.addEventListener("click", () => {
  sectionMessage.scrollIntoView({
    behavior: "smooth",
  });
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

const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
