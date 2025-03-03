<?php
$title = "Contact";
var_dump($title);
include_once "header.php"; ?>

<form method="post" action="traitement.php">
    <label for="prenom">Votre prénom</label>
    <input id=prenom" type="text" name="prenom"><br><br>

    <label for="nom">Votre nom</label>
    <input id="nom" type="text" name="nom"><br><br>

    <label for="age">Votre age</label>
    <input id="age" type="number" name="age"><br><br>

    <label for="email">Votre email</label>
    <input id="email" type="email" name="email"><br><br>

    <label for="sujet">Sujet</label>
    <select id="sujet" type="text" name="sujet"><br><br>
        <option value="1">Un</option>
        <option value="2">Deux</option>
        <option value="3">Trois</option>
    </select><br><br>


    <label for="message">Votre message</label>
    <textarea id="message" type="text" name="message"></textarea><br><br>


    <input type="submit" value="Valider">

</form>


    <!-- <a href="index.php">Index</a>
     -->


    <?php include_once "footer.php"; ?>
