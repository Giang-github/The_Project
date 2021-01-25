<?php
		$hostname = "3.85.120.83";
		$user = "giangnt";
		$pass = "giang2001";
		$db = "turn_source";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>
