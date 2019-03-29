<?php

	echo "This is currently testing and is unsecure, do not enter password.";

	$link = mrsqli_connect("Servername", "myUsers-373167b1", "7tzzvyprnm", "myUsers-373167b1");

	echo mysqli_connect_error();

	$query = "SELECT * FROM myUsers";

	if (mysqli_query($link, $query)) {

		echo "query was successful";
	}

?>