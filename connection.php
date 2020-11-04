<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "form";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
	// echo "Connection Succesful";
	?>
	<script>
		alert('Connection Succesful');
	</script>
	<?php
}else {
	die("no connection" . mysql_connect_error());
}

?>