<?php
session_start();
require_once 'pogoda1234567.ru/control/registr.php';
if(isset($_SESSION['userid']))
{
    echo "HELLO";
    echo " ";
    echo $_SESSION['userid'];
require_once 'view/exit.htm';
}
else
{
}
?>
