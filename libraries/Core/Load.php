<?php

    $controller = ucwords($controller); //Solo para servidores por los controladores el nombre en mayuscula ejem: controller/Home.php Home.php esta con la H en mayus.
    $controllerFile = "controllers/".$controller.".php";
    if(file_exists($controllerFile)) {
        require_once($controllerFile);
        $controller = new $controller();

        if (method_exists($controller, $method)) {
            $controller->{$method}($params);
        }else{
            require_once("controllers/Error.php");
        }

    }else{
        require_once("controllers/Error.php");
    }
?>