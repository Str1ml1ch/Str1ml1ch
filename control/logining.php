<?php
session_start();
require_once 'pogoda1234567.ru/model/feedd.php';
class zahod
{
public $MAIL;
public $PAROL;
public function log($MAIL,$PAROL)
{
$this->MAIL=$MAIL;
$this->PAROL=$PAROL;
}
}
$userfa = new zahod(); 
$ema=$_POST['loginin'];
$para=$_POST['passwording'];
$userfa->log($ema,$para);
require_once 'pogoda1234567.ru/model/select.php';
if(isset($_POST['logining1']))
{
if($data)
{
$_SESSION['userid']=$userfa->MAIL;
echo "All done,lets go logining";
echo"<br>";
}
else
{
echo "Login or Password doesnt match";
}
}
if(isset($_POST['exit']))
{
unset($_SESSION['userid']);
}
?>