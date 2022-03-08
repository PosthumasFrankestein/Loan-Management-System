<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lonee_list");
$query = "update lonee set mobile='$_POST[mobile]',email='$_POST[email]',amount='$_POST[amount]',date='$_POST[date]' where name='$_POST[name]'";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>