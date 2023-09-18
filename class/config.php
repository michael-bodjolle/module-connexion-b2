<?php

session_start();

require_once "class/bdd-connect.php";
$bdd= new Database();

require_once "class/user.php";
$user= new User($bdd);
