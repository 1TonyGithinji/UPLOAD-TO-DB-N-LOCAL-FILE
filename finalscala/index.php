<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{

		width: 400px;
		height: 300px;
		}
	</style>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Select Image to Upload:<br>
	<input type="file" name="fileToUpload" id="fileToUpload"><br>
	<input type="text" name="names" placeholder="Names"><br>
	<input type="submit" name="submit" value="UploadImage"><br>
</form>
<?php 
$scala=mysqli_connect('localhost','root','','finalescala');
$result=mysqli_query($scala,"SELECT * FROM scala");
 while ($row=mysqli_fetch_assoc($result)) {
 	# code...
 	extract($row);
 	echo "$names";
 	echo "<img src='$path'>";
 }
 ?>
</body>
</html>