<?php
require 'header.php';
require 'navbar.php';
require '../app/database.php';
$db = new Database();
$connexion = $db->getConnextion();
require '../app/models/Client.php';
require '../app/models/RendezVous.php';
require '../app/controllers/ClientController.php';
require '../app/controllers/RendezVousController.php';
require '../app/controllers/HomeController.php';
$clientController = new ClientController();
$clientModel = new ClientModel();
$rendezVousController = new RendezVousController();
$rendezVousModel = new RendezVousModel();
$homeController = new HomeController();
if(isset($_GET["action"])){
    switch ($_GET["action"]) {
        //Client
        case 'indexClient':
            $clientController->indexClients();
            break;
        case 'viewClient':
            $clientController->viewClients();
            break;
        case 'addClient':
            $clientController->addClientForm();
            break;
        case 'saveClient':
            $clientController->saveClient();
            break;
        case 'editClient':
            $clientController->editClientForm();
            break;
        case 'updateClient':
            $clientController->updateClient();
            break;
        case 'deleteClient':
            $clientController->removeClient();
            break;
        //Rendez
        case 'indexRendezVous':
            $rendezVousController->indexRendezVous();
            break;
        case 'viewRendezVous':
            $rendezVousController->viewRendezVous();
            break;
        case 'addRendezVous':
            $rendezVousController->addRendezVousForm();
            break;
        case 'saveRendezVous':
            $rendezVousController->saveRendezVous();
            break;
        case 'editRendezVous':
            $rendezVousController->editRendezVousForm();
            break;
        case 'updateRendezVous':
            $rendezVousController->updateRendezVous();
            break;
        case 'deleteRendezVous':
            $rendezVousController->removeRendezVous();
            break;

        case 'home':
            $homeController->index();
            break;
        default:
        $homeController->errorPage();
        break;


    }
}
else{
    $homeController->index();
}
