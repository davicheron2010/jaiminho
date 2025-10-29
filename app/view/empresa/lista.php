<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empresas</title>
    <?php include_once '/usr/share/nginx/app/view/css.php' ?>
</head>

<body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
                        <a class="nav-link" href="/home">Home</a>

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
                <h1><i class="fa-regular fa-circle-user"></i>Empresas Cadastrados</h1>
                <table class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                        <tr>
                            <th><i class="fa-solid fa-fingerprint"></i>Código</th>
                            <th><i class="fa-regular fa-circle-user"></i></i>Nome Da Empresa</th>
                            <th><i class="fa-solid fa-envelope"></i>Razão social</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Apple</td>
                            <td>Vender iphone pra todo mundo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Empresa do cheron</td>
                            <td>fazer todo mundo zoar o athos pink</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sorveteria</td>
                            <td>Todas as rianças comer picolé</td>
                        </tr>
                        <a href="/empresa/cadastro">Cadastrar nova empresa</a>
                        <a href="/empresa/cadastro">Cadastrar nova empresa</a>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php include_once '/usr/share/nginx/app/view/script.php' ?>
</body>

</html>