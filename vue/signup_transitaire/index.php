
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
    var tab=<?php echo json_encode($wilayas);?>;
var tab1=<?php echo json_encode($communes);?>;
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
               $.each(tab,function(cle,val){
			$("#wilayad").append($('<option>', {
    value: val.id,
    text: val.nom
            }));});
$("#wilayad").change(function(){
                 $("#communed").empty();  
                 $.each(tab1,function(cle,val){
                     
                     if(val.wilaya_id==$("#wilayad").val()){
                       
			$("#communed").append($('<option>', {
    value: val.id,
    text: val.nom
            }));
        $('#communed').material_select();             };
                });
                 
                 
             });
                              $('select').material_select();
               $( "#trans" ).submit(function( event ) {
  if($("#pwd").val()!=$("#rpwd").val()){
  alert("mot de pass pas identique");
      event.preventDefault();
  }
});
           });
                   
                 
                 
          
</script>
 <style>
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
     .input-field label {
     color: #000;
   }
   /* label focus color */
   .input-field input[type]:focus + label {
     color: #000;
   }
   /* label underline focus color */
   .input-field input[type]:focus {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* valid color */
   .input-field input[type].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
</style>
    </head>
<body>
     <nav>
   <div class="nav-wrapper white">
      <a href="index.php" class="brand-logo"><img src="Vue/Assets/logo1.png" id="logo"  width="40px"></a>
      <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="menu">menu</i></a>
      
    </div>
  </nav>

        
    <div id="wraper">
    <div class="container">
        <div class="row">
    <form class="col s12 " method="post" id="trans">
      <div class="row">

        <div class="input-field col s12">
          <input id="rued" type="text" class="validate" name="nom_entreprise" required>
          <label for="rued">Nom entreprise</label>
        </div>
          <div class="input-field col s12">
          <input id="ng" type="text" class="validate" name="nom_gerent" required>
          <label for="ng">Nom gerent</label>
        </div>
          <div class="input-field col s12">
          <input id="u" type="text" class="validate" name="nom_user" required>
          <label for="u">Nom utilisateur du systeme</label>
        </div>
          <div class="input-field col s12">
          <input id="registre" type="text" class="validate" name="registre" required>
          <label for="registre">registre de commerce</label>
        </div>
          <div class="input-field col s6">
          <select id="wilayad" name="wilayad" required="" aria-required="true">
      <option value="" disabled selected>Choisire la wilaya</option>

    </select>
            <label >Wilaya  <strong> *</strong></label>
        </div>
            <div class="input-field col s6" >
          <select id="communed" name="communed" id="communed" required="" aria-required="true">
      <option value="" disabled selected>Choisire la ville </option>

    </select>
            <label >ville  <strong> *</strong></label>
        </div>
          <div class="input-field col s12">
          <input id="rued" type="text" class="validate" name="rue" required>
          <label for="rued">Rue</label>
        </div>
          <div class="input-field col s12">
          <input id="eg" type="email" class="validate" name="email_gerent" required>
          <label for="eg">Email gerent</label>
        </div>
          <div class="input-field col s12">
          <input id="eu" type="email" class="validate" name="email_user" required>
          <label for="eu">Email utilisateur</label>
        </div>
          <div class="input-field col s12">
          <input id="tg" type="text" class="validate" name="telephone_gerant" required>
          <label for="tg">telephone gerent</label>
        </div>
          <div class="input-field col s12">
          <input id="tu" type="text" class="validate" name="telephone_user" required>
          <label for="tu">telephone utilisateur
              </label></div>
          <div class="input-field col s12">
          <input id="user" type="text" class="validate" name="username" required>
          <label for="user">username</label>
        </div>
          <div class="input-field col s12">
          <input id="pwd" type="password" class="validate" name="pwd" required>
          <label for="pwd">password</label>
        </div>
          <div class="input-field col s12">
          <input id="rpwd" type="password" class="validate" name="rpwd" required>
          <label for="rpwd">repeat password</label>
        </div>
          
          

      </div>
        <div>
            <button class="btn waves-effect waves-light col s4 offset-s4" type="submit" name="action">Envoyez
    <i class="material-icons right">send</i>
  </button>
        
        </div>
    </form>
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
