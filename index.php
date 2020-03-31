<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Faces</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="anim">
    <div>
        <header class="header">
            <div class="jim">Jim Photo</div>
            <div class="jim presente">Présente</div>
            <div class="apropos"><a href="apropos.html">A propos</a></div>
            <div class="titre">World of Faces</div>
        </header>
        <div id="formumu">
            <form action="controllers/read.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse Email</label>
                    <input type="email" class="form-control-sm-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control-sm" id="exampleInputPassword1" name="mdp" required>
                    <div style="color:red;font-size:small">Combinaison mail / mot de passe incorrect</div>
                </div>
                <button type="submit" class="btn btn-primary bg-dark ">Se connecter</button>
            </form>
            <form action="controllers/create.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse Email</label>
                    <input type="email" class="form-control-sm-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control-sm" id="exampleInputPassword1" name="mdp" required>
                    <div style="color:red;font-size:small">Attention, cette adresse mail est déjà associé à un compte</div>
                </div>
                <button type="submit" class="btn btn-primary bg-dark ">Créer un compte</button>
            </form>
        </div>
    </div>
</body>

</html>