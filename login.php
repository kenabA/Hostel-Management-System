<?php

include 'db_connection.php';
session_start();

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_type'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    // FOR STUDENT
    if($user_type == 'Student'){

    $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    $user_data = mysqli_fetch_assoc($result);

    if(is_array($user_data) && !empty($user_data)){
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['name'] = $user_data['name'];

        header("Location: ./html/student-panel/student-dashboard.php?login=true");
        exit();
    } else {
        header("Location: ./index.php?login=false");
    }
} 
// FOR ADMIN
else {
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    $user_data = mysqli_fetch_assoc($result);

    if(is_array($user_data) && !empty($user_data)){
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['name'] = $user_data['name'];
        
        header("Location: ./html/admin-panel/admin-dashboard.php?login=true");

        exit();
    } else {
        header("Location: ./index.php?login=false");
    }

}
}





// "
//         <div class=' p-3 position-fixed'  style='z-index: 11; bottom: 5%; right: 5%; '>
//         <div id='liveToast' class='toast show hide' role='alert' aria-live='assertive' aria-atomic='true'>
//           <div class='toast-header '>
//           <i class='fa-solid fa-check me-12 text-white p-8 rounded-5 bg-success'></i>
//             <strong class='me-auto'>Login</strong>
//             <small>Just Now</small>
//             <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
//           </div>
//           <div class='toast-body'>
//               Logged in Successfully!
//           </div>
//         </div>
//       </div>
//         "