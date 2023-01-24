
<?php

	
	include_once("connection.php");
session_start();
ob_start();
	session_destroy(); //end session to logout
	session_unset(); 
	echo "
		<script>
			window.location.href = 'index.php';
		</script>
		"; //redirect to login page

?>