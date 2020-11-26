<?php

class MyDBConnection extends PDO {
    function __construct($config){

        try {
            parent::__construct($config['db_type'].':Server='.$config['db_host'].';Database='.$config['db_name'],$config['db_username'],$config['db_password']);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){                
            die('ERROR: '. $e->getMessage());
        }

    }
}
?>