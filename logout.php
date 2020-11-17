<?php
	session_start();
	unset($_SESSION["username"]);
	unset($_SESSION["admin"]);
	echo"<script>location.replace('index.php')</script>";
?>