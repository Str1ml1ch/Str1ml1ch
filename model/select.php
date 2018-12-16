	<?php
$data=mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE `Email`='$userfa->MAIL'AND `Password`='$userfa->PAROL'"));
?>