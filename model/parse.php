<meta charset="utf-8" /> <html lang="ru">
<?php
mysql_query("INSERT INTO feedbacks (`Email`,`Name`,`Feedback`) VALUES ('$feedb->log1','$feedb->mail1','$feedb->text')") or die(mysql_error());
?>
 