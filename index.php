<?php

//Set page
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

//Include controller, if it exists
    if (file_exists("controllers/$page.php")) {
        require "controllers/$page.php";
    }

//Include template
    require "master-template/mastertemp.php";
?>