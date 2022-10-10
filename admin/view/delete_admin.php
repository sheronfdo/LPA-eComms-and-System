<?php
  require_once('../service/userservice.php');
  require_once ('../database/database.php');

  $admin_Id = $_GET['userId'];
  $userService = new UserService();
  $userService->setId($admin_Id);
  $userService->deleteUser();
 echo '<script> alert("Admin Deleted Successfull"); </script>';
echo '<script>  window.location.href="manage_admin.php";</script>';

?>