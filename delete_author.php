<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', '37lesson');
	$q = mysqli_query($con, "DELETE books, authors FROM books INNER JOIN authors ON books.author_id = authors.id WHERE author_id = '{$_GET['id']}'");
	header("Location: index.php");
 ?>