<?php
include_once 'connect.php';

$del = "DELETE FROM books WHERE ID= $_GET[id];";
$result = mysqli_query($db, $del);

	 if (mysqli_query($db, $del)){
     header("refresh:1; url=retrieve.php");
   }
   else {
     echo "Unable to process your request";
   }
?>
