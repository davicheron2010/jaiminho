<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include_once '/usr/share/nginx/app/view/css.php' ?>
</head>
    <body class="bg-light d-flex justify-content-center align-items-center vh-100">
        <form class="p-4 bg-white rounded shadow">
         <h4 class="text-center mb-3">Cadastro de empresa</h4>
         <div class="mb-3">
               <input type="text" class="form-control" placeholder="nome da empresa">
            </div>
         <div class="mb-3">
              <input type="text" class="form-control" placeholder="razão social">
         </div>
         <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
         <a href="/empresa/lista">Voltar</a>
     </form>
    <?php include_once '/usr/share/nginx/app/view/script.php' ?>
</body>

</html>