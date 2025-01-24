<?php


class Database{

    private $serveur="localhost";
    private $port = "5432";
    private $user="postgres";
    private $pwd="Zometh12@";
    private $dbname="appointment_db";
    
    
   public function getConnextion(){
        $connexion = "";
        try{
            $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname",$this->user, $this->pwd);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Connexion réussie';
        }catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
        return $connexion;
    }
     
    
}
