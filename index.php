<?php
require_once('models/BD/connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/css/bootstrap/css/bootstrap.css">
    <script src="views/css/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="views/images/image 2.png" alt="" width="30" height="24" class="d-inline-block align-text-top ms-4">
                TabuleiroTeca
            </a>
        </div>
    </nav>
    <div class="row  m-auto container-main container-fluid ">
        <div class="col-sm-10 col-lg-6   h-100 pt-5">
            <ul class="nav nav-pills mb-2 border  p-2 rounded navigation-pills m-auto bg-secondary" id="pills-tab" role="tablist">
                <li class="nav-item col-6" role="presentation">
                    <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                </li>
                <li class="nav-item col-6" role="presentation">
                    <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cadastre-se</button>
                </li>

            </ul>
            <div class="tab-content m-auto tab-width" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <h2>Bem-vindo(a) de volta!</h2>
                    <form method="post" action="models/auth/login.php">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <div>
                                <input type="password" class="form-control" name="senha" id="senha" placeholder="********" required>
                            </div>
                        </div>
                        <button class="mt-3 btn btn-danger w-100" type="submit">Entrar</button>

                    </form>

                </div>
                <div class="tab-pane fade scrollBar" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab " style="height: 435px;">
                    <div class="ps-2" style="direction: ltr;">

                        <h2>Cadastre-se aqui!</h2>
                        <form action="models/user.php" method="post">
    
                            <div class="mb-1 mt-1">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="digite aqui" required>
                            </div>
                            <div class="mb-1 mt-1">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="mb-1 mt-1">
                                <label for="email-cad" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email_cad" id="email_cad" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-1 mt-1">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00) 0000-0000" required>
                            </div>
                            <div class="mb-1">
                                <label for="senha" class="form-label">Senha</label>
                                <div>
                                    <input type="password" class="form-control" name="senha" id="senha" placeholder="********" required>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="inputPassword" class="form-label">Tipo de usuário</label>
                                <select class="form-select" aria-label="Default select example" name="selecao" id="selecao">
                                    <option selected>Selecione uma opção</option>
                                    <option value="locador">Locador</option>
                                    <option value="locatario">Locatário</option>
                                </select>
                                
                            </div>
                            <button class="mt-3 btn btn-danger w-100 mb-2" type="submit">Entrar</button>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-lg-6 h-100">
            <div class="bg-primary h-100 banner rounded container p-5 ">
                <h3 class="text-center ps-3 pe-2">Encontre os melhores jogos aqui, na TabuleiroTeca!</h3>
                <img src="views/images/image 1.png" alt="" class="h-75 container-fluid " srcset="">
            </div>
        </div>
    </div>
</body>

</html>