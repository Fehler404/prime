<?php
    if(is_file($_SERVER['DOCUMENT_ROOT'] . "editme.php"))
        require $_SERVER['DOCUMENT_ROOT'] . "editme.php";
    else if(is_file($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "editme.php")) 
        require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "editme.php";
    else 
        die("Couldn't find the editme.php file, please ensure you have correctly uploaded all files.");

    //include $_SERVER['DOCUMENT_ROOT'] .  "editme.php";
	
    $color               = "$primary_color;";
    $bg_color            = "$background_color;";
    $foot_color          = "$footer_color;";
    $bg_image            = "$header_image;";
?>
