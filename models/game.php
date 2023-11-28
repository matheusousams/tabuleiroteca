<?php
require_once '../models/BD/connect.php';
if(!empty($_POST)){
        $tel = $_POST['telefone'];
        $sql_lessor = "select * from locador where telefone='" . $tel . "'";
        $res_lessor = pg_query($conexao, $sql_lessor);
        $record_lessor = pg_num_rows($res_lessor);
        if ($record_lessor == 1) {
            $row = pg_fetch_row($res_lessor);
            $id_locador = $row[0];
            print_r($id_locador);
            try{
                $sql = "INSERT INTO jogo (id_locador, nome, categoria, condicao, valor, taxa)
                        VALUES (:id_locador, :nome, :categoria, :condicao, :preco, :taxa)";
                //preparar o sql (PDO)
                $stmt = $pdo->prepare($sql);
                
                        
                //definir os dados
                $dados = array(
                    ':id_locador' => $id_locador,
                    ':nome'=> $_POST['nome'],
                    ':categoria'=> $_POST['categoria'],
                    ':condicao'=> $_POST['condicao'],
                    ':preco'=> $_POST['preco'],
                    ':taxa'=> $_POST['taxa']
                    );
                        
                //tentar inserir
                if($stmt->execute($dados)){
                    echo("<script>alert('Cadastrado com sucesso!')</script>");
                    header('Location: ./../views/pages/registerGame.php ');
                    }
            }
            catch(\Exception $e){
                print_r("<script>alert('Erro ao se cadastrar!')</script>");
                header('Location: ./../views/pages/registerGame.php ');
                
            }
        }
                
}