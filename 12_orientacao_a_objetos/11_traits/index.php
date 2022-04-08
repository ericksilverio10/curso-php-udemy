<?php

    trait Objeto {
        public function teste(){
            echo "Testando o trait <br>";
        }
    }
    class Central {
        use Objeto;
    }

    $x = new Central;
    $x -> teste();