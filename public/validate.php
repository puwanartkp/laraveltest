<?php 
	session_start();
	date_default_timezone_set('Asia/Bangkok');
	if(!ISSET($_SESSION['user_login'])){
		header("\signin");
	}
	
	?>