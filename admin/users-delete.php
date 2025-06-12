<?php 
require 'config/function.php';

$result = checkId('user_id'); 

if(is_numeric($result)) {

  $user_id = validate($result);

  $user = getById('user_info', $user_id );

  if($user['status'] == 200) {

    $userDelete = deleteQuery('user_info', $user_id);
    if($userDelete) {
      redirect('users.php', 'Deleted Succesfully');
    } else {
  redirect('users.php', 'something went wrong please try again');    
    }

  } else {
  redirect('users.php', $user['message']);  
  }

} else {
  redirect('users.php', $result);
}

?>