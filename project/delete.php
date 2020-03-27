<?php
	include"database.php";
	session_start();
	
	$s="delete from class where CID={$_GET["id"]}";
	$db->query($s);
	echo"<script>window.open('index.php?mes=denied','_self');</script>";
?>