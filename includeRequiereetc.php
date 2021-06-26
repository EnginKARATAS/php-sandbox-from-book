<?php
echo "<br>------------require_once----------<br>";
//bir kere dahil edilir

require_once ("trash/echo.php");
require_once ("trash/echo2.php");
require_once ("trash/echo.php");
require_once ("trash/echo2.php");

echo "<br>------------include_once----------<br>";
//bir kere dahil edilir
echo "böyle kulllanacam";
if (file_exists("trash/echo.php")){
    include("trash/echo.php");
}if (file_exists("trash/echo.php")){
    include("trash/echo.php");
}
include_once ("trash/echo.php");
include_once ("trash/echo2.php");
include_once ("trash/echo.php");
include_once ("trash/echo2.php");
echo "<br>----------------------<br>";

include "trash/echo.php";
require "trash/echo.php";



echo "<br>";

require "trash/echo.php";
include "trash/echo.php";




