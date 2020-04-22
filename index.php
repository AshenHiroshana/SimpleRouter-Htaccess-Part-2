<?php
echo "index";


//var_dump($_SERVER);
$urlparts = explode("?", $_SERVER['REQUEST_URI']);
$fullurl = $urlparts[0];

$url = explode("/", $fullurl);
$source = $url[2];
//echo $source;
switch ($source) {

    case "employee" :
        require_once("employee.html");
        break;

    case "project" :
        require_once("project.html");
        break;

}


?>