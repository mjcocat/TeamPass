<?php
global $lang, $txt, $k, $chemin_passman, $url_passman, $pw_complexity, $mngPages;
global $smtp_server, $smtp_auth, $smtp_auth_username, $smtp_auth_password, $email_from,$email_from_name;
global $server, $user, $pass, $database, $pre, $db;

@define('SALT', 'whateveryouwant'); //Define your'); //Define your encryption key => NeverChange it once it has been used !!!!!

### EMAIL PROPERTIES ###
$smtp_server = 'smtp.my_domain.com';
$smtp_auth = 'false'; //false or true
$smtp_auth_username = 'false';
$smtp_auth_password = 'false';
$email_from = 'false';
$email_from_name = 'false';

### DATABASE connexion parameters ###
$server = "localhost";
$user = "root";
$pass = "";
$database = "cpm3";
$pre = "cpassman_";

@date_default_timezone_set($_SESSION['settings']['timezone']);
?>