<?php
    require_once '../models/BD/connect.php';

    if($_POST['selecao'] == 'locador'){
        
        if(!empty($_POST)){
            try{
                        
                $sql = "INSERT INTO locador(nome, cpf, email, telefone, senha) 
                        VALUES (:nome, :cpf, :email_cad, :telefone, :senha)";
                //preparar o sql (PDO)
                $stmt = $pdo->prepare($sql);
                
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
                    header('Location: ../views/pages/lessor.php');
                    }
            }
            catch(\Exception $e){
                print_r("<script>alert('Erro ao se cadastrar!')</script>");
                header('Location: index.php?msgError= Erro ao cadastrar!');
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
            }
            catch(\Exception $e){
                print_r("<script>alert('Erro ao se cadastrar!')</script>");
                header('Location: index.php?msgError= Erro ao cadastrar!');
            }
        }
    };
?>
