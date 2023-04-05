<?php
namespace App\Portfolio\Controller;

class ControllerMain extends GenericController
{
    public static function readAll() : void
    {
        ControllerMain::afficheVue('view.php', ['pagetitle' => 'Mika CHUE WAYE | Portfolio', 'cheminVueBody' => 'main/accueil.php']);
    }
}