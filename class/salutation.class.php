<?php
    include 'meteo.class.php';

    class salut extends meteo{

        public function salutation($reponse){
            


            $prenom = $reponse;
            $bonjour = $this->bonjour();
            $soleil = $this->soleil();
            
            $phrase = $bonjour.' '.$prenom.' '.$soleil;
            
            return json_encode($phrase);
        }

    }

?>