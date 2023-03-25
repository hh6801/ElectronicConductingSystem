<?php
require_once ('database.php');
$id = $_GET['id'] ?? '';
print_r(json_encode(getDetailProduct($id)));