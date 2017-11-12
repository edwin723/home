<?php

$user = htmlspecialchars($_POST['user']);  
$password = MD5($_POST['password']); 

var_dump($user,$password);




















