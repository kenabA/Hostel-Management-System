<?php

session_start();
include '../../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $phoneNumber = $_POST['phoneNumber'];
    $dob = $_POST['dob'];
    $guardianName = $_POST['guardianName'];
    $guardianPhoneNumber = $_POST['guardianPhoneNumber'];
    $guardianPassport = $_POST['guardianPassport'];
    $guardianType = $_POST['userType'];
    $foodCategory = $_POST['foodCategory'];
    $status = "Pending";

    $checkSQL = "SELECT * FROM users WHERE email='$email'";
  
    $checkQuery = mysqli_query($conn, $checkSQL);
    
    $result = mysqli_fetch_assoc($checkQuery);

    if($password != $confirmPassword){
        header("Location: ./client.php?add=unmatched");
        exit;
    }
  
  if($result) {
    header("Location: ./client.php?add=duplicate");
    exit;
  } else{

    $sql = "INSERT INTO users (name, email, password, phone_number, dob, guardian_name, guardian_phone_number, guardian_citizen, guardian_type, food_category, status)
            VALUES ('$name', '$email', '$password', '$phoneNumber', '$dob', '$guardianName', '$guardianPhoneNumber', '$guardianPassport', '$guardianType', '$foodCategory' ,'$status')";

    $result = mysqli_query($conn, $sql);

    if($result){

      header("Location: ./client.php?add=success");

    } else{

      header("Location: ./client.php?add=error");

    };
  }
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
        <h2 class="text-beta text-primary fw-semibold mb-14 text-center">Add Client</h2>
        <p class="font-16 text-gray-600 text-center">
          Include a new <strong>Hosteler!</strong>
        </p>
      </div>
    </header>
    <form class="d-flex login_content--form gap-48 flex-column" method="POST">
      <div class="d-flex gap-18 flex-column login_content--form-personal">
        <div class="login_content--input">
          <label for="validationDefault01" class="form-label">Name</label>
          <input value="<?php echo $name; ?>" type="text" class="form-control" id="validationDefault01" name="name"
            required />
        </div>
        <div class="login_content--input">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input value="<?php echo $email; ?>" type="email" required class="form-control" id="exampleInputEmail1"
            name="email" aria-describedby="emailHelp" />
          <div id="emailHelp" class="form-text">
            <p class="text-gray-500 m-0">
              We'll never share your email with anyone else.
            </p>
          </div>
        </div>
        <div class="login_content--input">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" required class="form-control" id="exampleInputPassword1" name="password" />
        </div>
        <div class="login_content--input">
          <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
          <input value="<?php echo $confirm_password; ?>" type="password" required class="form-control"
            id="exampleInputPassword2" name="confirm_password" />
        </div>
        <div class="login_content--input">
          <label for="phoneNumber" class="form-label">Phone Number</label>
          <input value="<?php echo $phoneNumber; ?>" pattern="9\d{9}" type="text" required class="form-control"
            id="phoneNumber" name="phoneNumber" title="Please enter a 10-digit number starting with 9" />
        </div>
        <div class="login_content--input">
          <label for="form-select-fc" class="mb-8">Select Food Category</label>
          <select class="form-select" id="form-select-fc" name="foodCategory" aria-label="Default select example">
            <option selected value="Non - Veg">Non - Veg</option>
            <option value="Veg">Veg</option>
          </select>
        </div>
        <div class="login_content--input">
          <label for="dob" class="form-label">Date of Birth</label>
          <input value="<?php echo $dob; ?>" type="date" required class="form-control" id="dob" name="dob"
            title="Please fill your date of birth." />
        </div>
      </div>
      <div class="login_content--form-guardian mb-24">
        <h3 class="text-gamma mb-32 text-black">Guardian Information</h3>
        <div class="d-flex gap-18 flex-column login_content--form-guardian">
          <div class="login_content--input">
            <label for="validationDefault03" class="form-label">Guardian Name</label>
            <input value="<?php echo $guardianName; ?>" type="text" class="form-control" id="validationDefault03"
              name="guardianName" required />
          </div>
          <div class="login_content--input">
            <label for="phoneNumber1" class="form-label">Guardian Phone Number</label>
            <input value="<?php echo $guardianPhoneNumber; ?>" pattern="9\d{9}" type="text" required
              class="form-control" id="phoneNumber1" name="guardianPhoneNumber"
              title="Please enter a 10-digit number starting with 9" />
          </div>
          <div class="login_content--input">
            <label for="passport" class="form-label">Guardian Citizen Number</label>
            <input value="<?php echo $guardianPassport; ?>" type="number" required class="form-control" id="passport"
              name="guardianPassport" title="Please enter a 10-digit number starting with 9" />
          </div>
          <div class="login_content--input">
            <label for="form-select-1" class="mb-8">Select Guardian Type</label>
            <select class="form-select text-secondary" id="form-select-1" name="userType"
              aria-label="Default select example">
              <option selected>Parent</option>
              <option value="1">Sibling</option>
              <option value="2">Relative</option>
              <option value="3">Other</option>
            </select>
          </div>
        </div>
      </div>
      <div class="login_content--footer">
        <div class="login_content-btnBox d-flex gap-24">
          <a role="button" type="submit" href="./client.php"
            class="btn-3 w-100 text-decoration-none text-center">Back</a>
          <button type="submit" class="btn-1 w-100">Add Client</button>
        </div>
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