<?php

session_start();
include '../../db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $food_name = $_POST['food_name'];
    $food_type = $_POST['food_type'];
    $food_category = $_POST['food_category'];
    $food_cuisine = $_POST['food_cuisine'];

    $checkSQL = "SELECT * FROM catering WHERE food_name='$food_name'";
  
    $checkQuery = mysqli_query($conn, $checkSQL);
    
    $result = mysqli_fetch_assoc($checkQuery);
  
    if($result) {
      header("Location: ./catering.php?add=duplicate");
      exit;
    } 
    
    else
    
    {

    $sql = "INSERT INTO catering (food_name, food_type, food_category, food_cuisine)
            VALUES ('$food_name', '$food_type', '$food_category', '$food_cuisine')";

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
        <h2 class="text-beta text-primary fw-semibold mb-14 text-center">Add Food</h2>
        <p class="font-16 text-gray-600 text-center">
          Include new foods into your menu!
        </p>
      </div>
    </header>
    <form class="d-flex login_content--form gap-48 flex-column" method="POST">
      <div class="login_content--input">
        <label for="validationDefault01" class="form-label">Food Name</label>
        <input value="<?php echo $food_name; ?>" type="text" class="form-control" id="validationDefault01"
          name="food_name" required />
      </div>

      <div class="login_content--input">
        <label for="validationDefault02" class="form-label">Food Type</label>
        <input value="<?php echo $food_type; ?>" type="text" class="form-control" id="validationDefault02"
          name="food_type" required />
      </div>

      <div class="login_content--input mb-24">
        <label for="form-select" class="mb-8">Select Food Category</label>
        <select class="form-select" id="form-select" name="food_category" aria-label="Default select example">
          <option value="Non-vegetarian / Vegetarian">Non-vegetarian / Vegetarian
          </option>
          <option value="Non-vegetarian">
            Non-vegetarian</option>
          <option value="Vegetarian">Vegetarian</option>
        </select>
      </div>

      <div class="login_content--input">
        <label for="validationDefault03" class="form-label">Food Cuisine</label>
        <input value="<?php echo $food_cuisine;?>" type="text" class="form-control" id="validationDefault03"
          name="food_cuisine" required />
      </div>

      <div class="login_content--footer">
        <div class="login_content-btnBox d-flex gap-24">
          <a role="button" type="submit" href="./catering.php"
            class="btn-3 w-100 text-decoration-none text-center">Back</a>
          <button type="submit" class="btn-1 w-100">Add Food</button>
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