<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include '../../db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  if ( !isset($_GET["id"])) {
    header("location: ./rooms.php");
    exit;
  }
  
  $id = $_GET["id"];
  
  $sql = "SELECT * FROM rooms WHERE room_id='$id'";
  
  $query = mysqli_query($conn, $sql);
  
  $result = mysqli_fetch_assoc($query);
  
  if(!$result) {
    header("location: ./client.php");
    exit;
  }

  $room_id = $result['room_id'];
  $room_img = $result['room_img'];
  $room_type = $result['room_type'];
  $bed_type = $result['bed_type'];
  $toilet = $result['toilet'];
  $air_conditioning = $result['air_conditioning'];
  $internet = $result['internet'];


} else {
  
  $room_img = $_POST['room_img'];
  $room_type = $_POST['room_type'];
  $bed_type = $_POST['bed_type'];
  $toilet = $_POST['toilet'];
  $air_conditioning = $_POST['air_conditioning'];
  $internet = $_POST['internet'];

  $id = $_GET["id"];
  $sql = "UPDATE rooms SET room_type = '$room_type', room_img = '$room_img', bed_type = '$bed_type', toilet = '$toilet', air_conditioning = '$air_conditioning', internet = '$internet'  WHERE room_id = '$id';";

  $result = mysqli_query($conn, $sql);

  if($result){

    header("Location: ./rooms.php?edit=success");

  } else{

    header("Location: ./rooms.php?edit=error");

  };
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hamrostel</title>
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <div class="login_content--box pt-48 pb-80 px-80 pb-48 bg-white">
    <header class="login_content--header mb-48">
      <div class="login_content--header-main">
        <h2 class="text-beta text-primary fw-semibold mb-14 text-center">Edit Room</h2>
        <p class="font-16 text-gray-600 text-center">
          Include a new Room type into your hostel!
        </p>
      </div>
    </header>
    <form class="d-flex login_content--form gap-48 flex-column" method="POST">
      <div class="login_content--input">
        <label for="validationDefault01" class="form-label">Room Id</label>
        <input disabled type="number" placeholder="<?php echo $room_id; ?>" class="form-control"
          id="validationDefault01" name="room_id" required />
      </div>

      <div class="login_content--input">
        <label for="validationDefault02" class="form-label">Room Image</label>
        <input value="<?php echo $room_img; ?>" type="text" class="form-control" id="validationDefault02"
          name="room_img" required />
      </div>

      <div class="login_content--input">
        <label for="validationDefault07" class="form-label">Room Type</label>
        <input value="<?php echo $room_type;?>" type="text" class="form-control" id="validationDefault07"
          name="room_type" required />
      </div>

      <div class="login_content--input">
        <label for="validationDefault04" class="form-label">Bed Type</label>
        <input value="<?php echo $bed_type;?>" type="text" class="form-control" id="validationDefault04" name="bed_type"
          required />
      </div>

      <div class="login_content--input">
        <label for="validationDefault03" class="form-label">Toilet</label>
        <input value="<?php echo $toilet;?>" min="0" max="2" type="number" class="form-control" id="validationDefault03"
          name="toilet" required />
      </div>

      <div class="login_content--input">
        <label for="validationDefault05" class="form-label">Internet</label>
        <input value="<?php echo $internet == ''? 'Wi-Fi' : '5G' ;?>" type="text" class="form-control"
          id="validationDefault05" name="internet" required />
      </div>

      <div class="login_content--input mb-24">
        <label for="form-select" class="mb-8">Air Conditioning</label>
        <select class="form-select" id="form-select" name="air_conditioning" aria-label="Default select example">
          <option value="Yes" <?php if ($air_conditioning == "Yes") echo "selected"; ?>>Yes
          </option>
          <option value="No" <?php if ($air_conditioning == "No") echo "selected"; ?>>No
          </option>
        </select>
      </div>

      <div class="login_content--footer">
        <div class="login_content-btnBox d-flex gap-24">
          <a role="button" type="submit" href="./rooms.php"
            class="btn-3 w-100 text-decoration-none text-center">Back</a>
          <button type="submit" class="btn-1 w-100">Save Changes</button>
        </div>

    </form>
  </div>

  <!-----=====-----===== Scripts =====-----=====----->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/4cbeaa27da.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>