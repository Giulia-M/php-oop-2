<?php

require_once ("./classes/product.php");
require_once ("./classes/smartphone.php");
require_once ("./classes/user.php");
require_once ("./classes/userPremium.php");
require_once ("./classes/cartaCredito.php");

// $smartphone->setMarchio("Oppo");
// $smartphone->setPrezzo(139.99);

try {
    
    $smartphone= new Smartphone("‎Oppo A52", "4gb", "oppo", 139.99);
    $userPremium= new UserPremium("Gino", "Rossi", 10, "gino@gmail.com", 27);
    echo $smartphone->render();
    var_dump($smartphone);
    $carta= new CartaCredito("x", $userPremium, "01/2025", 847);
    $userPremium->aggiungiCartaCredito($carta);
    echo $userPremium->render();
    var_dump($userPremium);


} catch(Exception $e) {
    var_dump($e->getMessage());
}

// $userPremium->setNome("Gino");
// $userPremium->setCognome("Rossi");


//

// var_dump($carta->getExpiration());
// var_dump($carta);




