<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <?php include_once '/usr/share/nginx/app/view/css.php' ?>
</head>

<body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Minha Empresa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produto/lista">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cliente/lista">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/empresa/lista">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fornecedor/lista">Fornecedores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Produtos Cadastrados</h1>
                <table class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                        <tr>
                            <th><i class="fa-solid fa-id-card-clip"></i>Código</th>
                            <th><i class="fa-solid fa-pen"></i>Nome do Produto</th>
                            <th><i class="fa-solid fa-dollar-sign"></i>Valor do Produto</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PS4</td>
                            <td>3.000,00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Celular do Athos</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Calcinha de renda</td>
                            <td>Vintão</td>
                        </tr>
                        <a href="/produto/cadastro">Cadastrar novo produto</a>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php include_once '/usr/share/nginx/app/view/script.php' ?>
</body>

</html>