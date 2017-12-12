<!DOCTYPE html>
<?php
include './admin/lib/php/adm_liste_include.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);
session_start();
?>

<html>
    <head>
        <title>Next Generation</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
              integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="admin/lib/css/Bootstrap/css/bootstrap.css"/>
        <script src="admin/lib/js/jquery-3.2.1.js"></script>
        <script src="admin/lib/css/Bootstrap/js/bootstrap.js"></script>
        <script src="admin/lib/js/gt_functionsAjax.js"></script>
        <script type="text/javascript" src="admin/lib/js/dist/jquery.validate.js"></script>
        <script src="admin/lib/js/gt_functionsVal.js"></script>
        <script src="admin/lib/js/gt_function.js"></script>
        <link rel="stylesheet" type="text/css" href="admin/lib/css/style_next_gen.css">
    </head>
    <body> 


        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
                <!-- Brand -->
                <a class="navbar-brand" href="#"><img src="./admin/images/logo.png" id="test" alt="logo"></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=accueil.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=catalogue.php">Nos chambres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/index.php">Connexion</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li> 
                    </ul>
                </div> 
            </nav>
        </div>









        <!--
        <section class="container-fluid banner">
            <div class="ban">
                <img src="admin/images/home.jpg" alt="banniere">
            </div>
        </section>
        
        <div class="container">
            <div class="navbar navbar-inverse navbar-static-top">
        <?php
        if (file_exists("./lib/php/pro_menu_main.php")) {
            include ("./lib/php/pro_menu_main.php");
        }
        ?>
            </div>
        </div>
        -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <section>
                        <?php
                        if (!isset($_SESSION['page'])) {
                            $_SESSION['page'] = "./pages/accueil.php";
                        } else {
                            if (isset($_GET['page'])) {
                                $_SESSION['page'] = "./pages/" . $_GET['page'];
                            }
                        }

                        if (file_exists($_SESSION['page'])) {
                            include $_SESSION['page'];
                        } else {
                            print "AH BHA BALLO";
                        }
                        ?>
                    </section>
                </div>
            </div>
        </div><br/>

        <div class="container">
            <div class="row">
                <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h1> Qui sommes nous ?</h1>
                    <p>
                        L’histoire commence ici
                        Dans 25 destinations de rêve aux quatre coins du monde, les établissements Waldorf Astoria Hotels & Resorts reflètent l’histoire et l’héritage de leur emplacement extraordinaire. Revisitant leur héritage riche et authentique sous une approche moderne et rafraîchissante, les hôtels Waldorf Astoria proposent à leurs hôtes un environnement exceptionnel et l’attention personnalisée du véritable service Waldorf, pour offrir une expérience unique aux voyageurs les plus exigeants.
                    </p>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <button class="btn btn-primary"> Bouton 1</button>
                    </article>
                </article>
                <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h1> Nos partenaires</h1>
                    <p>
                        Active dans le secteur des nouvelles technologies et principalement dans la recherche et la commercialisation de produits économiseurs d’énergie, la société NEW TECHNOLOGY conseille et propose sa gamme complète de produits aux professionnels comme aux particuliers.
                    </p>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <button class="btn btn-primary"> Bouton 2</button>
                    </article>
                </article>
                <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h1> mon article 3</h1>
                    <p>
                        Active dans le secteur des nouvelles technologies et principalement dans la recherche et la commercialisation de produits économiseurs d’énergie, la société NEW TECHNOLOGY conseille et propose sa gamme complète de produits aux professionnels comme aux particuliers.
                    </p>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <button class="btn btn-primary"> Bouton 3</button>
                    </article>
                </article>
            </div>

            
                
                <footer id="xxx">
                    <?php
                    if (file_exists("./lib/php/pro_footer.php")) {
                        include ("./lib/php/pro_footer.php");
                    }
                    ?>
                </footer>
            
        </div>



        <script src="js/main.js"></script>
    </body>
</html>
