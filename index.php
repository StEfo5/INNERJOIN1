<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', '37lesson');
		$q = mysqli_query($con, "SELECT * FROM books INNER JOIN authors ON books.author_id = authors.id");
		$num = mysqli_num_rows($q);
		for ($i=0; $i < $num; $i++) { 
			# code...
			$str = $q -> fetch_assoc();
	 ?>
	 <h5 class="mt-5">
	 	<?php echo $str['author']; ?>
	 </h5>
	 <p>
	 	<?php echo $str['book']; ?>
	 </p>
	 <form action="delete_author.php" method="GET">
	 	<input class="d-none" type="" name="id" value="<?php echo $str['id'] ?>">
	 	<button class="btn btn-danger">
	 		Удалить
	 	</button>
	 </form>
	 <?php 
	 	}
	  ?>
</body>
</html>