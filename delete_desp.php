<?php
require_once("db.php");
$sql = "DELETE FROM despesas WHERE despesaId='" . $_GET["despesaId"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>