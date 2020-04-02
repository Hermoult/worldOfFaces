<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Faces</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body class="anim">
    <div class="container">
        <header class=" ">
            <div class="col text-white text-left font-weight-bold">Jim Photo</div>
            <div class="col text-white text-center font-weight-bold text-uppercase">Presente</div>
            <div class="col text-white text-right font-weight-bold text-uppercase"><a href="apropos.html">A propos</a></div>
            <div class="col text-white text-center font-weight-bold">World of Faces</div>
        </header>
        <p>
        <a class="btn btn-primary bg-transparent border-0 col-4 offset-4 font-weight-bold" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Entrer dans la gallerie</a>
        </p>
        <div class="row offset-2">
            <div class="col">
                <form action="read.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse Email</label>
                        <input type="email" class="form-control-sm-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control-sm" id="exampleInputPassword1" name="mdp" required>
                    </div>
                    <button type="submit" class="btn btn-primary bg-dark border-0" value= "Envoyer" >Se connecter</button>
                </form>
            </div>
            <div class="col">
                <div>
                    <form  action="create.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse Email</label>
                            <input type="email" class="form-control-sm-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control-sm" id="exampleInputPassword1" name="mdp" required>
                        </div>
                        <button type="submit" class="btn btn-primary bg-dark border-0" value="Envoyer">Créer un compte</button>
                    </form>
                </div>
            </div>
        </div>

        <p class="col-5 offset-3 text-danger"> <small>Erreur dans l'authetification, veuiller saisir des identifiants existants pour se connecter ou une adresse mail n'étant pas associé a un compte pour créer un compte</small></p>
    </div>
</body>
</html>

