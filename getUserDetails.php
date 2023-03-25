<?php
require_once ('database.php');
$sdt = $_GET['sdt'] ?? '';
print_r(json_encode(getUserDetails($sdt)));