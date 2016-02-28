<!DOCTYPE html>

<html>
    <head>
        <title>Cercle d'escrime de Massy - Accueil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jQuery/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="CSS/home.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <div id="header">
            <a href="#">
                <img alt="Logo CEM" src="images/LogoCem.png" class="img-circle">
            </a>
        </div>
        <p> Cercle d'escrime de Massy </p>
       <nav class="navbox navbar navbar-default navbar-static-top">
            <div class="container-fluid">
               <div class="navbar-header">
                   
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Evenements <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Photos</a></li>
                  <li><a href="#">Contact</a></li>
                </ul> 
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid --> 
        </nav>  
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="images/test1.jpg" alt="test" id="img-slides">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              <div class="item">
                  <img src="images/test2.jpg" alt="test2" id="img-slides">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        
        <div id="footer">
            <h3>Partenaires :</h3>
            <a href="http://www.ville-massy.fr/" target="_blank">
                <img src="images/logo-massy.jpg" alt="logo ville de Massy" id="logo-footer">
            </a> 
            <a href="http://www.essonne.fr/" target="_blank">
                <img src="images/Logo-Essonne.svg.png" alt="logo CG Essonne" id="logo-footer">
            </a> 
        </div>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
