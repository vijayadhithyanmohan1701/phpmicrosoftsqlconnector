<?php

    $serverName = "sqlsrv:Server=go.breakers.kiwi,55501";
    //Establishes the connection
    $conn = new pdo("sqlsrv:Server=go.breakers.kiwi,55501;Database=SWIFTPOS", "sa", "/LaCk4vU7hXW}}P\"C");
    if($conn)
        echo "Connected!";
    else
        echo "Not today";
?>