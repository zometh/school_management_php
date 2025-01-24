<?php

class RendezVousController{
    public function indexRendezVous(){
        require "../app/views/rendezvous/index.php";
    }
    public function viewRendezVous(){
        global $rendezVousModel;
        $AllrendezVous = $rendezVousModel->getAllRendezVous();
        require "../app/views/rendezvous/show.php";
    }
    public function addRendezVousForm(){
        global $clientModel;
        $clients = $clientModel->getUnregistedClient();
        require "../app/views/rendezvous/create.php";
    }
    public function saveRendezVous(){
        global $rendezVousModel;
        extract($_POST);
        [$date, $heure] = explode('T', $datetime);
        $rendezVousModel->insert($date, $heure, $description, $id_client);
        $this->showRendezVous();
    }
    public function editRendezVousForm(){
        global $rendezVousModel;
        global $clientModel;
        $id = $_GET["id"];
        $rendez_vous = $rendezVousModel->getOneRendezVous($id);
        $current_date = $rendez_vous->date. 'T' .$rendez_vous->heure;
        $current_client = $clientModel->getOneClient($rendez_vous->id_client);
        $clients = $clientModel->getUnregistedClient();
        require "../app/views/rendezvous/edit.php";
    }
    public function updateRendezVous(){
        global $rendezVousModel;
        extract($_POST);
       
        $id = $_GET["id"];
        [$date, $heure] = explode('T', $datetime);
        $rendezVousModel->update($date, $heure, $description, $id_client, $id);
        $this->showRendezVous();
    }
    public function removeRendezVous(){
        global $rendezVousModel;
        $id = $_GET["id"];
        $rendezVousModel->delete($id);
        $this->showRendezVous();

    }
    private function showRendezVous(){
        header("location:index.php?action=viewRendezVous");
    }
}