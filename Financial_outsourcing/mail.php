<?php

$to="info@xn-----6kccbejcdoadb9adeyhjf4cycmdietpjlcm2b.xn--p1ai";

$backurl="http://бухгалтерские-услуги-екатеринбург.рф/transaction.html";

$name=$_POST['name'];
$email=$_POST['email'];
$title=$_POST['title'];
$msg=$_POST['message'];

{
 
mail("$to", "$title от $name", "$msg", "$email");

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000);
//--></script>

<p>Сообщение отправлено!</p>
$msg";
exit;

}
?>