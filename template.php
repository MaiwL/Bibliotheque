<!DOCTYPE html>
<html class="perso" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="perso" style="font-family:'Montserrat Alternates', sans-serif; ">
    <header>
        <nav class="navbar navbar-light" style="background-color : #E8C5B4 ;">
            <div class="container-fluid">
                <div><a class="navbar-brand" style="color: #CF756C;">Books</a></div>
                <div><a href="/index.php" class=" nav-link" style="color : #CF756C;">Accueil</a></div>
                <div><a href="#" class="nav-link" style="color : #CF756C;">Nouveautés</a></div>
                <div><a href="#" class="nav-link" style="color : #CF756C;">Librairie</a></div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" aria-label="Search">
                    <button class="btn" style="border-color : #CF756C; color : #CF756C; "type="submit">Recherche</button>
                    <a href="#"><img src="./Images/R.png" style="width:30px; height:30px;" class="ms-2 mt-1" alt=""></a>
                    
                </form>
            </div>
        </nav>   
    </header>






    





    <?= $content ?>

    
    <footer >
            <div  class=" couleur-bordure container border-top border-2">
            </div>
            <div class="container d-flex justify-content-center p-5">
               <a href="#">Mon compte </a><span>|</span>
               <a href="#">Mentions légales</a><span> | </span>
               <a href="#">Contact</a>
            </div>
            <div class="" style="background-color : #E8C5B4;">
                <p class=" perso text-center p-3 ">Développeur : Jayson Brement | Maïwenn Lemaire</p>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>
</html>