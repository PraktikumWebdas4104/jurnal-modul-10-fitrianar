<?php
	//include class controller
	include "controller/controller.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['e'])){ //kondisi untuk mengakses halaman edit
		$nim = $_GET['e'];
		//panggil controller viewedit
	}else if(isset($_GET['d'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$nim = $_GET['d'];
		//panggil controller delete
	}else if(isset($_GET['i'])){
		//kondisi untuk mengakses halaman add
		//panggil controller viewinsert
	}else{
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}
?>