<?php 
include('koneksi.php');
$koneksi = new nadia();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['nisn'],$_POST['nama'],$_POST['kelas']);
	header('location:home.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['id'],$_POST['nisn'],$_POST['nama'],$_POST['kelas']);
	header('location:home.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:home.php');
}
?>