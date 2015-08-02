<?php
include 'models/user.php';

// try setting User

$adminuser = new User();

// this should be fetched from the DB.
$adminuser->SetID(5);
$adminuser->setusername("admin");
$adminuser->setpassword("admin");
$adminuser->setstatus(1);
$adminuser->settypeid(1);

echo 'User ID: '. $adminuser->GetID() . "<br/>";
echo 'Username: '. $adminuser->GetUsername() . "<br/>";
echo 'Password: '. $adminuser->GetPassword() . "<br/>";
echo 'Status: '. $adminuser->GetStatus() . "<br/>";
echo 'Type ID: '. $adminuser->GetTypeID() . "<br/>";

?>