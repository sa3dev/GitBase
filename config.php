<?php

//connnect bdd
$host  = 'localhost';
$bdd   = 'chekpseudo';
$user  = 'root';
$password =  '';

$db = new pdo('mysql:hostname='.$host.';dbname='.$bdd, $user, $password);
