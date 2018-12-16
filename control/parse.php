<?php
session_start();
require_once '/www/vhosts/107584/pogoda1234567.ru/pogoda1234567.ru/view/parse.html';
?>
<?php
$error="You are not user of this site, please go to the registration page and loggining or registration";
 function Parse($p1, $p2, $p3)
 {
    $num1 = strpos($p1, $p2);
   if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
 }
if(isset($_SESSION['userid']))
{
$String = file_get_contents('http://www.gismeteo.ua/city/daily/5093/');
$Pars = Parse($String, '<div class="scity" xmlns:v="http://rdf.data-vocabulary.org/#">', '-->');
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #000000"><strong>'.$Pars.'</strong></b></font></p>';
echo "HELLO";
echo " ";
echo $_SESSION['userid'];
require_once '/www/vhosts/107584/pogoda1234567.ru/pogoda1234567.ru/view/exit.htm';
}
else
{
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #FF0000"><strong><a href="/pogoda1234567.ru/index.php">'.$error.'</a></strong></b></font></p>';
}
 
if(isset($_POST['exit']))
{
unset($_SESSION['userid']);
session_destroy();
}
?>