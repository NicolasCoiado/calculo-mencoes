<?php
    require_once 'MediaDeNotas.php'; //Importando o arquivo MediaDeNotas;
    
        $aluno1 = new aluno(); //Criando um novo objeto;
        $aluno1->setNota1($_POST['nota1']); //Settando a 1° nota;
        $aluno1->setNota2($_POST['nota2']);  //Settando a 2° nota;
        $aluno1->setNota3($_POST['nota3']);  //Settando a 3° nota;
        $aluno1->setNota4($_POST['nota4']); //Settando a 4° nota;
        $aluno1->setMedia(($_POST['nota1']+$_POST['nota2']+$_POST['nota3']+$_POST['nota4'])/4);  //Settando média;

        $aluno2 = new aluno(); //Criando um novo objeto;
        $aluno2->setNota1($_POST['2nota1']); //Settando a 1° nota;
        $aluno2->setNota2($_POST['2nota2']);  //Settando a 2° nota;
        $aluno2->setNota3($_POST['2nota3']);  //Settando a 3° nota;
        $aluno2->setNota4($_POST['2nota4']);  //Settando a 4° nota;
        $aluno2->setMedia(($_POST['2nota1']+$_POST['2nota2']+$_POST['2nota3']+$_POST['2nota4'])/4);  //Settando média;

        
            if($aluno1->getMedia()==9 || $aluno1->getMedia()==10){
                $aluno1->setMencao("MB");
            }elseif($aluno1->getMedia()==7 || $aluno1->getMedia()==8){
                $aluno1->setMencao("B");
            }elseif($aluno1->getMedia()==5 || $aluno1->getMedia()==6){
                $aluno1->setMencao("R");
            }elseif($aluno1->getMedia()<5){
                $aluno1->setMencao("I");
            }else{
                echo "ERRO! As notas digitadas não são válidas! </br>";
            }
        
        
            if($aluno2->getMedia()==9 || $aluno2->getMedia()==10){
                $aluno2->setMencao("MB");
            }elseif($aluno2->getMedia()==7 || $aluno2->getMedia()==8){
                $aluno2->setMencao("B");
            }elseif($aluno2->getMedia()==5 || $aluno2->getMedia()==6){
                $aluno2->setMencao("R");
            }elseif($aluno2->getMedia()<5){
                $aluno2->setMencao("I");
            }else{
                echo "As notas digitadas não são válidas!";
            }
        
            echo "A menção do <b> primeiro aluno foi </b>: ".$aluno1->getMencao()."</br>";
            echo "A menção do <b> segundo aluno foi </b>: ".$aluno2->getMencao()."</br>";
?>