<?php
include "function/crud.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	include "function/func.php";
	$gambar = uploadGambar("materi");
	if ($gambar != false || !isset($_POST['file'])) {
		if ($_FILES['file']['size'] == 0) {
			$gambar2 = explode("/", $_POST['gambar2']);
			$gambar = $gambar2[1];
		}
		update4("materi", "id_materi", $link[3], "nama_materi", $_POST['nama_materi'], "mata_pelajaran", $_POST['mata_pelajaran'], "img", "materi/" . $gambar, "deskripsi", $_POST['deskripsi']);
		redirect("../courses");
	}else{
		alert("Gagal Update");
	}
}
include "views/user/partials/head.php";
$temp = readWhere("materi", "id_materi", str_replace("%20", " ", $link[3]));
$data = mysqli_fetch_array($temp);
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
						<h2 class="pageTitle">Edit <?= $data['nama_materi'] ?></h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<p>Edit Materi Pelajaran</p>
						<div class="done">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">×</button>
								Your message has been sent. Thank you!
							</div>
						</div>
						<div class="contact-form">

							<form method="post" id="" enctype="multipart/form-data">
								<input type="hidden" value="<?= $data['img'] ?>" name="gambar2">
								<div class="form-group has-feedback">
									<label for="nama_materi">Nama Materi*</label>
									<input type="text" class="form-control" name="nama_materi" placeholder="" value="<?= $data['nama_materi'] ?>">
								</div>
								<div class="form-group has-feedback">
									<label for="mata_pelajaran">Mata Pelajaran*</label><br>
									<select name="mata_pelajaran">
										<option value="matematika" <?php if ($data['mata_pelajaran'] == "matematika") {
																		echo "selected";
																	} ?>>Matematika</option>
										<option value="ipa" <?php if ($data['mata_pelajaran'] == "ipa") {
																echo "selected";
															} ?>>IPA</option>
										<option value="ips" <?php if ($data['mata_pelajaran'] == "ips") {
																echo "selected";
															} ?>>IPS</option>
										<option value="ppkn" <?php if ($data['mata_pelajaran'] == "ppkn") {
																	echo "selected";
																} ?>>PPKN</option>
										<option value="bahasa" <?php if ($data['mata_pelajaran'] == "bahasa") {
																	echo "selected";
																} ?>>Bahasa</option>
										<option value="english" <?php if ($data['mata_pelajaran'] == "english") {
																	echo "selected";
																} ?>>English</option>
									</select>
								</div>

								<div class="form-group has-feedback">
									<label for="file">Gambar*</label>
									<br>
									<img style="width:100px; height:100px; object-fit:cover;" src="../src/img/<?= $data['img'] ?>" alt="">
									<input type="file" name="file">
								</div>
								<div class="form-group has-feedback">
									<label for="message">Deskripsi*</label>
									<textarea class="form-control" rows="6" name="deskripsi" placeholder=""><?= $data['deskripsi'] ?></textarea>
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<input type="submit" value="Submit" id="submit" class="submit btn btn-success">
								<a href="../delete/<?=$link[3]?>"><div class="btn btn-danger">Delete</div></a>
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