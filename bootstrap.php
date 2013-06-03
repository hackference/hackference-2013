<?php

// Include config
include("config.php");

// Include Header
include("header.php");

// Include Page itself
if(!file_exists($file_path))
{
    $file_path = '404.php';
}
include($file_path);

// Include Footer
include("footer.php");

?>