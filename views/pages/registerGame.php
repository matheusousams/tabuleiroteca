<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locador</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <script src="../css/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css?2.3">
    <link rel="stylesheet" href="../css/lessor.css">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/image 2.png" alt="" width="30" height="24" class="d-inline-block align-text-top ms-2">
                TabuleiroTeca
            </a>
        </div>
    </nav>
    <div class="row  container-fluid container-user m-auto vh-100">

        <div class="col-2 px-0 d-flex align-items-center">
            <div class="bg-white border border-secondary rounded shadow-sm mt-5 w-100" style="height: 100%">

                <div class="d-flex justify-content-center ">

                    <img src="../images/UserCircle.svg" class="" srcset="">
                </div>
                <h5 class="text-center">Nome do usuário</h5>
                <div class="ps-2">
                    <ul>
                        <li><a href="#" class="link-secondary">Início</a></li>
                        <li><a href="#" class="link-secondary">Meus jogos</a></li>
                        <li><a href="#" class="link-secondary">Cadastrar jogos</a></li>
                        <li><a href="#" class="link-secondary">Configuração</a></li>
                        <li><a href="../../models/auth/logout.php" class="link-secondary">Sair</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-8 ps-2 d-flex align-items-center ">
            <div class="  mt-5 w-100 px-3" style="height: 100%">

                <div class="row h-25 pb-2">
                    <div class="col-8 bg-blue h-100 border border-end-0 border-secondary rounded-start">
                        <p>
                        <h6>Disponibilize jogos para aluguel de forma descomplicada</h6>
                        Plataforma segura de aluguéis de jogos de tabuleiro você encontra aqui,
                        na TabuleiroTeca!</p>
                    </div>

                    <div class="col-4 bg-blue h-100 border border-start-0 border-secondary rounded-end">
                        <img src="../images/Frame 140.svg" class="float-end" alt="" srcset="" style="height:95%">
                    </div>
                </div>


                <div class="row h-75 bg-white border border-secondary rounded  shadow-sm">
                    <h3>Cadastre seu jogo aqui</h3>
                    <h4>Informações gerais</h4>
                    <form action="../../models/game.php" method="post">

                        <div class="mb-1 mt-1">
                            <label for="nome" class="form-label">Nome do jogo</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="digite aqui" required>
                        </div>
                        <div class="mb-1">
                            <label for="inputPassword" class="form-label">Categoria</label>
                            <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                                <option selected>Selecione uma opção</option>
                                <option value="locador">Locador</option>
                                <option value="locatario">Locatário</option>
                            </select>

                        </div>
                        <div class="mb-1">
                            <label for="inputPassword" class="form-label">Condições do jogo</label>
                            <select class="form-select" aria-label="Default select example" name="condicao" id="condicao">
                                <option selected>Selecione uma opção</option>
                                <option value="locador">Locador</option>
                                <option value="locatario">Locatário</option>
                            </select>

                        </div>
                        <div class="mb-1 mt-1">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00) 0000-0000" required>
                        </div>
                        <div class="mb-1">
                            <label for="senha" class="form-label">Preço do jogo</label>
                            <div>
                                <input type="text" class="form-control" name="preco" id="preco" placeholder="digite aqui" required>
                            </div>
                        </div>
                        <div class="mb-1">
                            <label for="senha" class="form-label">Termos(valor da taxa)</label>
                            <div>
                                <input type="text" class="form-control" name="taxa" id="taxa" placeholder="digite aqui" required>
                            </div>
                        </div>
                        <button class="mt-3 btn btn-danger w-100 mb-2" type="submit">Cadastrar</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-2 px-0 d-flex align-items-center ">
            <div class=" mt-5 w-100 px-2" style="height: 100%">
                <div class="row pb-1" style="height:20%">
                    <div class="p-2 feedback border shadow-generic border-end-0 border-secondary rounded">

                        <div class="row">
                            <div class="col">Total: 3</div>
                            <div class="col">Bom: 2 </div>
                            <div class="col">Ruim:1</div>
                        </div>
                        <figure>
                            <blockquote class="blockquote">
                                <p class="fs-6">Nº de feedbacks recebidos</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                nos últimos dias
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="mt-2 row bg-white border border-secondary rounded  shadow-sm" style="height:78.6%">
                    <div class="pt-3">
                        <div class="row">
                            <div class="col">
                                <h4 class="fs-6">Notificações</h4>

                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-warning">Ver todas</button>
                            </div>
                        </div>
                        <p>1 nova notificação</p>
                        <div class="p-2 border border-secondary rounded bg-primary">
                            <p>Atraso na devolução</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>