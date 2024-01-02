<?php
session_start();
include("../layout/config.php");
$_SESSION['adminName'] = "";
$_SESSION['centerCode'] = "";
$_SESSION['login'] = "";
$_SESSION['$adminPassword'] = "";
$_SESSION['admin_email'] = "";
$_SESSION['isActive'] = "";
$_SESSION['status'] = "";
session_unset();
session_destroy();

?>
<script language="javascript">
    document.location = "../index.php";
</script>