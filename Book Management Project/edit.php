<?php

include "connect.php";

$upd = "SELECT * FROM books WHERE ID= $_GET[id];";

$qry = mysqli_query($db, $upd);

$data = mysqli_fetch_array($qry);

if(isset($_POST['update']))
{
	 $book_title = mysqli_real_escape_string($db, $_POST['title']);
	 $author_name = mysqli_real_escape_string($db, $_POST['author']);
	 $genre = mysqli_real_escape_string($db, $_POST['genre']);

   $edit = mysqli_query($db,"UPDATE books SET title='$book_title', author='$author_name', genre='$genre' WHERE ID= $_GET[id]");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:retrieve.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>
<!DOCTYPE HTML>
<html>
<body bgcolor="#FFCCCC">
<center><h1>Editing Book Data<h1></center>
<table border="10" align="center">
<tr>
<td>
<center><h2>Book Management</h2></center>
<center>Update book information below</center>
<p>

<form method="POST">
  <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Enter Book Title" Required>
  <input type="text" name="author" value="<?php echo $data['author'] ?>" placeholder="Enter Author" Required>
	<input type="text" name="genre" value="<?php echo $data['genre'] ?>" placeholder="Enter Genre" Required>
  <input type="submit" name="update" value="Update">
</form>
<p>
</table>
<p>
<center><a href="retrieve.php"> To view books already in database click here </a> </center>
<p><center><a href="search.php"> To search for books, click here </a> </center>
<p>
<footer>
<hr>
	<center><code>Copyright (c) 2020 Monica Neill</code></center>
	</footer>
</body>
</html>
