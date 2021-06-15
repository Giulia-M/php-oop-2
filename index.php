<?php

require_once ("./classes/product.php");
require_once ("./classes/smartphone.php");
require_once ("./classes/user.php");
require_once ("./classes/userPremium.php");
require_once ("./classes/cartaCredito.php");


$smartphone= new Smartphone("‎Oppo A52", "4gb", "oppo", 139.99);

// $smartphone->setMarchio("Oppo");
// $smartphone->setPrezzo(139.99);

echo $smartphone->render();


var_dump($smartphone);



//10 è sconto esclusivo ..come lo collego ?
$userPremium= new UserPremium("Gino", "Rossi", 10);
// $userPremium->setNome("Gino");
// $userPremium->setCognome("Rossi");

//PROBLEMA ??
echo $userPremium->render();
//
$carta= new CartaCredito("x", $userPremium );

// var_dump($carta);
$userPremium->aggiungiCartaCredito($carta);

var_dump($userPremium);

