<?php
	session_start();
	$_SESSION["lastpage"]=$_SESSION["nowpage"];
	$_SESSION["nowpage"]="list.php";
	$a = $_SESSION["lastpage"];
	echo'<script>location.replace("'.$a.'")</script>';
?>