<?php


if(isset($_POST["prenom"])&&isset($_POST["age"])&&isset($_POST["nom"]) &&isset($_POST["email"])&&isset($_POST["sujet"])&&isset($_POST["message"])){
    $prenom = $_POST["prenom"];
    echo "<p>" .$prenom . "</p>";

    $age = $_POST["age"];
    echo "<p>" . $age . "</p>";

    $nom = $_POST["nom"];
    echo "<p>" . $nom . "</p>";

    $email = $_POST["email"];
    echo "<p>" . $email . "</p>";

    $sujet = $_POST["sujet"];
    echo "<p>" . $sujet . "</p>";

    $message = $_POST["message"];
    echo "<p>" . $message . "</p>";






}


?>