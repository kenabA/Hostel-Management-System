const reloadPage = () => {
  window.location.href = "admin-dashboard.php";
};

function turnOn() {
  var confirmation = confirm("Do you want to turn on your active status?");
  if (confirmation) {
    window.location.href = "toggleactivestatus.php?id=$status&action=on";
  }
}
