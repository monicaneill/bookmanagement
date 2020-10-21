<!DOCTYPE HTML>
<html>
<body bgcolor="#FFCCCC">
<center><h1>Adding a Book<h1></center>
<table border="10" align="center">
<tr>
<td>
<center><h2>Book Management</h2></center>
<center>Enter the Data below to insert a new book</center>
<p>

<form action="process.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Book Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td> Author Name :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Genre :</td>
<td> <input type="text" name="genre" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="Submit" value="Submit" name="Submit">
</td>
</tr>
</tr></td></table>
</table>
</form>
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
