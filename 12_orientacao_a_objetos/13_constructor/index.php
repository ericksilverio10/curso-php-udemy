<?php

    class Car {
        public $marca;
        public $cor;
        public $portas;
        
        function __construct($marca, $cor, $portas){
            $this->marca = $marca;
            $this->cor = $cor;
            $this->portas = $portas;
        }
    }

    $fox = new Car("VW", "Vermelho", 4);
    echo "O carro é da marca $fox->marca, da cor $fox->cor e tem $fox->portas";

