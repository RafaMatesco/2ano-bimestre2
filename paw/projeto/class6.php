<?php

    Class class6{
        private $a;
        private $b;
        private $c;
        private $raiz1;
        private $raiz2;

        public function seta($valor){
            $this->a=$valor;
        }
        public function geta(){
            return $this->a;
        }

        public function setb($valor){
            $this->b=$valor;
        }
        public function getb(){
            return $this->b;
        }

        public function setc($valor){
            $this->c=$valor;
        }
        public function getc(){
            return $this->c;
        }

        public function setraiz1($valor){
            $this->raiz1=$valor;
        }
        public function getraiz1(){
            return $this->raiz1;
        }

        public function setraiz2($valor){
            $this->raiz2=$valor;
        }
        public function getraiz2(){
            return $this->raiz2;
        }
    }

?>