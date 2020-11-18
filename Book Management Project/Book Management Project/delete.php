<?php
include_once 'connect.php';

$del = "DELETE FROM books WHERE ID= $_GET[del_id];";
$result = mysqli_query($db, $del);

	 if (mysqli_query($db, $del)){
     header("Location: retrieve.php");
   }
   else {
     echo "Unable to process your request";
   }
?>
