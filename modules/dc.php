<?php

$account = new Account();

$account->unLog();

echo ' | redirecionando em 3 segundos';
header( "refresh:5;url=http://".$_SERVER['HTTP_HOST'] );

?>