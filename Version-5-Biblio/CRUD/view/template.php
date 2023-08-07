<!DOCTYPE html>
<html class="perso" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="style.css">
</head>
<body class="perso" style="font-family:'Montserrat Alternates', sans-serif; ">
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color:#E8C5B4 ;">
            <div class="container-fluid">
                <div><a class="navbar-brand" style="color: #CF756C;">Books</a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active"  href="index.php" style="color:#CF756C;">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nouveaute.php" style="color:#CF756C;">Nouveautés</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#CF756C;">
                                Catégories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#E8C5B4;">
                                <li><a class="dropdown-item" href="#" style="color:#CF756C;">Horreur</a></li>
                                <li><a class="dropdown-item" href="#" style="color:#CF756C;">Fiction</a></li>
                                <li><a class="dropdown-item" href="#" style="color:#CF756C;">Romans</a></li>
                                <li><a class="dropdown-item" href="#" style="color:#CF756C;">Poésie</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="d-flex">
                    <input class="form-control me-2" type="search" aria-label="Search">
                    <button class="btn" style="border-color : #CF756C; color : #CF756C; "type="submit">Recherche</button>
                    <a href="connexion.php"><img src="./Images/R.png" style="width:30px; height:30px;" class="ms-2 mt-1" alt=""></a>
                    
            </form>
        </nav>
    </header>


    <?= $content ?>
 
    <footer >
            <div  class=" couleur-bordure container border-top border-2">
            </div>
            <div class="container d-flex justify-content-center p-5">
               <a href="#">Mon compte </a><span class="ps-2 pe-2">|</span>
               <a href="#">Mentions légales</a><span class="ps-2 pe-2"> | </span>
               <a href="#">Contact</a>
            </div>
            <div class="" style="background-color : #E8C5B4;">
                <p class=" perso text-center p-3 ">Développeur : Jayson Brement | Maïwenn Lemaire</p>
                <a href="#"><img src="./Images/fleche.png" alt=""></a>
            </div>
            
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>