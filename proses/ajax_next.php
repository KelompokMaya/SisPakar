<?php
include "database/koneksi.php";
session_start();

	$id = $_POST['id'];
	$_SESSION['pertanyaan']=$_SESSION['pertanyaan']+1;
	$no=$_SESSION['pertanyaan'];
	
		$data['isSuccess']=true;
	
	echo json_encode($data);
?>