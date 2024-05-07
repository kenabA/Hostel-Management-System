const reloadPage = () => {
  window.location.href = "student-dashboard.php";
};

function turnOn(id) {
  var confirmation = confirm("Do you want to turn on your active status?");
  if (confirmation) {
    window.location.href = `toggleactivestatus.php?id=${id}&action=on`;
  }
}

function turnOff(id) {
  var confirmation = confirm("Do you want to turn off your active status?");
  if (confirmation) {
    window.location.href = `toggleactivestatus.php?id=${id}&action=off`;
  }
}
