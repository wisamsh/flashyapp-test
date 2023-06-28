<?php 
//header of json format is needed!
header("Content-type: application/json; charset=utf-8");
require_once('requierments.php');

$Client_ID = $_REQUEST['cid'];
//CALLING THE CLASS OF CLIENT CARD
$CardClientApp = new CardClientApp();

//PRINTING JSON OUTPUT TO BROWSER
print_r($CardClientApp->Get_Client_Details($Client_ID));
?>