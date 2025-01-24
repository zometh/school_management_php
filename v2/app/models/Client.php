<?php
/*
 * $stmt = $connexion->prepare($sql);
        $stmt->execute([$libelle,$qt,$prix]);
 */
class ClientModel{
    public function getAllClient(){
        global $connexion;
        $sql = "SELECT * FROM client";
        $clients = $connexion->query($sql)->fetchAll();
        return $clients;
    }
    public function getUnregistedClient(){
        global $connexion;
        $sql = "SELECT * FROM client 
        WHERE id NOT IN (
        SELECT id_client FROM rendez_vous)
        ";
        $clients = $connexion->query($sql)->fetchAll();
        return $clients;
    }
    
    public function insert($nom, $email, $prenom, $telephone){
        global $connexion;
        $sql = "INSERT INTO 
        client(nom, email, prenom, telephone) 
        VALUES (?,?,?,?)";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$nom, $email, $prenom, $telephone]);

    }
    public function update($nom, $email, $prenom, $telephone, $id){
        global $connexion;
        $sql = "UPDATE client SET
        nom = ?,
        prenom = ?,
        email = ?,
        telephone = ?
        WHERE id = ?
        ";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$nom, $prenom,$email, $telephone, $id]);
        
    }
    function getOneClient($id){
        global $connexion;
        $sql = "SELECT * FROM client WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchObject();
    }
    public function delete($id){
        global $connexion;
        $sql = "DELETE  FROM client
        WHERE id = ?
        ";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$id]);
        
    }
}