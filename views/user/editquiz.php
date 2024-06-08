<?php
include "function/crud.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "function/func.php";
    $data = $_POST['soal0']."|".$_POST['option0a']."|".$_POST['option0b']."|".$_POST['option0c']."|".$_POST['option0d']."|".$_POST['radio0'].";".$_POST['soal1']."|".$_POST['option1a']."|".$_POST['option1b']."|".$_POST['option1c']."|".$_POST['option1d']."|".$_POST['radio1'].";".$_POST['soal2']."|".$_POST['option2a']."|".$_POST['option2b']."|".$_POST['option2c']."|".$_POST['option2d']."|".$_POST['radio2'].";".$_POST['soal3']."|".$_POST['option3a']."|".$_POST['option3b']."|".$_POST['option3c']."|".$_POST['option3d']."|".$_POST['radio3'].";".$_POST['soal4']."|".$_POST['option4a']."|".$_POST['option4b']."|".$_POST['option4c']."|".$_POST['option4d']."|".$_POST['radio4'];
    update("materi", "nama_materi", $link[3], "quiz", $data);
}
include "views/user/partials/head.php";
$lin = explode("=", str_replace("%20", " ", $link[3]));
$temp = readWhere("materi", "nama_materi", $lin[0]);
$data = mysqli_fetch_array($temp);
$temp2 = explode(";", $data['quiz']);
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
                        <h2 class="pageTitle">Edit Quiz <?= $data['nama_materi'] ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p>Edit Quiz</p>
                        <div class="done">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="contact-form">

                            <form method="post" id="" enctype="multipart/form-data">
                                <?php for ($i = 0; $i < 5; $i++) {
                                    $soal1 = explode("|", $temp2[$i]); ?>
                                    <div class="form-group has-feedback">
                                        <label for="nama_materi">Soal <?= $i + 1 ?>*</label><br>
                                        <input name="soal<?= $i ?>" type="text" class="" style="width: 100%;" value="<?= $soal1[0]?>" required>
                                        <div>
                                            <label for="nama_materi">A</label>
                                            <input type="text" class="" name="option<?= $i ?>a" placeholder="" value="<?= $soal1[1] ?>" required>
                                            <input type="radio" name="radio<?= $i ?>" value="1" checked <?php if ($soal1[5] == 1) {
                                                                                                    echo "checked";
                                                                                                } ?>> <br>
                                            <label for="nama_materi">B</label>
                                            <input type="text" class="" name="option<?= $i ?>b" placeholder="" value="<?= $soal1[2] ?>" required>
                                            <input type="radio" name="radio<?= $i ?>" value="2" <?php if ($soal1[5] == 2) {
                                                                                                    echo "checked";
                                                                                                } ?>> <br>
                                            <label for="nama_materi">C</label>
                                            <input type="text" class="" name="option<?= $i ?>c" placeholder="" value="<?= $soal1[3] ?>" required>
                                            <input type="radio" name="radio<?= $i ?>" value="3" <?php if ($soal1[5] == 3) {
                                                                                                    echo "checked";
                                                                                                } ?>> <br>
                                            <label for="nama_materi">D</label>
                                            <input type="text" class="" name="option<?= $i ?>d" placeholder="" value="<?= $soal1[4] ?>" required>
                                            <input type="radio" name="radio<?= $i ?>" value="4" <?php if ($soal1[5] == 4) {
                                                                                                    echo "checked";
                                                                                                } ?>> <br>
                                        </div>
                                    </div>
                                <?php } ?>


                                <input type="submit" value="Submit" id="submit" class="submit btn btn-success">
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