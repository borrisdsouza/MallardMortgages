<?php
//if "email" variable is filled out, send email


  //Email information
  $admin_email = "dsouzaborris@gmail.com";
  $subject = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];

  //send email
  @mail($admin_email, "$subject", $phone, "From:" . $email);

  //Email response
  //if "email" variable is not filled out, display the form

?>
