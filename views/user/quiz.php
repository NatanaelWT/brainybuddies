<?php
include "views/user/partials/head.php";
include "function/crud.php";
$lin = explode("=", str_replace("%20", " ", $link[3]));
$temp = readWhere("materi", "nama_materi", $lin[0]);
$data = mysqli_fetch_array($temp);
$temp2 = explode(";", $data['quiz']);
// var_dump(count($temp2));
@$quiz = explode("|", $temp2[$lin[1]]);
?>

<body>
    <div id="wrapper" class="home-page">
        <?php
        include "views/user/partials/header.php";
        if ($lin[1] == 0 || $lin[1] == 1 || $lin[1] == 2 || $lin[1] == 3 || $lin[1] == 4) {
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
                            <div class="" style="background-color: gray;">
                                <div style="text-align:right; width:<?=$lin[1]*20?>%; background-color:green;"></div>
                            </div><br>
                            <div id="quizz" class="contact-form">
                                <div class="form-group has-feedback">
                                    <label><?= $quiz[0] ?></label>
                                </div>
                                <br>
                                <div class="form-group has-feedback">
                                    <div class="form-group has-feedback col-md-6">
                                        <div>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="<?php if ($quiz[5] == 1) {
                                                                                                                    echo "true";
                                                                                                                } ?>"><?= $quiz[1] ?>
                                        </div>
                                        <br>
                                        <div>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="<?php if ($quiz[5] == 2) {
                                                                                                                    echo "true";
                                                                                                                } ?>"><?= $quiz[2] ?>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback col-md-6">
                                        <div>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="<?php if ($quiz[5] == 3) {
                                                                                                                    echo "true";
                                                                                                                } ?>"><?= $quiz[3] ?>
                                        </div>
                                        <br>
                                        <div>
                                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="<?php if ($quiz[5] == 4) {
                                                                                                                    echo "true";
                                                                                                                } ?>"><?= $quiz[4] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback" style="margin-top: 100px; float:right;">

                                <button onclick="btnQuiz()" class="btn btn-success">Next</button>
                            </div>
                        </div>
                    </div>
            </section>
            <script>
                function btnQuiz() {
                    var tr = document.getElementById("optionsRadios<?= $quiz[5] ?>");
                    if (document.getElementById("optionsRadios1").checked || document.getElementById("optionsRadios2").checked || document.getElementById("optionsRadios3").checked || document.getElementById("optionsRadios4").checked) {
                        if (tr.checked) {
                            // alert("succes");
                            if (<?= $lin[1] ?> == 0) {
                                document.cookie = "1|0|0|0|0"
                            } else {
                                var t = document.cookie.split("|")
                                t[<?= $lin[1] ?>] = "1";
                                document.cookie = t[0] + "|" + t[1] + "|" + t[2] + "|" + t[3] + "|" + t[4];
                            }
                        } else {
                            if (<?= $lin[1] ?> == 0) {
                                document.cookie = "0|0|0|0|0"
                            }
                        }
                        if (<?= $lin[1] ?> < <?= count($temp2) - 1 ?>) {
                            window.location.href = "<?= $data["nama_materi"] ?>=<?= $lin[1] + 1 ?>";
                        } else {
                            window.location.href = "<?= $data["nama_materi"] ?>=finish";
                        }
                    } else {
                        alert("Pilih Jawaban");
                    }
                }
            </script>
        <?php
        } else if ($lin[1] == "finish") {
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
            <section class="aboutUs" style="background-color: white;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aligncenter">
                                <h2 class="aligncenter" style="padding-top: 10px;">Skor Kuis <?= $data["nama_materi"] ?></h2>
                            </div>
                            <br />
                            <div class="aligncenter">
                                <div class="" style="background-color: gray;">
                                    <div id="bar" style="text-align:right; padding-right:10px; width:0%; background-color:green;"></div>
                                </div><br>
                                <h2 class="aligncenter" id="nilai" style="padding-top: 10px;"></h2>
                                <br>
                                <button class="btn-success">Lihat Jawaban</button>
                                <button onclick="back()" class="btn-primary">Back To Course</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="src/img/img3.png" alt="">
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>

                </div>
            </section>
            <script>
                function back() {
                    window.location.href = "../course/<?= $data['nama_materi'] ?>"
                }
                var split = document.cookie.split(";");
                var split2 = split[0].split("|");
                var ct = 0;
                for (let index = 0; index < split2.length; index++) {
                    if (split2[index] == "1") {
                        ct++;
                    }
                }
                document.getElementById("bar").innerText = ct + "/5";
                var percent = 20 * ct
                document.getElementById("bar").style.width = percent + "%";
                document.getElementById("nilai").innerText = percent;
                if (percent == 100 || percent == 80) {
                    document.getElementById("nilai").style.color = "green";
                } else if (percent == 60) {
                    document.getElementById("nilai").style.color = "Yellow";
                } else {
                    document.getElementById("nilai").style.color = "Red";

                }
            </script>
        <?php
        }
        include "views/user/partials/footer.php";
        ?>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <?php
    include "views/user/partials/foot.php";
    ?>