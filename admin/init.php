<?php


    $tpl = "includes/templetes/";
    include 'connect.php';
    include $tpl . "header.php";
    if(!isset($NoNavbar)){
      include $tpl . "navbar.php";  
    }
    include "includes/functions/functions.php";
    include $tpl . "footer.php";


