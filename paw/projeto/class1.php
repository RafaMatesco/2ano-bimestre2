<?php

    Class funcionario{
        private $salBruto;
        private $horaExtra;
        private $nHorasExtras;
        private $salLiquido;

        public function setSalBruto($valor){
            $this->salBruto=$valor;
        }
        public function getSalBruto(){
            return $this->salBruto;
        }

        public function setHoraExtra($valor){
            $this->horaExtra=$valor;
        }
        public function getHoraExtra(){
            return $this->horaExtra;
        }

        public function setNHorasExtras($valor){
            $this->nHorasExtras=$valor;
        }
        public function getNHorasExtras(){
            return $this->nHorasExtras;
        }

        public function setSalLiquido($valor){
            $this->salLiquido=$valor;
        }
        public function getSalLiquido(){
            return $this->salLiquido;
        }
    }

?>