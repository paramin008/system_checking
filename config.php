<?php
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("");
$gClient->setClientSecret("");
$gClient->setApplicationName("CPI Login Tutorial");
$gClient->setRedirectUri("");
$gClient->addScope("");
