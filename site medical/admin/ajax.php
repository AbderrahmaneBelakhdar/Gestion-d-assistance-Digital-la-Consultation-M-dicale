<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();







if($action == "set_appointment"){
	$save = $crud->set_appointment();
	if($save)
		echo $save;
}
if($action == "delete_appointment"){
	$save = $crud->delete_appointment();
	if($save)
		echo $save;
}
if($action == "update_appointment"){
	$save = $crud->update_appointment();
	if($save)
		echo $save;
}