<!DOCTYPE HTML>
<html>
<body bgcolor="#FFCCCC">
<center><h2>Book Management</h2></center>
<br>

<?php
include_once 'connect.php';
if(isset($_POST['Submit']))
{
	 $book_title = $_POST['title'];
	 $author_name = $_POST['author'];
	 $genre = $_POST['genre'];
	 $sql = "INSERT INTO books (title,author,genre)
	 VALUES ('$book_title','$author_name','$genre')";

	 if (mysqli_query($db, $sql)) { ?>
		<center><h3> Book information inserted successfully </h3>
			<a href="retrieve.php"> To view results click here </a> </center>
	<?php } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>

</body>
</html>
