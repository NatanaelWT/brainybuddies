<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/brainybuddies"><img src='<?php if ($link[2] == "course" || $link[2] == "edit" || $link[2] == "quiz" || $link[2] == "editquiz") {?>
    ../src/img/logo.png
  <?php } else { ?>
    src/img/logo.png
  <?php } ?>' alt="logo" /></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/<?=$link[1]?>/">Home</a></li>
                    <li class="active"><a href="/<?=$link[1]?>/about">About Us</a></li>
                    <li class="active"><a href="/<?=$link[1]?>/services">Services</a></li>
                    <li class="active"><a href="/<?=$link[1]?>/courses">Courses</a></li>
                    <!-- <li class="active"><a href="/<?=$link[1]?>/pricing">Pricing</a></li>
                    <li class="active"><a href="/<?=$link[1]?>/contact">Contact</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</header>