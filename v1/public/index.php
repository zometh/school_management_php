<?php
require 'header.php';
require 'navbar.php';
require '../app/database.php';
require '../app/models/Cours.php';
require '../app/models/Etudiant.php';
require '../app/controllers/CoursController.php';
require '../app/controllers/EtudiantController.php';
require '../app/controllers/HomeController.php';
if(isset($_GET["action"])){
    switch ($_GET["action"]) {
        case 'indexEtudiant':
            indexEtudiant();
            break;
        case 'indexCours':
            indexCours();
            break;
        case 'home':
            index();
            break;
        case 'viewEtudiant':
            viewEtudiant();
            break;
        case 'addEtudiant':
            addEtudiantForm();
            break;
        case 'saveEtudiant':
            saveEtudiant();
            break;
        case 'deleteEtudiant':
            deleteEtudiant();
            break;
        case 'editEtudiant':
            editEtudiantForm();
            break;
        case 'updateEtudiant':
            updateEtudiant();
            break;
        case 'viewCours':
            ViewCours();
            break;
        case 'addCours':
            addCoursForm();
            break;
        case 'saveCours':
            saveCours();
            break;
        case 'editCours':
            editCoursForm();
            break;
        case 'updateCours':
            updateCours();
            break;
        case 'deleteCours':
            deleteCours();
            break;
        default:
        errorPage();
        break;
    }
}
else{
    index();
}
