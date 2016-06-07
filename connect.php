<?php
	$con = mysqli_connect('localhost', 'root', '', 'db_student') or die(mysql_error());
	mysqli_query($con, "SET NAMES 'utf8'");