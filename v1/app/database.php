<?php

$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="Zometh12@";
$dbname="school_management_db";
            
$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   //echo "succes";
}