<?php

namespace app\router;

class Route
{
    public static function router()
    {

        $self = new self;
        #Diretório da camada de vizualização
        $base_dir = __DIR__ . '/../view';
        #Captrua o caminho até o arquivo.
        $patch = $base_dir . $_SERVER['REQUEST_URI'] . '.php';
        if ($_SERVER['REQUEST_URI'] === '/home') {
            require_once $base_dir .'/home.php';
            die;
        }
        if ($_SERVER['REQUEST_URI'] === '/'){
            require_once $base_dir .'/home.php';
            die;
        }
        #Caso o arquivno não exista, adicionamos o erro 404 not found
        if (!file_exists($patch)){
            require_once $base_dir . '/error/404.php';
            die;
        }
        require_once $patch;
    }
}
