<?php

$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'forum';
 
if(!mysql_connect($server, $username, $password)) {
    exit('Erro: não foi possível estabelecer conexão.');
}

if(!mysql_select_db($database)) {
    exit('Erro: não foi possível selecionar a base de dados');
}

?>