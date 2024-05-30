<?php
include "views/user/partials/head.php";
?>

<body>
	<div id="wrapper" class="home-page">
		<!-- start header -->
		<?php
		include "views/user/partials/header.php";
		?>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Courses</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<?php if (isset($_SESSION['email'])) { ?>
						<a href="/<?= $link[1] ?>/add"><button class="btn" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
					<?php } ?>
					<div class="col-lg-12">
						<ul class="portfolio-categ filter">
							<li class="all active"><a href="#">All</a></li>
							<li class="matematika"><a href="#" title="">MATEMATIKA</a></li>
							<li class="ipa"><a href="#" title="">IPA</a></li>
							<li class="ips"><a href="#" title="">IPS</a></li>
							<li class="ppkn"><a href="#" title="">PPKN</a></li>
							<li class="bahasa"><a href="#" title="">BAHASA</a></li>
							<li class="english"><a href="#" title="">ENGLISH</a></li>
						</ul>
						<div class="clearfix">
						</div>
						<div class="row">
							<section id="projects">
								<ul id="thumbs" class="portfolio">
									<?php
									include 'function/crud.php';
									$temp = read("materi");
									while ($data = mysqli_fetch_array($temp)) { ?>
										<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="<?= $data['mata_pelajaran'] ?>">
											<img style="width:200px; height:200px; object-fit:cover;" src="src/img/<?= $data['img'] ?>" alt="">
											<div class="caption">
												<h3 style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 1;line-clamp: 1;-webkit-box-orient: vertical;"><?php if (isset($_SESSION['email'])) { ?><a href="/<?= $link[1] ?>/edit/<?= $data['id_materi'] ?>"><button class="btn-success" style="border-radius: 100%;"><i class="fa fa-cog" aria-hidden="true"></i></button></a><?php } ?> <a href="course/<?= $data['nama_materi'] ?>"><?= $data['nama_materi'] ?> </a></h3>
												<p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 1;line-clamp: 1;-webkit-box-orient: vertical;"><?=$data['deskripsi']?><?php if($data['deskripsi'] == ''){echo"...";} ?></p>
												<a href="course/<?= $data['nama_materi'] ?>" class="btn btn-primary">
													<div><i>Learn Now</i></div>
												</a>
											</div>
										</li>
									<?php } ?>
								</ul>
							</section>
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