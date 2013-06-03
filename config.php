<?php

//-- Config File
$early_bird = true;
$site_url = "/";

// Force page
$url_path = ((isset($_GET['file_path']))?$_GET['file_path']:'index');
$path_array = explode('/',$url_path);
$page = ($path_array[0]!='')?$path_array[0]:'index';

// Inclusion Path
$file_path = ((isset($_GET['file_path']))?$_GET['file_path']:'index').'.php';