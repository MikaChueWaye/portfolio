<?php
namespace App\Portfolio\Model\HTTP;

use Exception;

class Session
{
    private static ?Session $instance = null;

    /**
     * @throws Exception
     */
    private function __construct()
    {
        if (session_start() === false) {
            throw new Exception("La session n'a pas réussi à démarrer.");
        }
    }

    public static function getInstance(): Session
    {
        if (is_null(static::$instance))
            static::$instance = new Session();
        return static::$instance;
    }

    public function contient($name): bool
    {
        return isset($_SESSION[$name]);
    }

    public function enregistrer(string $name, string $value): void
    {
       /* $status = session_status();
        if($status == PHP_SESSION_NONE){

            session_start();
        }else
            if($status == PHP_SESSION_DISABLED){

            }else
                if($status == PHP_SESSION_ACTIVE){

                   session_destroy();
                    session_start();
                    $_SESSION[$name] = $value;
                }
                */

       //session_start();
        $_SESSION[$name] = $value;
    }

//    public function ajouter(string $name, string $value): void
//    {
//        $_SESSION[$name] = array_merge($value)
//    }

    public function enregistrertableau(string $name, array $value): void
    {
        $_SESSION[$name] = $value;
    }

    public function lire(string $name): string
    {
        return $_SESSION[$name];
    }

    public function liretableau(string $name): ?array
    {
        if($_SESSION[$name]!=null){
            return $_SESSION[$name];
        }
        else{
            return array();
        }
    }

    public function supprimer($name): void
    {
        unset($_SESSION[$name]);
    }

    public function detruire() : void
    {
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage
        Cookie::supprimer(session_name()); // deletes the session cookie
        // Il faudra reconstruire la session au prochain appel de getInstance()
        $instance = null;
    }
}


?>