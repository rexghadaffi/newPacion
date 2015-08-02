<?php
include 'models/user-type.php';

// try setting Type

$admintype = new UserType();

 // this should be fetched from the DB.
 $admintype->SetID(1);
 $admintype->SetTypeName("client");


 echo 'Type ID: '. $admintype->GetID() . "<br/>";
 echo 'Type Name: '. $admintype->GetTypeName() . "<br/>";

?>