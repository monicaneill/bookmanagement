<?php
//assigning variables
$user ='root';
$pass ='';
$db = 'bookmanagementdatabase';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to Connect");

?>
