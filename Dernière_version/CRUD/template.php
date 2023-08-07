<!DOCTYPE html>
<html class="perso" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="style.css">
</head>

<body class="perso"style="font-family: 'Roboto', sans-serif;" >
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color:#E8C5B4 ;">
            <div class="container-fluid">
                <div><a class="navbar-brand"><img src="./view/Images/logo.png" alt=""></a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active"  href="/" style="color:#CF756C;">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/nouveaute" style="color:#CF756C;">Nouveautés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/horaire" style="color:#CF756C;">Horaires et informations</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#CF756C;">
                                Catégories
                            </a>
                            <ul class="dropdown-menu bg-color-white" aria-labelledby="navbarDropdownMenuLink" >
                                <li><a class="dropdown-item" href="ajout.php" style="color:#CF756C;">Ajout de livre</a></li>
                                <li><a class="dropdown-item" href="admin.php" style="color:#CF756C;">Admin</a></li>
                                <li><a class="dropdown-item" href="#" style="color:#CF756C;">Romans</a></li>
                                <li><a class="dropdown-item" href="#" style="color:#CF756C;">Poésie</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="d-flex">
                    <input class="form-control me-2" type="search" aria-label="Search">
                    <button id="rechecher"class="btn" style="border-color : #CF756C; color : #CF756C; "type="submit">Recherche</button>
                    <a href="comptes.php"><img src="./view/Images/R.png" style="width:40px; height:40px;" class="ms-2 mt-1 me-3" alt=""></a>
                    
            </form>
        </nav>
    </header>


    <?= $content ?>
 
    <footer >
            <div  class=" couleur-bordure container border-top border-2 mt-5"></div>
            <div class="container d-flex justify-content-center p-5">
               <a href="#">Mon compte </a><span class="ps-2 pe-2">|</span>
               <a href="#">Mentions légales</a><span class="ps-2 pe-2"> | </span>
               <a href="#">Contact</a>
            </div>
            <div class="row m-0" style="background-color : #E8C5B4;">
                <div class="d-flex align-items-center justify-content-center">
                    <p class="text-center p-4" style="color:#CF756C;">Développeur : Jayson Brement | Maïwenn Lemaire</p>
                    <a href="#"><img src="./Images/to_top.png" alt=""></a>
                </div>
            </div>
            
    </footer>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
<!-- Script pour que le popover fonctionne -->
<script>var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})</script>
<script src="./javascript/script.js"></script>

</body>
</html>