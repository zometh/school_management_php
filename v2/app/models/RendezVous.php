<?php

class RendezVousModel{
    public function getAllRendezVous(){
        global $connexion;
        $sql = "SELECT r.id,r.id_client, r.date, r.heure, r.description, c.prenom, c.nom 
        FROM rendez_vous as r, client as c
        WHERE r.id_client = c.id
        ";
        $rendez_vous = $connexion->query($sql)->fetchAll();
        return $rendez_vous;
    }
    public function getOneRendezVous($id){
        global $connexion;
        $sql = "SELECT * from rendez_vous where id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchObject();
    } 
    public function insert($date, $heure, $description, $id_client){
        global $connexion;
        $sql = "INSERT INTO 
        rendez_vous(date, heure, description, id_client) 
        VALUES (?,?,?,?)";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$date, $heure, $description, $id_client]);

    }
    public function update($date, $heure, $description, $id_client, $id){
        global $connexion;
        $sql = "UPDATE rendez_vous SET
        date = ?,
        heure = ?,
        description = ?,
        id_client = ?
        WHERE id = ?
        ";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$date, $heure, $description, $id_client, $id]);
        
    }
    public function isExistClient($id){
        global $connexion;
        $sql = "SELECT * from rendez_vous where id_client = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }
    public function delete($id){
        global $connexion;
        $sql = "DELETE  FROM rendez_vous
        WHERE id = ?
        ";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$id]);
        
    }
}