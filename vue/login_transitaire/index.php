
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
    
<script src="Vue/Assets/lib/picker.js"></script>
<script src="Vue/Assets/lib/picker.time.js"></script>
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
      body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
     label{
         
     }
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
         background-color:ghostwhite;
         
     }
     @media(max-width:768) {
         
         div{
             margin-bottom: 100px;
             
         }
     }
     #map {
        height: 400px;
      }
     .habet{
         padding-top: 80 px;
         clear: both;
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
      <a href="index.php" class="brand-logo"><img src="Vue/Assets/logo1.png" id="logo"  width="40px"></a>
      <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="menu">menu</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="signup_transitaire.php">Enregistrer</a></li>
       
      </ul>
      <ul class="side-nav" id="mobile-demo">
        
        <li><a href="signup_transitaire.php">Enregister</a></li>
       
      </ul>
    </div>
  </nav>

        
   <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 50px;" src="Vue/Assets/brilog1.png" />
      

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' />
                <label for='username'>Enter your Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
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
