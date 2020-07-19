<?php //Author: Nicolas Coiado
    class Aluno{ //Criando a classe aluno;
        
        private $nota1; //Criando um atributo para a 1° nota;
        private $nota2; //Criando um atributo para a 2° nota; 
        private $nota3; //Criando um atributo para a 3° nota;
        private $nota4; //Criando um atributo para a 4° nota;
        private $mencao; //Criando um atributo para a menção dos alunos;
        private $media; //Criando um atributo para a média dos alunos;

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
         

        Function CalcularMedia(){ //Criando um  método para calcular a média de notas;
            $m= ($this->getNota1() + $this->getNota2() + $this->getNota3() + $this->getNota4())/4; //Calculando a média de notas;
            return $m; //Retornando a média;
        }

        Function Mencao(){ //Criando um  método para calcular a menção;
            if($this->getMedia()>=9 && $this->getMedia()<=10){ 
                return "MB";
            }elseif($this->getMedia() >= 7 && $this->getMedia() <=8){
                return "B";
            }elseif($this->getMedia() >= 5 && $this->getMedia() <=6){
                return "R";
            }elseif($this->getMedia() < 5){
                return "I";
            }else{
                return "As notas digitadas não são válidas!";
            }
        }
    }
?>