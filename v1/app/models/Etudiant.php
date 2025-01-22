<?php

function addEtudiantDb($prenom, $nom, $email, $filiere){
    global $connexion;
    $sql = "INSERT INTO etudiant(prenom, nom, email, filiere) VALUES ('$prenom', '$nom', '$email', '$filiere')";
    pg_query($connexion, $sql);
}
function getAllEtudiant(){
    global $connexion;
    $sql = "SELECT * FROM etudiant";
    $result = pg_query($connexion, $sql);
    return $result;
}
function deleteEtudiantDb($id){
    global $connexion;
    $sql = "DELETE FROM  etudiant WHERE id = $id";
    pg_query($connexion, $sql);
}
function getOneEtudiant($id){
    global $connexion;
    $sql = "SELECT * FROM etudiant WHERE id = $id";
    return pg_query($connexion, $sql);
}
function updateEtudiantDb($id, $prenom, $nom, $filiere, $email){
    global $connexion;
    $sql = "UPDATE etudiant SET
            prenom = '$prenom',
            nom = '$nom',
            email = '$email',
            filiere = '$filiere'
            WHERE id = $id
    ";
    pg_query($connexion, $sql);
}