<?php
	include_once'../model/curd_operations.php';
	include_once '../model/db.php';
	include_once 'common_functions.php';
	session_start();
	$con=db_connect();
	$name='abcdef';
	$phone_number='9842972047';
	insert('users',array('name','phonenumber'),array($name,$phone_number),$con);
	$key=verification_code();
	// echo $key;
	$_SESSION['$key']=$key;
	send_message($phone_number,$key);
