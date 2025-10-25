<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <?php include_once '/usr/share/nginx/app/view/script.php' ?>
</body>
</html>
