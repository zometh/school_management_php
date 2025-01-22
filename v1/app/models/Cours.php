<?php

function addCoursToDb($nom, $nb_heure, $code){
    global $connexion;
    $sql = "INSERT INTO cours(nom, code, nb_heure) VALUES('$nom', '$code','$nb_heure')";
    pg_query($connexion,$sql);
}
function getAllCours(){
    global $connexion;
    $sql = "SELECT * FROM cours";
    return pg_query($connexion, $sql);
}
function getOneCours($id){
    global $connexion;
    $sql = "select * from cours where id =$id";
    return pg_query($connexion, $sql);
}
function updateCoursDb($nom, $nb_heure, $code, $id){
    global $connexion;
    $sql = "UPDATE cours SET 
    nom = '$nom',
    code = '$code',
    nb_heure = '$nb_heure'
    WHERE id = $id
    ";
    pg_query($connexion, $sql);
}
function delteCoursDb($id){
    global $connexion;
    $sql = "DELETE FROM cours WHERE id = $id";
    pg_query($connexion, $sql);
}