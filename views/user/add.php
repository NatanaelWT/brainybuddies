<?php
include "function/crud.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	include "function/func.php";
	$gambar = uploadGambar("materi");
	if ($gambar != false) {
		insert5("materi", "id_materi", "", "nama_materi", $_POST['nama_materi'], "mata_pelajaran", $_POST['mata_pelajaran'], "img", "materi/" . $gambar, "deskripsi", $_POST['deskripsi']);
		redirect("courses");
	}else{
		alert("Gagal Add");
	}
}
include "views/user/partials/head.php";
?>

<body>
	<div id="wrapper" class="home-page">
		<?php
		include "views/user/partials/header.php";
		?>
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Tambah Materi</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<p>Tambah Materi Pelajaran</p>
						<div class="done">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">×</button>
								Your message has been sent. Thank you!
							</div>
						</div>
						<div class="contact-form">

							<form method="post" id="" enctype="multipart/form-data">
								<div class="form-group has-feedback">
									<label for="nama_materi">Nama Materi*</label>
									<input type="text" class="form-control" name="nama_materi" placeholder="">
								</div>
								<div class="form-group has-feedback">
									<label for="mata_pelajaran">Mata Pelajaran*</label><br>
									<select name="mata_pelajaran">
										<option value="matematika" >Matematika</option>
										<option value="ipa" >IPA</option>
										<option value="ips" >IPS</option>
										<option value="ppkn" >PPKN</option>
										<option value="bahasa" >Bahasa</option>
										<option value="english" >English</option>
									</select>
								</div>

								<div class="form-group has-feedback">
									<label for="file">Gambar*</label>
									<br>
									<input type="file" name="file">
								</div>
								<div class="form-group has-feedback">
									<label for="message">Deskripsi*</label>
									<textarea class="form-control" rows="6" name="deskripsi" placeholder=""></textarea>
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<input type="submit" value="Submit" id="submit" class="submit btn btn-default">
							</form>


						</div>
					</div>
				</div>
			</div>

		</section>
		<?php
		include "views/user/partials/footer.php";
		?>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<?php
	include "views/user/partials/foot.php";
	?>