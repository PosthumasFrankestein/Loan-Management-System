<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lonee_list");
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$query = "insert into lonee (name,mobile,email,amount,date)
values('$name','$mobile','$email','$amount','$date')";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Lonee added successfully.");
    window.location.href = "admin_dashboard.php";
</script>