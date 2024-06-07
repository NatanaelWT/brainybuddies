<?php
include "function/crud.php";
include "function/func.php";
delete("materi", "id_materi", $link[3]);
redirect("../courses");