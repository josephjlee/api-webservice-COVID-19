<?php
if(!defined("BASE")) {
	exit();
}
require_once "_phpedb.php";
$db=new database();
$db->connect("localhost", "root", "01");
$db->db="corona";
$db->create_database($db->db, false);
function display($array) {
	header("Content-Type: application/json");
	exit(json_encode($array));
}
