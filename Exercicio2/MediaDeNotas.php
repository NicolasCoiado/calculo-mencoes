<?php //Author: Nicolas Coiado
    class aluno{ //Criando a classe aluno;
        
        private $nota1; //Criando um atributo para a 1° nota;
        private $nota2; //Criando um atributo para a 2° nota; 
        private $nota3; //Criando um atributo para a 3° nota;
        private $nota4; //Criando um atributo para a 4° nota;
        private $media; //Criando um atributo para a média dos alunos;
        private $mencao; //Criando um atributo para a menção dos alunos;

        //Getters:
        public function getNota1(){
            return $this->nota1; 
        }
        public function getNota2(){
            return $this->nota2; 
        }
        public function getNota3(){
            return $this->nota3; 
        }
        public function getNota4(){
            return $this->nota4; 
        }
        public function getMedia(){
            return $this->media; 
        }     
        public function getMencao(){
            return $this->mencao; 
        }   

        //Setters:
        public function setNota1($n1){
            $this->nota1 = $n1; 
       }
        public function setNota2($n2){
            $this->nota2 = $n2; 
        }
        public function setNota3($n3){
            $this->nota3 = $n3; 
        }
        public function setNota4($n4){
            $this->nota4 = $n4; 
        }
        public function setMedia($m){
            $this->media = $m; 
        }
        public function setMencao($me){
            $this->mencao = $me; 
        }
    }
?>