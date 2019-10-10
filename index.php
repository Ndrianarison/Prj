<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./carousel.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="index.css">
    <title>Accueil</title>
</head>

<body style="margin-top: 60px;">

    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"></a>
                <a class="navbar-brand pull-left" href="#"><img src="logo.png" id="img2" alt="hack" height="20"
                        width="20"></a>
            </div>
            <div class=" collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php">Acceuil </a></li>
                    <li><a href="#">Service </a></li>
                    <li><a href="us.html">About us </a></li>
                    <li><a href="">Profils</a></li>
                    <li><a href="login.php">Sign in</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false" style="padding-right: 33px;">Parametre</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><strong> S'inscrire</strong></a>
                            </li>
                            <li><a href="us.html"> <strong>A Propos</strong> </a></li>
                            <li>
                                <role="separator" class="dropdown-divider">
                            </li>
                            <li> <a href="#">Deconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <Indicators>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active ls-wrapper ls-bg-outer">
                            <img class="first-slide" src="4K.jpg" alt="Slide 4K">
                            <div class="container">
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="info.jpg" alt="Informatique">
                            <div class="container">
                            </div>
                        </div>
                        <div class="item">
                            <img class="three-slide" src="5K.jpg" alt="Slide de Threed">
                            <div class="container">
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
            </div>
       

        <div class="jumbotron">
            <center>
                <h1 class="display-4">Découverte de Monde Informatique</h1>
            </center>
            <p class="lead">Dans cette site web, vous trouverez des differentes formation et des conseils pour tous domaine dans 
            la poursuite universitaire.</p>
            <hr class="my-6">
            <p>Vous trouverez au pied de page tous les formation concernant cette page. Nous vous recommendons de faire une inscription pour 
            profitez plus  d'avantages dans ce site web.
            </p>
            <p class="lead">
                <center> <a class="btn btn-primary btn-lg" role="button">Register</a></center>
            </p>
        </div>
     </div>
        <div id="myModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-heading">
                        <center><img src="logo.png" alt="pdp" id="img1"></center>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <h2><b>Contact Us</b></h2>
                            <form>
                                <div class="row">
                                    <div class="col-xs-4"><input type="text" class="form-control"
                                            placeholder="Entrer ici votre Nom"> </div>
                                    <div class="col-xs-4"><input type="text" class="form-control"
                                            placeholder="Entrer ici votre prenom"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Adresse Email">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="password" name="mdp" id="" class="form-control"
                                            placeholder="Mot de passe">
                                    </div>
                                  
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12"><input type="date" name="date" id="">
                                    <p>En appuyant sur Inscription, vous acceptez nos <a href="">Conditions générales</a> notre<a href=""> Politique d’utilisation</a> des données et notre et
                      <a href="">Politique d’utilisation des cookies</a>. 
                      Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.</p></div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer footer-left"> 
                    <input type="submit" class="btn btn-danger" value="Enregistrer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
        
        <?php
            include('foot.html');
        ?>
    <script src="./framework/jquery.min.js" type="text/javascript"></script>
    <script src="./framework/js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>