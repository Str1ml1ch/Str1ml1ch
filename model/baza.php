<meta charset="utf-8" /> <html lang="ru">
<?php
mysql_query("INSERT INTO users (`Name`,`Surname`,`Email`,`Gender`,`Birthday`,`Birthmounth`,`Birthyear`,`password`) VALUES ('$userpog->name','$userpog->surname','$userpog->email','$userpog->gender','$userpog->Birthday','$userpog->Birthmounth','$userpog->Birthyear','$userpog->password')") or die(mysql_error());
?>