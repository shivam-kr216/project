<?php
	include "database.php";
	session_start();
	$s="delete from exam where EID={$_GET["id"]}";
	$db->query($s);
	echo"<script>window.open('index.php?mes=denied','_self');</script>";


?>