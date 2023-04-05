<?php

namespace App\Portfolio\Controller;

use App\Portfolio\Model\HTTP\Cookie;

class GenericController
{
    protected static function afficheVue(string $cheminVue, array $parametres = []): void
    {
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../View/$cheminVue"; // Charge la vue
    }

    public static function error(string $errorMessage)
    {
        self::afficheVue('view.php', ['errorMessage' => $errorMessage, 'pagetitle' => 'Erreur', 'Erreur :','cheminVueBody' => 'figurine/error.php']);
    }

    public static function formulairePreference(){
        self::afficheVue('view.php', ['pagetitle' => 'Preferences', 'cheminVueBody' => 'formulairePreference.php']);
    }

    public static function eclairagePreference()
    {
        Cookie::enregistrer("test", "test", 1000);
    }

    public static function redirection(String $url){
        header("Location: $url");
        exit();
    }
}

