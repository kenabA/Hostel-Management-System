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

document.addEventListener('DOMContentLoaded', function () {
  // Get the login form element
  const loginForm = document.getElementById('login-form');

  // Add event listener for form submission
  loginForm.addEventListener('submit', function (event) {
      // Prevent the default form submission behavior
      event.preventDefault();

      // Get form data
      const formData = new FormData(loginForm);

      // Convert form data to JSON
      const jsonData = {};
      formData.forEach((value, key) => {
          jsonData[key] = value;
      });

      // Perform AJAX request to backend.php
      fetch('login.php', {
          method: 'POST',
          body: JSON.stringify(jsonData),
          headers: {
              'Content-Type': 'application/json'
          }
      })
      .then(response => {
          // Handle response
          if (response.ok) {
              return response.json();
          } else {
              throw new Error('Network response was not ok.');
          }
      })
      .then(data => {
          // Handle successful response
          console.log(data);
          // Redirect to another page or perform other actions as needed
      })
      .catch(error => {
          // Handle error
          console.error('There was a problem with the fetch operation:', error);
      });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("signup-form");

  form.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission behavior

      // Perform client-side validation
      if (validateForm()) {
          // If the form is valid, submit it
          submitForm();
      }
  });

  function validateForm() {
      // Example validation: ensure all required fields are filled
      const requiredFields = form.querySelectorAll("[required]");
      let isValid = true;

      requiredFields.forEach(function (field) {
          if (!field.value.trim()) {
              // If a required field is empty, mark it as invalid
              isValid = false;
              field.classList.add("is-invalid");
          } else {
              // If a required field is filled, remove any existing validation classes
              field.classList.remove("is-invalid");
          }
      });

      return isValid;
  }

  function submitForm() {
      // If the form is valid, you can submit it via AJAX or any other method
      const formData = new FormData(form);

      fetch(form.action, {
          method: form.method,
          body: formData
      })
      .then(response => {
          if (response.ok) {
              // Handle successful form submission
              console.log("Form submitted successfully!");
              return response.text(); // Return the response body as text
          } else {
              // Handle errors
              console.error("Error submitting form:", response.statusText);
              throw new Error("Form submission failed");
          }
      })
      .then(data => {
          // Display success message
          console.log(data); // Log the response text (you can change this to display it in HTML)
      })
      .catch(error => {
          // Handle network errors or other errors
          console.error("Error:", error.message);
      });
  }
});

