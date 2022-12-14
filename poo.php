<?php

class Utilisateur
{

    public $identifiant;
    public $email;
    public $role = "Client";

    public function afficheRole(): string
    {
        return $this->role;
    }

    public function historiqueConnexion()
    {
        return "Liste des connexions";
    }

    public function __construct($arg1, $arg2, $arg3 = "Client")
    {
        $this->identifiant = $arg1;
        $this->email = $arg2;
        $this->role = $arg3;
    }
}



$user1 = new Utilisateur("bob", "bob@sfr.fr", "Fournisseur");


// $user1->identifiant = "bob";
// $user1->email = "bob@sfr.fr";
// $user1->role = "Fournisseur";

var_dump($user1);

echo $user1->afficheRole();

$user2 = new Utilisateur("jean", "jean@free.fr");

var_dump($user2);
