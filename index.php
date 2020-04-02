<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Faces</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body class="anim">
    <div class="container">
        <header>
            <div class="row ">
            <div class="col jim text-center text-sm-left" >Jim Photo</div>
            <a id ="prop" class="col-lg-3 col-md-4 col-sm-6" href="apropos.html">A propos</a>
            </div>
            <div class="col presente">Presente</div>
            <div class="col titre">World of Faces</div>
        </header>
        <div id="bouton">
        <a class="btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Entrer dans la galerie</a>
        </div>
        <div class="row offset-4">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="col m-2">
                        <form action="controllers/read.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse Email</label>
                                <input type="email" class="form-control-sm-light" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control-sm" id="exampleInputPassword1" name="mdp" required>
                            </div>
                            <button type="submit" class="btn btn-primary bg-dark border-0" value= "Envoyer" >Se connecter</button>
                            <button class="btn btn-primary bg-transparent border-0 text-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Inscription</button>
                        </form>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div>
                                <form  action="controllers/create.php" method="POST">
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>

