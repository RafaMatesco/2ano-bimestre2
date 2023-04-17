<?php
    Class class7{
        private $peso;
        private $altura;
        private $IMC;

        public function setpeso($valor){
            $this->peso=$valor;
        }
        public function getpeso(){
            return $this->peso;
        }
        
        public function setaltura($valor){
            $this->altura=$valor;
        }
        public function getaltura(){
            return $this->altura;
        }
        
        public function setIMC($valor){
            $this->IMC=$valor;
        }
        public function getIMC(){
            return $this->IMC;
        }
    }

?>