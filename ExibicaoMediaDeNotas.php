<?php //Author: Nicolas Coiado
    require_once 'Aluno.php'; //Importando o arquivo MediaDeNotas;
    
        $aluno1 = new Aluno(); //Criando um novo objeto;
        $aluno1->setNota1($_POST['nota1']); //Settando a 1° nota;
        $aluno1->setNota2($_POST['nota2']);  //Settando a 2° nota;
        $aluno1->setNota3($_POST['nota3']);  //Settando a 3° nota;
        $aluno1->setNota4($_POST['nota4']); //Settando a 4° nota;
        $aluno1->setMedia($aluno1->CalcularMedia());//Settando a média de notas com o método para fazer isso;
        $aluno1->setMencao($aluno1->Mencao()); //Settando a menção com o método que faz isso;
        
        
        $aluno2 = new Aluno(); //Criando um novo objeto;
        $aluno2->setNota1($_POST['2nota1']); //Settando a 1° nota;
        $aluno2->setNota2($_POST['2nota2']);  //Settando a 2° nota;
        $aluno2->setNota3($_POST['2nota3']);  //Settando a 3° nota;
        $aluno2->setNota4($_POST['2nota4']); //Settando a 4° nota;
        $aluno2->setMedia($aluno2->CalcularMedia()); //Settando a média de notas com o método para fazer isso;
        $aluno2->setMencao($aluno2->Mencao()); //Settando a menção com o método que faz isso;
        
        echo "<p> Primeira menção: {$aluno1->getMencao()} </p>"; //Exibindo a primeira menção;
        echo "<p> Segunda menção: {$aluno2->getMencao()} </p>"; //Exibindo a segunda menção;
?>