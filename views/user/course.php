<?php
include "function/crud.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "function/func.php";
    update2("materi", "nama_materi", str_replace("%20", " ", $link[3]), "link_youtube", $_POST['link_youtube'], "materi", $_POST['materi']);
}
include "views/user/partials/head.php";
$temp = readWhere("materi", "nama_materi", str_replace("%20", " ", $link[3]));
$data = mysqli_fetch_array($temp)
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
                        <h2 class="pageTitle"><?= $data['nama_materi'] ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container content">
                <form method="post">

                    <!-- Service Blcoks -->
                    <div class="row service-v1 margin-bottom-40">
                        <div class="md-margin-bottom-40">
                            <!-- 16:9 aspect ratio -->
                            <div style="position: relative; overflow: hidden; width: 100%; padding-top: 56.25%;">
                                <iframe style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%;" class="embed-responsive-item" src="<?= $data['link_youtube'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <?php if (isset($_SESSION['email'])) { ?>
                                <input name="link_youtube" class="col-sm-12 text-danger text-center" type="text" value="<?= $data['link_youtube'] ?>">
                            <?php } ?>
                            <h2 class="text-center"><?= $data['nama_materi'] ?></h2>
                            <p><?= $data['deskripsi'] ?></p>
                        </div>
                    </div>
                    <!-- End Service Blcoks -->

                    <hr class="margin-bottom-50">
                    <div class="row">
                        <pre><?php
                                if (isset($_SESSION['email'])) { ?><div class="form-group has-feedback"><textarea class="form-control" rows="50" name="materi" placeholder=""><?php } ?><?= $data['materi']; ?><?php if (isset($_SESSION['email'])) { ?></textarea>
                                <button type="submit" class="btn" style="float: right;">Submit</button></div><?php } ?></pre>
                    </div>
                </form>
                <!-- Info Blcoks -->
                <!-- <div class="row">
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-code"></i>
                        <div class="info-blocks-in">
                            <h3>SEO Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-compress"></i>
                        <div class="info-blocks-in">
                            <h3>Fully Responsive</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div> -->
                <?php if ($data['quiz'] != " | | | | |1; | | | | |1; | | | | |1; | | | | |1; | | | | |1") { ?>
                    <a href="../quiz/<?= $data['nama_materi'] ?>=0">
                        <div class="col-sm-4 info-blocks" style="float:right; padding-right:0;">
                            <i class="icon-info-blocks fa fa-arrow-right" style="margin:0; float:right;"> Quiz</i>
                        </div>
                    </a>
                <?php } ?>
                <?php if (isset($_SESSION['email'])) { ?>
                    <a href="../editquiz/<?= $data['nama_materi'] ?>">
                        <div class="col-sm-4 info-blocks" style="padding-left:0;">
                            <i class="icon-info-blocks fa fa-cog" style="margin:0; float:left; background-color:blue;">Edit Quiz</i>
                        </div>
                    </a>
                <?php } ?>
                <!-- </div> -->
                <!-- End Info Blcoks -->


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