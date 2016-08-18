<?php
include '../php-class/conn.class.php';
include '../php-class/getget.class.php';
include '../php-class/config.php';

$myGET = new GetGet();
$myConn = new MYconn();


$myGET->setText(); // use GET i
if(!$myGET->isGet()) {
	echo 'no GET found!';
	exit(0);
}

$myConn->conn();


$myConn->putData(
	$myGET->getTimestamp(),
	$myGET->getText()
);
echo $myGET->getTimestamp().': '.$myGET->getText();

$myConn->close();