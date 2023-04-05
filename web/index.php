<?php

require_once __DIR__ . "/../src/Lib/Psr4AutoloaderClass.php";

// instantiate the loader
$loader = new App\Portfolio\Lib\Psr4AutoloaderClass();
// register the base directories for the namespace prefix
$loader->addNamespace('App\Portfolio', __DIR__ . '/../src');
// register the autoloader
$loader->register();

$action = "";
$controller = "";

// On recupère l'action passée dans l'URL
if (array_key_exists('controller', $_POST)) {
    $controller = $_POST['controller'];
    $controllerClassName = "App\Portfolio\Controller\Controller". ucfirst($controller);
    if (!class_exists($controllerClassName)) {
        $controllerClassName::error("Ce controller n'existe pas.");
    }
}else{
    $controller = "main";
    $controllerClassName = "App\Portfolio\Controller\Controller". ucfirst($controller);
}

//____________________________________________________________________________________________________________________

if (array_key_exists('action', $_GET)) {
    if (in_array($_GET['action'], get_class_methods($controllerClassName))) {
        $action = $_GET['action'];
        $controllerClassName::$action();
    } else {
        $controllerClassName::error("Cette action n'existe pas");
    }
} else {
    $action = "readAll";
    $controllerClassName::$action();
}