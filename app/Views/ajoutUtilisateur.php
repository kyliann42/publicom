<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Publicom</title>
    <link rel="stylesheet" href="css\form.css">
    

    <!-- STYLES -->

    <style {csp-style-nonce}>
        .bouton{
            padding: 1px 6px;
            border: 1px outset buttonborder;
            border-radius: 3px;
            color: buttontext;
            background-color: buttonface;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <h1>Ajout Utilisateur dans <?=$commune["nomCommune"]?></h1>

    <form method="post" action="<?=url_to("create_user",)?>">

            <label for="nom" >Nom </label>
            <input type="text" id="nom" name="nom"/>
            
            <label for="prenom" >Prenom </label>
            <input type="text" id="prenom" name="prenom"/>

            <label for="login" >Login </label>
            <input type="text" id="login" name="login"/>
            
            <label for="password" >Password </label>
            <input type="text" id="password" name="password"/>

            <button type="submit">Valider Ajout</button>



    </form>
</body>  