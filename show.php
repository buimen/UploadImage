<?php
	require "connect.php";
	$site = "http://localhost/htmls/PHPcoban/uploadImage/";
	if (isset($_POST['upload'])) {
		$num = $_GET['nfile'];
		for ($i = 0; $i < $num; $i++) {
			$tmp_name = $_FILES["img"]['tmp_name'][$i];
			$url = "image/".$_FILES["img"]['name'][$i];
			move_uploaded_file($tmp_name, $url);
		  	$name = $_FILES["img"]['name'][$i];
		  	$sql = "insert into uploadimage(urlimage,nameimage) values('$url','$name')";
		  	mysqli_query($con, $sql);
		  	echo "<img src='$url' width='120' /><br />";
		  	echo "Ảnh <b>$name</b><br />";
		  	echo "Images URL: <input type='text' id='idurl' name='link' value='$site/$url' size='35' /><br />";
		}
		mysqli_close($con);
	}
	else {
		echo "Bạn chưa chọn hình ảnh";
	}