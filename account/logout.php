<?php
session_start();
$_SESSION['loggedin']=="";

session_unset();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="../signin.php";
</script>
