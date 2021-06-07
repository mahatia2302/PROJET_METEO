<?php

    include 'hello.class.php';

        class meteo extends hello {
        
            public function soleil(){

                $meteo = "il fait beau aujourd'hui";

                return $meteo;
            }
            
        }

?>