<?php
session_start();
session_destroy();
header("location: giris.php");
exit();
?> <!--Adminden çıkarken orada kalmamak için burası var-->