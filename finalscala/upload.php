<?php 
	$scala=mysqli_connect('localhost','root','','finalescala');
	if (isset($_POST['names'])) {
		$target_dir="uploads/";
		$num=rand(2000,100000);
		//uploading the uploaded file to the folder called uploads
		$target_file=$target_dir . $num . basename($_FILES["fileToUpload"]["name"]);
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			extract($_POST);
			$sql="INSERT INTO  `scala`(`id`, `names`, `path`) VALUES(null,'$names','$target_file')";
			mysqli_query($scala,$sql);
			echo "The file has been uploaded".basename($_FILES["fileToUpload"]["name"]);
			# code...
		} else {
			# code...
			echo "Error uploading file";
		}
		
	}
 ?>