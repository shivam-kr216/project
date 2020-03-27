<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=denied','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>admin home</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						School Management System offer technical excellence that supports different types of model to satisfy the browsing needs of any clients. We know that managing school has become tougher with each passing day. 
					</p>
					
					<p class="para">
						Our expert is all set to provide you full control over the system with using our user-friendly features. Automated School ERP System can access through smart phones and it can manage data at one place. The School Management System provides the facility to carry out all day to day activities of the school.
					</p>
				</div>
				
			</div>
	</body>
</html>