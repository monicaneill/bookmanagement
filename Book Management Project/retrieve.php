<?php
  include_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body bgcolor="#FFCCCC">
<center><h1>Displaying Books<h1></center>
<table border="10" align="center"> <!-- Outer border table -->
<tr>
<td>
<center><h2>Book Management</h2></center>
<center>Please see below a list of books we currently have registered</center>
<p>

<?php
  $sql = "SELECT * FROM books;";
  $result = mysqli_query($db, $sql);
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
    <th> Edit </th>
    <th> Delete </th>
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
<td><a href="edit.php?id=<?php echo $row['ID']?>">Edit</a></td>
<td><input type="button" onClick="Delete(<?php echo $row['ID']; ?>)" name = "Delete" value = "Delete" class = "button"></td>
<script language="javascript">
function Delete(delid)
{
  if(confirm("Are you sure you want to delete this row?")){
    window.location.href='delete.php?del_id=' +delid+'';
    return true;
  }
}
</script>
</tr>
<?php
}
}
else
echo "<center>Unable to process your request</center>" ;
?>
</table></table>
<p>
  <center><a href="EnterBook.php"> Click Here to return to main page </a> </center>
<p>
<footer>
  <hr>
    <center><code>Copyright (c) 2020 Monica Neill</code></center>
    </footer>
</body>
</html>
