<?php

class Utilisateur
{

    // public $identifiant;
    // public $email;
    // public $role = "Client";

    public function afficheRole(): string
    {
        return $this->role;
    }

    public function historiqueConnexion()
    {
        return "Liste des connexions";
    }

    // public function __construct($identifiant, $email, $role = "Client")
    // {
    //     // $this->identifiant = $identifiant;
    //     // $this->email = $email;
    //     // $this->role = $role;
    // }

    // A partir de PHP 8.0.0
    public function __construct(
        public string $identifiant,
        public string $email,
        protected string $role = "Client"
    ) {
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}

class Administrateur extends Utilisateur
{
    private $droits;
    public function methodeSpecifique()
    {
    }
    public function getRoleAdmin()
    {
        return $this->role;
    }
}



// $user1 = new Utilisateur();
// $user1->identifiant = "bob";
// $user1->email = "bob@sfr.fr";
// $user1->role = "Fournisseur";

$user1 = new Utilisateur("bob", "bob@sfr.fr", "Fournisseur");
var_dump($user1);

echo $user1->afficheRole();

$user2 = new Administrateur("jean", "jean@free.fr");
// $user2->role = "Administrateur";
$user2->setRole("Administrateur");

// echo $user2->role;
echo $user2->getRoleAdmin();

var_dump($user2);
