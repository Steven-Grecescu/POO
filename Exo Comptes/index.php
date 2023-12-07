<?

require_once "Client.class.php";
require_once "Compte.class.php";

$client1 = new Client("Client1");
$client1->ajouterCompte("Client1-1");
$client1->ajouterCompte("Client1-2");

$client2 = new Client("Client2");
$client2->ajouterCompte("Client2-1");
$client2->ajouterCompte("Client2-2");

while (true) {
    echo "Choisissez un client (1 pour Client 1, 2 pour Client 2) ou tapez q pour quitter : ";
    $choixClient = readline();

    if ($choixClient == 'q') {
        break;
    } elseif ($choixClient == '1') {
        echo "Actions pour le Client 1 :\n";
        echo "1) Afficher les infos du client\n";
        echo "2) Afficher les infos d'un compte\n";
        echo "3) Réaliser un retrait\n";
        echo "4) Réaliser un versement sur le compte\n";
        echo "5) Réaliser un virement sur un autre compte\n";
        echo "6) Revenir au choix du client\n";

        $action = readline("Choisissez une action (1-6) : ");

        switch ($action) {
            case '1':
                echo $client1->getInfoClient() . "\n";
                break;
            case '2':
                $numeroCompte = readline("Entrez le numéro du compte : ");
                echo $client1->getCompte($numeroCompte)->getInfoCompte() . "\n";
                break;
            case '3':
                $numeroCompte = readline("Entrez le numéro du compte : ");
                $montant = readline("Montant à retirer : ");
                $client1->getCompte($numeroCompte)->retirerArgent($montant);
                break;
            case '4':
                $numeroCompte = readline("Entrez le numéro du compte : ");
                $montant = readline("Montant à déposer : ");
                $client1->getCompte($numeroCompte)->deposerArgent($montant);
                break;
            case '5':
                $numeroCompteSource = readline("Entrez le numéro du compte source : ");
                $numeroCompteDest = readline("Entrez le numéro du compte destinataire : ");
                $montant = readline("Montant à transférer : ");
                $client1->getCompte($numeroCompteSource)->effectuerVirement($montant, $client1->getCompte($numeroCompteDest));
                break;
            case '6':
                continue 2; 
            default:
                echo "Choix invalide.\n";
        }
    } elseif ($choixClient == '2') {
        echo "Actions pour le Client 2 : \n";
        echo "1) Afficher les infos du client\n";
        echo "2) Afficher les infos d'un compte\n";
        echo "3) Réaliser un retrait\n";
        echo "4) Réaliser un versement sur le compte\n";
        echo "5) Réaliser un virement sur un autre compte\n";
        echo "6) Revenir au choix du client\n";

        $action = readline("Choisissez une action (1-6) : ");

        switch ($action) {
            case '1':
                echo $client2->getInfoClient() . "\n";
                break;
            case '2':
                $numeroCompte = readline("Entrez le numéro du compte : ");
                echo $client2->getCompte($numeroCompte)->getInfoCompte() . "\n";
                break;
            case '3':
                $numeroCompte = readline("Entrez le numéro du compte : ");
                $montant = readline("Montant à retirer : ");
                $client2->getCompte($numeroCompte)->retirerArgent($montant);
                break;
            case '4':
                $numeroCompte = readline("Entrez le numéro du compte : ");
                $montant = readline("Montant à déposer : ");
                $client2->getCompte($numeroCompte)->deposerArgent($montant);
                break;
            case '5':
                $numeroCompteSource = readline("Entrez le numéro du compte source : ");
                $numeroCompteDest = readline("Entrez le numéro du compte destinataire : ");
                $montant = readline("Montant à transférer : ");
                $client2->getCompte($numeroCompteSource)->effectuerVirement($montant, $client1->getCompte($numeroCompteDest));
                break;
            case '6':
                continue 2; 
            default:
                echo "Choix invalide.\n";
        }

    } else {
        echo "Client inexistant.\n";
    }
}

