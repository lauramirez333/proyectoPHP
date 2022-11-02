<?php
//front controller (Patron de software) - proveniente de boostrap logic
require_once "Models/conection/database.php";
require_once "Models/usuario.php";
session_start();//iniciamos variable de sesion

if(isset($_SESSION['user']) || (isset($_POST['correoUsuario']) && isset($_POST['contrasenaUsuario'])|| (isset($_GET['Start'])))){ //esto valida que se necesite una sesion iniciada o hacer login para usar cualquier metodo 
if (!isset($_GET['c'])) { //home controller es donde esta la landing page  
    require_once 'Controllers/homeController.php';
    $controller = new HomeController();
    call_user_func(array($controller, "index"));//
} else {
    $controller = $_GET['c'];
    require_once "Controllers/$controller.Controller.php";
    $controller = ucwords($controller) . "Controller";
    $controller = new $controller;
    $action = isset($_GET['a']) ? $_GET['a'] : 'index'; //operador ternario
    call_user_func(array($controller, $action));
}
}else { // si no se cumple la condicion reenvia al login 
    require_once 'Controllers/homeController.php';
    $controller = new HomeController();
    call_user_func(array($controller, "index"));
}
