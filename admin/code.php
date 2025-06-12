<?php 

require '../config/function.php';

if (isset($_POST['saveUser'])) {

  $name = validate($_POST['name']);
  $username = validate($_POST['username']);
  $email = validate($_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);



  if ($name != '' || $username != '' || $email != '' || $password != '') {
    $query = "INSERT INTO user_info(name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    
    $adminQuery = "INSERT INTO user_info(name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";

    $result = mysqli_query($conn_central, $query);
    $adminResult = mysqli_query($conn_admin, $adminQuery);


    if ($result && $adminResult) {
      redirect('users.php', 'Added Succesfully.');
    } else {
      redirect('users.php', 'something went wrong please try again');
    }

  } else {
    redirect('users-create.php', 'Please fill all the input fields');
  }


}

// if (isset($_POST['saveUser'])) {

//   $name = validate($_POST['name']);
//   $username = validate($_POST['username']);
//   $email = validate($_POST['email']);
//   $pass = validate($_POST['password']);

//   if ($name != '' && $username != '' && $email != '' && $pass != '') {
//     $password = password_hash($pass, PASSWORD_DEFAULT);

//     $checkQuery = "SELECT * FROM user_info WHERE username = ? OR email = ?";
//     $stmt = mysqli_prepare($conn_central, $checkQuery);
//     mysqli_stmt_bind_param($stmt, "ss", $username, $email);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if (mysqli_num_rows($result) > 0) {
//       redirect('users-create.php', 'Username or Email already exists');
//     } else {
//       $insertQuery = "INSERT INTO user_info(name, username, email, password) VALUES (?, ?, ?, ?)";
//       $stmt1 = mysqli_prepare($conn_central, $insertQuery);
//       mysqli_stmt_bind_param($stmt1, "ssss", $name, $username, $email, $password);
//       $centralResult = mysqli_stmt_execute($stmt1);

//       $stmt2 = mysqli_prepare($conn_admin, $insertQuery);
//       mysqli_stmt_bind_param($stmt2, "ssss", $name, $username, $email, $password);
//       $adminResult = mysqli_stmt_execute($stmt2);

//       if ($centralResult && $adminResult) {
//         redirect('users.php', 'Added Successfully.');
//       } else {
//         redirect('users.php', 'Something went wrong. Please try again.');
//       }
//     }

//   } else {
//     redirect('users-create.php', 'Please fill all the input fields');
//   }
// }


if(isset($_POST['updateUser'])) {
  $name = validate($_POST['name']);
  $username = validate($_POST['username']);
  $email = validate($_POST['email']);
  $pass = validate($_POST['password']);
  $password = password_hash($pass, PASSWORD_DEFAULT);
  $user_id = validate($_POST['user_id']);


  if ($name != '' || $username != '' || $email != '' || $password != '') {
    $query = "UPDATE user_info SET name = '$name', username = '$username', email = '$email', password ='$password' WHERE user_id ='$user_id'";

    $queryAdmin = "UPDATE user_info SET name = '$name', username = '$username', email = '$email', password ='$password' WHERE user_id ='$user_id'";
    
    $result = mysqli_query($conn_central, $query);
    $resultAdmin = mysqli_query($conn_admin, $queryAdmin);

    if ($result && $resultAdmin) {
      redirect('users.php', 'Updated Succesfully.');
    } else {
      redirect('users.php', 'someting went wrong please try again');
    }

  } else {
    redirect('users-create.php', 'Please fill all the input fields');
  }

}

?>