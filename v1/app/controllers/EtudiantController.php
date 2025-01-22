<?php

function indexEtudiant(){
    require '../app/views/etudiants/index.php';
}
function viewEtudiant(){
    $etudiants = getAllEtudiant();
    require '../app/views/etudiants/show.php';
}
function addEtudiantForm(){
    require '../app/views/etudiants/create.php';
}
function saveEtudiant(){
    extract($_POST);
    addEtudiantDb($prenom, $nom, $email, $filiere);
    header('location:index.php?action=viewEtudiant');
}
function deleteEtudiant(){
    $id = $_GET['id'];
    deleteEtudiantDb($id);
    header('location:index.php?action=viewEtudiant');
}
function editEtudiantForm(){
    $id = $_GET['id'];
    
}