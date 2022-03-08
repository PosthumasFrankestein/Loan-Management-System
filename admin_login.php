<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:skyblue;">>
	<center><br><br>
	<h3>Lender Login Page</h3><br>
	<form action="" method="POST">
		Email: <input type="email" name="email" required><br><br>
		Password: <input type="password" name="password"required><br><br>
        <input type="submit" name="submit" >
	</form><br>
    <?php
		session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"lonee_list");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['email']=$row['email'];
							$_SESSION['name']=$row['name'];
                            header("Location: admin_dashboard.php");
						}
					}	
				}
				echo "Wrong email or password";
				
			}
		?>
	</center>
</body>
</html>
