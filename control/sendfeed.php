<?php
require_once '/www/vhosts/107584/pogoda1234567.ru/view/sendfeed.html';
require_once '/www/vhosts/107584/pogoda1234567.ru/model/feedd.php';
?>
<?php
class send
{
public $log1;
public $mail1;
public $text;
 
public function senda($log1,$mail1,$text)
{
$this->log1=$log1;
$this->mail1=$mail1;
$this->text=$text;
}
}
$fer=$_POST['feedmail'];
$fer1=$_POST['feedname'];
$fer2=$_POST['feedtext'];
$feedb = new send();
$feedb->senda($fer,$fer1,$fer2);
if(isset($_POST['feedsumbit']))
{
require_once '/www/vhosts/107584/pogoda1234567.ru/model/parse.php';
}
?>