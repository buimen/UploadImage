<?php
	$num = isset($_POST['num']) ? $_POST['num'] : null;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Upload Image</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="wapper">
		<form method="post" action="">
	  		<div class="form-group dnum">
	    		<label class="numima">Số lượng ảnh Upload: </label>
	    		<input type="text" class="form-control" id="upimage" name="num" placeholder="Number Image..." value="<?php echo $num; ?>">
	    		<button type="submit" class="btn btn-primary" id='idaccept' name="accept">Accept</button>
	  		</div>
	  	</form>
  		<?php
			require "connect.php";
			if (isset($_POST['accept'])) {
				// $num = $_POST['num'];
				echo "<hr>";
				echo "<form method='post' action='show.php?nfile=$num' enctype='multipart/form-data'>";
				echo "<label>File Image: </label>";
				for ($i = 0; $i < $num; $i++) { 
					echo "<input type='file' id='fileimage' name='img[]'>";
				}
				echo "<button type='submit' class='btn btn-primary' id='idupload' name='upload'>Upload</button>";
				echo "</form>";
			}
		?>
	</div>
</body>
</html>