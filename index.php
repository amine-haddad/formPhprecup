<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testFormulaire</title>
</head>
<body>
    <form  action="thanks.php"  method="post">

        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name">
        </div>

        <div>
            <label  for="prenom">Prenom :</label>
            <input  type="text"  id="prenom"  name="user_prenom">
        </div>

        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>

        <div>
            <label  for="phone">Phone number :</label>
            <input  type="tel"  id="phone"  name="user_phone">
        </div>

        <div>
            <label  for="sujet">Sujet :</label>
            <select  id="sujet"  name="user_sujet">
                <option value="probleme connexion">Problème de Connexion!</option>>
                <option value="probleme affichage">Problème d' Affichage!</option>>
                <option value="identifiant oublie">identifiant oublié!</option>>
                <option value="mot de passe perdu">Mot de passe perdu!</option>>
            </select>
        </div>

        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>

        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
    
</body>
</html>
<?php

?>