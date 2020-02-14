<?php

include("config/Config.php");

$Url="https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/{$_POST['notificationCode']}?email=".EMAIL_PAGSEGURO."&token=".TOKEN_SANDBOX."";

$Curl=curl_init($Url);
curl_setopt($Curl,CURLOPT_SSL_VERIFYPEER,true);
curl_setopt($Curl,CURLOPT_RETURNTRANSFER,true);
$Retorno=curl_exec($Curl);
curl_close($Curl);

$Xml=simplexml_load_string($Retorno);

$Crud=$Con->prepare("update pedido set Status=? where Reference=?");
$Crud->bindValue(1,$Xml->status);
$Crud->bindValue(2,$Xml->reference);
$Crud->execute();