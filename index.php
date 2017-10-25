<?php 

include "data/koneksi.php";
include "data/config.php";

$ds = new config();
?>

<!DOCTYPE html>
<html>
<head>
	<title>model function PHP PDO</title>
</head>
<body>
<h1 align="center"><?php $ds->welcome(); ?></h1>
</body>
</html>