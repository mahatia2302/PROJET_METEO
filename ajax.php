<?php

    include 'class/salutation.class.php';
        $class_salutation = new salut();

        $reponse = $_POST['reponse'];

        $reponse = $class_salutation->salutation($reponse);
        
            echo $reponse;

?>