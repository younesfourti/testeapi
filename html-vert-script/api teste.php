<?php



    require 'vendor/autoload.php';
    $coda = new CodaPHP\CodaPHP('d8c1d3d3-1fde-4403-9b34-a43e4c09c42b');
    
    // List all your docs
    $result = $coda->whoami();
    var_dump($result);

    ?>