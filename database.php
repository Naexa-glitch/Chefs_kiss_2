<?php

    namespace Medoo;
    require "Medoo.php";

    if(!isset($database)){

        $database = new Medoo([

            'type' => 'mysql',
            'host' => 'db4free.net:3306',
            'database' => 'chefskiss',
            'username' => 'usuarioroot',
            'password' => 'usuarioroot01'

        ]);

    }

?>