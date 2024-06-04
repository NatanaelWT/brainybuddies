<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BrainyBuddies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <!-- <meta name="author" content="http://webthemez.com" /> -->
  <!-- css -->
  <?php if ($link[2] == "course" || $link[2] == "edit" || $link[2] == "quiz") {
  ?>
    <link href="../src/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../src/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="../src/css/jcarousel.css" rel="stylesheet" />
    <link href="../src/css/flexslider.css" rel="stylesheet" />
    <link href="../src/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../src/css/style.css" rel="stylesheet" />
  <?php } else { ?>
    <link href="src/css/bootstrap.min.css" rel="stylesheet" />
    <link href="src/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="src/css/jcarousel.css" rel="stylesheet" />
    <link href="src/css/flexslider.css" rel="stylesheet" />
    <link href="src/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="src/css/style.css" rel="stylesheet" />
  <?php } ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body{
      min-width: 442px;
    }
  </style>
</head>