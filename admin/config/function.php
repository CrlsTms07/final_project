<?php

use Dom\Mysql;

session_start();

require 'connection.php';

function validate($input) {
  GLOBAL $conn_central;
  $validatedData = mysqli_real_escape_string($conn_central, $input);
  return trim($validatedData);
}

function redirect($url, $status) {
    $_SESSION['status'] = $status;

    header('Location: '.$url);
    exit();
}

function alertMessage() {
  if (isset($_SESSION['status'])) {
    echo '<div class="alert alert-success"> 
      <h6>' . $_SESSION['status']. '</h6>
    </div>';

    unset($_SESSION['status']);
  }
}

function getAllData($tableName) {
    GLOBAL $conn_central;  

    $table = validate($tableName);
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn_central,$query);

    return $result;
}

function getBookingInfo($tableName) {
  GLOBAL $conn_central;

  $table = validate($tableName);
  $query = "SELECT * FROM $table";
  $result = mysqli_query($conn_central,$query);

  return $result;
}

function getAuditLog($tableName) {
  GLOBAL $conn_admin;

  $table = validate($tableName);
  $query = "SELECT * FROM $table";
  $result = mysqli_query($conn_admin, $query);

  return $result;
}

function checkId($paramType) {
  if (isset($_GET[$paramType])) {

    if($_GET[$paramType] != null) {
      return $_GET[$paramType];
    } else {
      return 'no id found. ';
    } 


  } else {
    return 'no ID given.';
  }
}

function getById ($tableName, $id) {
  global $conn_central;

  $table = validate($tableName);
  $id = validate($id);

  $query = "SELECT * FROM $table WHERE user_id='$id' LIMIT 1 ";
  $result = mysqli_query($conn_central, $query);

  if ($result) {

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       $response = [
        'status' => 200,
        'data' => $row
      ];
      return $response;
    } else {
       $response = [
        'status' => 404,
        'message' => 'No data found'
      ];
      return $response;
    }

  } else {
    $response = [
      'status' => 500,
      'message' => 'something went wrong'
    ];
    return $response;
  }
}

function deleteQuery($tableName, $id) {
  global $conn_central;
  global $conn_admin;
  $table = validate($tableName);
  $user_id = validate($id);

  $query = "DELETE FROM $table WHERE user_id='$user_id' LIMIT 1" ;

  $queryAdmin = "DELETE FROM $table WHERE user_id='$user_id' LIMIT 1" ;

  $result = mysqli_query($conn_central, $query);
  $resultAdmin = mysqli_query($conn_admin, $queryAdmin);

  return $result && $resultAdmin;
}


function callUser($input) {
  GLOBAL $conn_admin;

  $sql = "SELECT * FROM getuserinfo";
  $result = mysqli_query($conn_admin, $sql);

  
  return $result;
}

function countUsers() {
  GLOBAL $conn_admin;

  $sql = "SELECT COUNT(*) as total FROM getuserinfo";
  $result = mysqli_query($conn_admin, $sql);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
  }

  return 0;
}

function countBookings() {
  GLOBAL $conn_admin;

  $sql = "SELECT COUNT(*) as total FROM booking_info";
  $result = mysqli_query($conn_admin, $sql);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
  }

  return 0;
}
?>