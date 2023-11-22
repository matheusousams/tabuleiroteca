<?php
    require_once '../models/BD/connect.php';

    if($_POST['selecao'] == 'locador'){
        print_r("entor");
        if(!empty($_POST)){
            try{
                        
                $sql = "INSERT INTO locador(nome, cpf, email, telefone, senha) 
                        VALUES (:nome, :cpf, :email_cad, :telefone, :senha)";
                //preparar o sql (PDO)
                $stmt = $pdo->prepare($sql);
                print_r("ta aqui");
                        
                //definir os dados
                $dados = array(
                    ':nome'=> $_POST['nome'],
                    ':cpf'=> $_POST['cpf'],
                    ':email_cad'=> $_POST['email_cad'],
                    ':telefone'=> $_POST['telefone'],
                        ':senha'=> md5($_POST['senha'])
                    );
                        
                //tentar inserir
                if($stmt->execute($dados)){
                    print_r("ok");
                    }
                else{
                    print_r('deu pau');
                }
            }
            catch(\Exception $e){
                print_r("no deu");
            }
        }
    };
    if($_POST['selecao'] == 'locatario'){
        print_r("entor");
        if(!empty($_POST)){
            try{
                        
                $sql = "INSERT INTO locatario(nome_locatario, cpf, email, telefone, senha) 
                        VALUES (:nome, :cpf, :email_cad, :telefone, :senha)";
                //preparar o sql (PDO)
                $stmt = $pdo->prepare($sql);
                print_r("ta aqui");
                        
                //definir os dados
                $dados = array(
                    ':nome'=> $_POST['nome'],
                    ':cpf'=> $_POST['cpf'],
                    ':email_cad'=> $_POST['email_cad'],
                    ':telefone'=> $_POST['telefone'],
                        ':senha'=> md5($_POST['senha'])
                    );
                        
                //tentar inserir
                if($stmt->execute($dados)){
                    header('Location: ../views/pages/lesse.php');
                    }
                else{
                    print_r('Location: index.php?msgError= Erro ao cadastrar!');
                }
            }
            catch(\Exception $e){
                print_r("no deu");
            }
        }
    };
?>