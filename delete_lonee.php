<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "lonee_list");
$query = "delete from lonee where l_no = $_POST[l_no]";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Lonee deleted successfully.");
    window.location.href = "admin_dashboard.php";
</script>