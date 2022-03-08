<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header {
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: green;
			position: fixed;
			color: white;
		}

		body {
			background-color: black;
		}

		#left_side {
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}

		#right_side {
			height: 75%;
			width: 80%;
			background-color: skyblue;
			position: fixed;
			left: 17%;
			top: 21%;
			color: brown;
			border: solid 1px lightgreen;
		}

		#top_span {
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}

		#td {
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
	</style>
	<?php
	session_start();
	$name = "";
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "lonee_list");
	?>
</head>

<body>
	<div id="header"><br>
		<center>Lonee record
			<a href="logout.php">Logout</a>
		</center>
	</div>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_lonee" value="Search lonee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_lonee" value="Edit lonee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_lonee" value="Add New lonee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_lonee" value="Delete lonee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_lonee" value="Show lonees">
					</td>
				</tr>
				<tr>
					<td>
						<button><a href="mail.php">Send Email</a></button>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if (isset($_POST['search_lonee'])) {
			?>
				<center>
					<form action="" method="post">
						&nbsp;&nbsp;<b>Enter l_no:</b>&nbsp;&nbsp; <input type="text" name="l_no">
						<input type="submit" name="search_by_l_no_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Lonee's details</u></b></h4><br><br>
				</center>
			<?php
			}
			if (isset($_POST['search_by_l_no_for_search'])) {
				$query = "select * from lonee where l_no = '$_POST[l_no]'";
				$query_run = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($query_run)) {
				?>
					<table>
						<tr>
							<td>
								<b>Lonee no:</b>
							</td>
							<td>
								<input type="text" value="<?php echo
															$row['l_no'] ?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td>
								<input type="text" value="<?php echo
															$row['name'] ?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td>
							<td>
								<input type="text" value="<?php echo
															$row['mobile'] ?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<input type="text" value="<?php echo
															$row['email'] ?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Amount</b>
							</td>
							<td>
								<input type="text" value="<?php echo
															$row['amount'] ?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Last interest date</b>
							</td>
							<td>
								<input type="date" name="date" value="<?php echo $row['date']?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Interestable day</b>
							</td>
							<td>
								<input type="text" value="<?php 
																$date1=strtotime($row['date']);
																$date2=strtotime(date("Y-m-d"));
																$diff=round(($date2-$date1)/60/60/24);
																echo $diff;
																?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Interest</b>
							</td>
							<td>
								<input type="text" name="interest" value="<?php echo $row['amount']*(3/30/100)*$diff?>" disabled>
							</td>
						</tr>
					</table>
			<?php
				}
			}
			?>

			<?php
			if (isset($_POST['edit_lonee'])) {
			?>
				<center>
					<form action="" method="post">
						&nbsp;&nbsp;<b>Enter l_no:</b>&nbsp;&nbsp; <input type="text" name="l_no">
						<input type="submit" name="search_by_l_no_for_edit" value="Search">
					</form><br><br>
					<h4><b><u>Lonee's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if (isset($_POST['search_by_l_no_for_edit'])) {
				$query = "select * from lonee where l_no = $_POST[l_no]";
				$query_run = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($query_run)) {
				?>
					<form action="admin_edit_lonee.php" method="post">
						<table>
							<tr>
								<td>
									<b>lonee id</b>
								</td>
								<td>
									<?php echo $row['l_no'] ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td>
								<td>
									<input type="text" name="name" value="<?php echo
																			$row['name'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td>
								<td>
									<input type="text" name="mobile" value="<?php echo
																			$row['mobile'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td>
								<td>
									<input type="text" name="email" value="<?php echo
																			$row['email'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Amount:</b>
								</td>
								<td>
									<input type="text" name="amount" value="<?php echo
																			$row['amount'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Last interest date</b>
								</td>
								<td>
									<input type="date" min="<?php echo $row['date'] ?>" name="date" value="<?php echo $row['date'] ?>">
								</td>

							</tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
							</tr>
						</table>
					</form>
			<?php
				}
			}
			?>
			<?php
			if (isset($_POST['delete_lonee'])) {
			?>
				<center>
					<form action="delete_lonee.php" method="post">
						&nbsp;&nbsp;<b>Enter lonee No:</b>&nbsp;&nbsp; <input type="text" name="l_no">
						<input type="submit" name="search_by_l_no_for_delete" value="Delete">
					</form><br><br>
				</center>
			<?php
			}
			?>
			<?php
			if (isset($_POST['add_lonee'])) {
			?>
				<form action="add_new_lonee.php" method="post">
					<table>
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td>
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<input type="email" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Amount:</b>
							</td>
							<td>
								<input type="number" min="10000" name="amount" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Last interest date</b>
							</td>
							<td>
								<input type="date" max="<?php echo date("Y-m-d")?>" name="date" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Lonee"></td>
						</tr>
					</table>
				</form>
			<?php
			}
			?>
			<?php
			if (isset($_POST['show_lonee'])) {
			?>
				<center>
					<h5>Student's Details</h5>
					<table>
						<tr>
							<td id="td"><b>l_no</b></td>
							<td id="td"><b>name</b></td>
							<td id="td"><b>mobile</b></td>
							<td id="td"><b>email</b></td>
							<td id="td"><b>amount</b></td>
							<td id="td"><b>last paid date</b></td>
						</tr>
					</table>
				</center>
				<?php
				$query = "select * from lonee";
				$query_run = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($query_run)) {
				?>
					<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['l_no'] ?></td>
								<td id="td"><?php echo $row['name'] ?></td>
								<td id="td"><?php echo $row['mobile'] ?></td>
								<td type="button" id="td"><?php echo $row['email']?></td>
								<td id="td"><?php echo $row['amount'] ?></td>
								<td id="td"><?php echo $row['date'] ?></td>
							</tr>
						</table>
					</center>
			<?php
				}
			}
			?>
		</div>
	</div>
</body>

</html>