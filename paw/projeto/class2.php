<?php

    Class class2{
        private $precoFabrica;
        private $precoConsumidor;


        public function setprecoFabrica($valor){
            $this->precoFabrica=$valor;
        }
        public function getprecoFabrica(){
            return $this->precoFabrica;
        }


        public function setprecoConsumidor($valor){
            $this->precoConsumidor=$valor;
        }
        public function getprecoConsumidor(){
            return $this->precoConsumidor;
        }
        
    }

?>