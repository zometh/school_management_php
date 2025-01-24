<?php

class ClientController{
    public function indexClients(){
        require "../app/views/clients/index.php";
    }
    public function viewClients(){
        global $clientModel;
        $clients = $clientModel->getAllClient();
        require "../app/views/clients/show.php";
    }
    public function addClientForm(){
        require "../app/views/clients/create.php";
    }
    public function saveClient(){
        global $clientModel;
        extract($_POST);
        $clientModel->insert($nom, $email, $prenom, $telephone);
        $this->showClients();
    }
    public function editClientForm(){
        global $clientModel;
        $id = $_GET["id"];
        $client = $clientModel->getOneClient($id);
        require "../app/views/clients/edit.php";
    }
    public function updateClient(){
        global $clientModel;
        extract($_POST);
        $id = $_GET["id"];
        $clientModel->update($nom, $email, $prenom, $telephone, $id);
        $this->showClients();
    }
    public function removeClient(){
        global $clientModel;
        global $rendezVousModel;
        $id = $_GET["id"];
        $count = count($rendezVousModel->isExistClient($id));
        if($count == 0){
            $clientModel->delete($id);
            $this->showClients();
        }else{
            $message = "Ce client ne peut pas etre supprimé car il est asscoié à un rendez-vous. Supprimez d'abord son rendez-vous puis réssayer";
            header("location:index.php?action=viewClient&&message=$message");

        }
        

    }
    private function showClients(){
        header("location:index.php?action=viewClient");
    }
}