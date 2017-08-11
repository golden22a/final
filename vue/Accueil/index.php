<?php
session_start();?>
<!DOCTYPE html>
    <head>
<meta charset="UTF-8">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Vue/Assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="Vue/Assets/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Vue/Assets/materialize/js/materialize.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpR_jGuXCJl6AURSrk2QOT7zEI3eT4ToM&callback=initMap"
    async defer></script>
        <script langage="text/javascript">
                      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: 36.68929471, lng: 2.98190758},
          zoom: 16
        });
          var point=new google.maps.LatLng({lat: 36.68929471, lng: 2.98190758});
        var marker=new google.maps.Marker({
            position: point,
            map:map
        }); 
      }
           $(document).ready(function(){
                $(".button-collapse").sideNav();

           });
          
</script>
 <style>
     #wraper,.row{
         padding-top: 20px;
         padding-bottom: 20px;
     }
  
     p{
         font-size: 20px;
     }
     #header{
         padding-bottom: 30px;
     }
     #wraper{
         background-image: url("Vue/Assets/bg1.jpg");
         background-size: cover;
         color: white;
     }
        #wraper_1,.row{
         padding-top: 20px;
         padding-bottom: 20px;
     }
     #wraper_1{
                  background-image: url("Vue/Assets/bg2.jpg");
         background-size: cover;
         
     }
     @media(max-width:768) {
         
         div{
             margin-bottom: 100px;
             
         }
     }
     #map {
        height: 300px;
         width: 500px;
      }
     .habet{
         padding-top: 80px;
         clear:both;
     }
     ul.hide-on-med-and-down li a{
         color:black;
     } 
     #logo{
         margin-left: 30px;
     }
     #menu{
         color: black;
     }
</style>
    </head>
<body>
     <nav>
    <div class="nav-wrapper white">
      <a href="#!" class="brand-logo center"><img src="Vue/Assets/logo.png" id="logo"  width="50px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="menu">menu</i></a>
      
    </div>
  </nav>

        
    <div id="wraper_1">
    <div class="container">
        <div class="row">
<div class="offset-xl1 offset-l1 col xl5 col l5 col m6 col s12 "><a href="login_expediteur.php">
    <img src="Vue/Assets/expediteur.png"  width="320px"  ></a>
</div>
<div class="offset-xl1 offset-l1 col xl5 col l5 col m6 col s12 " ><a href="login_transitaire.php">
<img src="Vue/Assets/transporteur.png" width="320px" /></a>
</div>
</div>
    <div class="page-header" id="page-header">
</div>
</div>
        </div>
    <div>
    <div class="container">
        <div class="row">
            
            <h1 class="center-align"> pourquoi nous choisir ?</h1>
        <div class="col xl4 col l4 col s12 col m12 center-align">
            <h3>Simple a utiliser</h3>
            <img src="Vue/Assets/1.png">
            <h4> Trouvez votre transporteur en 03 clics </h4>
            </div>
            <div class="col xl4  col l4 col s12 col m12 center-align">
            <h3>economisez  sur votre trajet</h3>
            <img src="Vue/Assets/2.png">
            <h4>    Jusqu'a 30%</h4>
            </div>
            <div class="col xl4 col l4 col s12 col m12 center-align">
            <h3>notez votre chauffeur </h3>
            <img src="Vue/Assets/3.png">
            <h4> Pour avoir la meilleure experience avec O-camion  </h4>
            </div>
        </div>
        </div>
    </div>
    <div id="wraper">
        <div class="container">
        <div class="row">
        <div class="col xl4 col l4 col s12 col m12 center-align">
            <img src="Vue/Assets/membership.png" height="220px">
            <h4> 2348 transporteurs inscrits  </h4>
            </div>
            <div class="col xl4  col l4 col s12 col m12 center-align">
            <img src="Vue/Assets/location.png">
            <h4>   40 Wilayas où nous sommes présent</h4>
            </div>
            <div class="col xl4 col l4 col s12 col m12 center-align">
            <img src="Vue/Assets/t.png">
            <h4> 15,000 Tonnes déjà transportés </h4>
            </div>
        </div>
        </div>
    </div>
    <div>
    <div class="container">
        <div class="row">
      <h1 class="center-align" id="header">COMMENT CA MARCHE</h1>
      <div class="col xl4  col l4 col s12 col m12 center-align">
          <span class="left"><img src="Vue/Assets/Circled%201%20%20C_52px.png"/>
          </span><p><br>
          en moins d'une minute, vous êtes in,scrits sur notre plateforme<br></p>
          <p><img src="Vue/Assets/ligne.png" width="200px" style="padding-top:30px;"><br>
          INSCRIVEZ-VOUS
          </p>
            </div>
        <div class="col xl4  col l4 col s12 col m12 center-align">
           <span class="material-icons left"><img src="Vue/Assets/Circled%202%20C_52px.png"/>
          </span>
            <p><br/>
         accédez à notre base de données, pour pour vous renseigner sr la prochaine course qui vous convient<br>
          <img src="Vue/Assets/ligne.png" width="200px"><br>
          CONSULTEZ
          </p></div>
        <div class="col xl4  col l4 col s12 col m12 center-align">
            <span class="material-icons left"><img src="Vue/Assets/Circled%203%20C_52px.png"/>
          </span><p><br>
          choisissez, et validez votre course via notre plateform,e et votre pick-up sera plannifié  dans les plus  brefs délais
            <br>
          <img src="Vue/Assets/ligne.png" width="200px"><br>
          OPTEZ
          </p></div>
    </div>
  </div>
    </div>
    <footer class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">O-logistics</h5>
                <p class="white-text text-lighten-4">Premiere plateform de mise en relation entre prestataire logistique et expediteur </p>
                  <span class="left"> <img src="Vue/Assets/Phone_48px.png" width="25px"> +213 0552 827 554 <br>
                      <img src="Vue/Assets/Phone_48px.png"  width="25px"> +213 0552 824 334</span>
                      <span class="left "><img src="Vue/Assets/Email_48px.png" width="25px">o-logistics@cdta.dz   <br>
                          <img src="Vue/Assets/Google%20Maps_48px.png" width="25px"> CDTA-Cite 20 aout 1956 Baba Hassen,Alger 16303
                  </span>
              
              <div class="habet">
                <h5 class="white-text">Retrouvez Nous sur :</h5>
                <ul class="left">
                    <li ><a class="white-text text-lighten-3" href="#!"><img src="Vue/Assets/Facebook_48px.png" width="30px"> facebook</a></li>
                  <li ><a class="white-text text-lighten-3" href="#!"><img src="Vue/Assets/Google%20Plus_48px.png" width="30px"> Google +</a></li>
                    <li><a class="white-text text-lighten-3" href="#!"><img src="Vue/Assets/LinkedIn_48px.png" width="30px"> Linkedin </a></li>
                </ul>
              </div> 
                  </div>
                <div class="col l6 s12" id="map">
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copy-right goldencorp
            </div>
          </div>
        </footer>
</body>

    </html>
