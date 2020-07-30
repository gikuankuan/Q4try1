<?php include_once "../base.php";


$Menber->save($_POST);

to("../admin.php?do=mem");
?>