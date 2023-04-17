<?php

    Class class4{
        private $nota;
        private $conceito;
        
        public function setnota($valor){
            $this->nota=$valor;
        }
        public function getnota(){
            return $this->nota;
        }

        public function setconceito($valor){
            $this->conceito=$valor;
        }
        public function getconceito(){
            return $this->conceito;
        }
    }


?>