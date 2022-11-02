<?php

//Este controlador esta estinado para redireccionar a la pagina "main" o landing page del proyecto

//El require once es una buena practica para evitar llamar doble vez algun archivo y que se abra repetido

class HomeController{

    function index(){
        require "Views/header.php";
        require "Views/home/landingPage.php";
        require "Views/footer.php";
    }

    //funcion de prueba para ver si se conecta a la BD

    function test(){ 
        var_dump(Database::Connect());
    }

}