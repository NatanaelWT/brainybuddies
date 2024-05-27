<?php

function alert($message) {
        echo '<script type="text/javascript">alert("'.$message.'")</script>';
}
function redirect($url) {
    header('Location: '.$url);
}
function uploadGambar($folder){
	$ekstensi_diperbolehkan	= array('png', 'jpg', 'webp', 'jpeg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 1044070) {
			move_uploaded_file($file_tmp, 'src/img/'.$folder.'/'.$nama);
			return $nama;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
