<?php
session_start();
require_once '/www/vhosts/107584/pogoda1234567.ru/model/feedd.php';
require_once '/www/vhosts/107584/pogoda1234567.ru/view/showfeeds.html';
class show
{
public $Email;
public $Name;
public $textfeed;
 
public function feeda($Email,$Name,$textfeed)
{
$this->Email=$Email;
$this->Name=$Name;
$this->textfeed = $textfeed;
}
}
$shf=new show();
require_once '/www/vhosts/107584/pogoda1234567.ru/model/select1.php';
$name1=$_SESSION['userid'];
$error="You are not user of this site, please go to the registration page and logining or registration";
if(isset($_SESSION['userid']))
{
echo '<div class="text-left"><font size="5" face="Comic sans MS"><b style="color: #800080"><strong>'.Hello .'</strong></b></font>';
echo" ";
echo '<font size="6" face="Comic sans MS"><b style="color: #008000"><strong>'.$_SESSION['userid'].'</strong></b></font></div><br><br>';
while($result = mysql_fetch_array($data))
{
	echo "
	<div class='text-left'>
    <span class='badge'>
	в„–:$result[id]<br>
	Email:$result[Email]<br>
	Name:$result[Name]<br>
	Feedback:$result[Feedback]<br>
</span>
<br><br>
</div>
	";
}
}
else
{
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #FF0000"><strong><a href="/pogoda1234567.ru/index.php">'.$error.'</a></strong></b></font></p>';
}
?>