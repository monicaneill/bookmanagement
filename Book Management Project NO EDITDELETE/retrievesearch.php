<!DOCTYPE html>
<html>
<body bgcolor="#FFCCCC">
<center><h1>Displaying Books<h1></center>
<table border="10" align="center">
<tr>
<td>
<center><h2>Book Management</h2></center>
<center>Here are your search results: </center>
<p>
<?php
include("connect.php");

$search = $_REQUEST["Search"];

$sql = "SELECT * FROM books WHERE title like '%$search%' OR replace(author,'.', '') like '%$search%' OR genre like '%$search%'";
$result = mysqli_query($db,$sql);
$resultcheck = mysqli_num_rows($result);


if ($resultcheck > 0) {
  ?>
  <table border="2" align="center" cellpadding="5" cellspacing="5">

  <tr>
  <th> ID </th>
  <th> Title </th>
  <th> Author </th>
  <th> Genre </th>
  <th> Date Added </th>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result))
  {
  ?>
<tr>
<td><?php echo $row["ID"];?> </td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["genre"];?> </td>
<td><?php echo $row["Date Added"];?> </td>
</tr>
<?php
}
}
else
echo "<center>Sorry, there are no results to display for that request</center>" ;
?>
<p>
</table></table>
<p>
  <center><a href="EnterBook.php"> Click Here to return to main page </a> </center>
  <p><center><a href="search.php"> Click Here to try searching for another book </a> </center>
<p>
<footer>
  <hr>
    <center><code>Copyright (c) 2020 Monica Neill</code></center>
    </footer>
</body>
</html>
