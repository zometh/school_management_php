<?php

function indexCours(){
    require '../app/views/cours/index.php';
}
function ViewCours(){
    $AllCours = getAllCours();
    require '../app/views/cours/show.php';
}
function addCoursForm(){
    require '../app/views/cours/create.php';
}
function saveCours(){
    extract($_POST);
    $code = "$nom$nb_heure";
    addCoursToDb($nom, $nb_heure, $code);
    header('location:index.php?action=viewCours');
}
function editCoursForm(){
    $id = $_GET['id'];
    $cours = pg_fetch_assoc(getOneCours($id));
    require '../app/views/cours/edit.php';

}
function updateCours(){
    $id = $_GET['id'];
    extract($_POST);
    $code = "$nom$nb_heure";
    updateCoursDb($nom, $nb_heure, $code, $id);
    header('location:index.php?action=viewCours');
}
function deleteCours(){
    $id = $_GET['id'];
    delteCoursDb($id);
    header('location:index.php?action=viewCours');

}