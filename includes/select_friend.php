<?php
require_once 'sesion_starter.php';
require_once 'dbh.inc.php';

$q = intval($_GET['q']);

$sql="SELECT Username FROM users WHERE Username = '".$q."'";
$result = mysqli_query($conn,$sql);
