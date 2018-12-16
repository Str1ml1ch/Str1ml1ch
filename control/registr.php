<?php	
require_once 'pogoda1234567.ru/view/order.html';
require_once 'pogoda1234567.ru/model/feedd.php';
if(isset($_POST['log']))
{
  require_once 'view/logining.html';
}
if(isset($_POST['reg']))
{
  require_once 'view/registration.html';
}
class user
{
	public $name;
	public $surname;
	public $email;
	public $gender;
	public $Birthday;
	public $Birthmounth;
	public $Birthyear;
	public $password ;
	public $repassword ;
 
 
	public function pass($password,$repassword)
	{
		$this->password=$password;
		$this->repassword=$repassword;
		$error;
		if($this->password===$this->repassword)
		{
			$error="Its okey all right,go logining";
		}
		else
		{
			$error="Passwords doesnt match, lets go try again";
		}
		return $error;
	}
public function imp($gender,$Birthday,$Birthmounth,$Birthyear)
{
$this->gender=$gender;
$this->Birthday=$Birthday;
$this->Birthmounth=$Birthmounth;
$this->Birthyear=$Birthyear;
if($this->gender==="NON")
{
$this->gender = "NULL";
}
else
{
 
}
if($this->Birthday==="")
{
$this->Birthday="NULL";
}
else
{
 
}
if($this->Birthmounth==="")
{
$this->Birthmounth="NULL";
}
else
{
 
}
if($this->Birthyear==="")
{
$this->Birthyear="NULL";
}
else
{
 
}
}
public function baza($name,$surname,$email,$gender,$Birthday,$Birthmounth,$Birthyear,$password)
{
$this->name = $name;
$this->surname = $surname;
$this->email = $email;
$this->Birthday = $Birthday;
$this->Birthmounth = $Birthmounth;
$this->Birthyear = $Birthyear;
$this->gender = $gender;
$this->password = $password;
}
 
}
$userpog = new user();
$nameus=$_POST['Name'];
$surnam=$_POST['Surname'];
$ema=$_POST['Email'];
$users= $_POST['Password'];
$users1=$_POST['rePassword'];
$imp1=$_POST['Gender'];
$imp2=$_POST['Birthday'];
$imp3=$_POST['Birthmounth'];
$imp4=$_POST['Birthyear'];
if(isset($_POST['registration']))
{
echo '<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #FF4500"><strong>'.$userpog->pass($users,$users1).'</strong></b></font></p>';
$userpog->imp($imp1,$imp2,$imp3,$imp4);
if($userpog->pass($users,$users1)==="Its okey all right,go logining")
{
$userpog->baza($nameus,$surnam,$ema,$imp1,$imp2,$imp3,$imp4,$users);
require_once 'pogoda1234567.ru/model/baza.php'; 
}
}
if(isset($_POST['logining1']))
{
require_once 'pogoda1234567.ru/control/logining.php';
}
?>