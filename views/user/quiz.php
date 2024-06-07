<?php
include "views/user/partials/head.php";
include "function/crud.php";
$lin = explode("=",str_replace("%20", " ", $link[3]));
$temp = readWhere("materi", "nama_materi", $lin[0]);
$data = mysqli_fetch_array($temp);
$temp2 = explode(";", $data['quiz']);
$quiz = explode(",", $temp2[$lin[1]]);
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
                        <h2 class="pageTitle">Quiz <?= $data['nama_materi'] ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div id="quizz" class="contact-form">
                            <div class="form-group has-feedback">
                                <label>1 + 2 = ?</label>
                            </div>
                            <br>
                            <div class="form-group has-feedback">
                                <div class="form-group has-feedback col-md-6">
                                    <div>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Hello
                                    </div>
                                    <br>
                                    <div>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Hello
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-6">
                                    <div>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Hello
                                    </div>
                                    <br>
                                    <div>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Hello
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback" style="margin-top: 100px; float:right;">

                            <button class="btn btn-success">Next</button>
                        </div>
                    </div>
                </div>
        </section>
        <script>

        </script>
        <?php
        include "views/user/partials/footer.php";
        ?>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <?php
    include "views/user/partials/foot.php";
    ?>