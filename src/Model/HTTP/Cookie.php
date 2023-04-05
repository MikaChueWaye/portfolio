<?php

namespace App\Portfolio\Model\HTTP;

class Cookie
{
    public static function enregistrer(string $cle, string $valeur, ?int $dureeExpiration = null): void
    {
        if ($dureeExpiration == null){
            setcookie($cle, serialize($valeur), 0);
        }
        else {
            setcookie($cle, serialize($valeur), $dureeExpiration + time());
        }
    }

    public static function enregistrertableau(string $cle, array $valeur, ?int $dureeExpiration = null): void
    {
        if ($dureeExpiration == null){
            setcookie($cle, serialize($valeur), 0);
        }
        else {
            setcookie($cle, serialize($valeur), $dureeExpiration + time());
        }
    }


    public static function lire(string $cle): string {
        return unserialize($_COOKIE[$cle]);
    }

    public static function liretableau(string $cle): array {
        return unserialize($_COOKIE[$cle]);
    }

    public static function supprimer($cle) : void
    {
        setcookie ($cle, "", 1);
        unset($_COOKIE[$cle]);
    }

    public static function contient($cle) : bool
    {
        return array_key_exists( $cle, $_COOKIE);
    }

}