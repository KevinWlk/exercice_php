<?php
    include './maison.php';


    $home = new Maison('Villa', 12, 20, 2);

    var_dump($home);

    $home->surfaceMaison();
    var_dump($home);


?>