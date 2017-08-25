
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
                $("#second").hide();
                $(".button-collapse").sideNav();
                $('#dated').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15,
        min:true,
    closeOnSelect: true,
closeOnClear: true,
    formatSubmit: 'yyyy-mm-dd'// Creates a dropdown of 15 years to control year
    
  });   
$('.timepicker').pickatime({
    default: 'now',
    twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
    donetext: 'OK',
  autoclose: false,
  vibrate: true ,
    formatLabel: '<b>H</b>:i',
  formatSubmit: 'H:i'// vibrate the device when dragging clock hand
});

                $.each(tab,function(cle,val){
			$("#wilayad").append($('<option>', {
    value: val.id,
    text: val.nom
            }));
                    $("#wilayaa").append($('<option>', {
    value: val.id,
    text: val.nom
            }));
                                });
           
           
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
                $("#wilayaa").change(function(){
                    $("#communea").empty();  
                 $.each(tab1,function(cle,val){
                     if(val.wilaya_id==$("#wilayaa").val()){
			$("#communea").append($('<option>', {
    value: val.id,
    text: val.nom
            }))
        ; $('#communea').material_select(); };
                                });
                 
                 
             });
               $('select').material_select();
                $("#dated").change(function(){
                     $('#second').hide();
                     $('#datea').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15,
        min: $("#dated").val(),
    formatSubmit: 'yyyy-mm-dd'// Creates a dropdown of 15 years to control year
    
  });   
                    $('#second').show(500);
                    
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
      <a href="#!" class="brand-logo"><img src="Vue/Assets/logo1.png" id="logo"  width="40px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="menu">Menu</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="espace_expediteur.php" ><?php echo $_SESSION['user'];?></a></li>
        <li><a href="deco.php">Déconnexion</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="espace_expediteur.php"><?php echo $_SESSION['user'];?></a></li>
        <li><a href="deco.php">Déconnexion</a></li>
      </ul>
    </div>
  </nav>

        
    <div id="wraper">
    <div class="container">
        <div class="row">
    <form class="col s12 " method="post">
      <div class="row">
        <div class="input-field col s6">
          <select id="wilayad" name="wilayad" required="" aria-required="true">
      <option value="" disabled selected>Choisir la wilaya de départ</option>

    </select>
            <label >Wilaya de départ <strong> *</strong></label>
        </div>
            <div class="input-field col s6" >
          <select id="communed" name="communed" id="communed" required="" aria-required="true">
      <option value="" disabled selected>Choisir la ville de départ</option>

    </select>
            <label >ville de départ  <strong> *</strong></label>
        </div>
        <div class="input-field col s12">
          <input id="rued" type="text" class="validate" name="rued">
          <label for="rued">Rue</label>
        </div>
           <div class="input-field col s4">
          <input id="dated" type="date" class="validate datepicker" name="dated" required="" aria-required="true">
          <label for="dated">Date de départ</label>
        </div>
           <div class="input-field col s4 offset-s2">
          <input id="heurd" type="time" class="timepicker" name="timed" required="" aria-required="true">
          <label for="heurd">heure de  départ</label>
        </div>
      </div>
        <div id="second">
        <div class="row">
        <div class="input-field col s6">
          <select id="wilayaa" name="wilayaa" required="" aria-required="true">
      <option value="" disabled selected>Choisir la wilaya d'arrivée</option>

    </select>
            <label >Wilaya d'arrivée <strong> *</strong></label>
        </div>
            <div class="input-field col s6" required="" aria-required="true">
          <select id="communea" name="communea" id="communea">
      <option value="" disabled selected>Choisir la ville d'arrivée </option>

    </select>
            <label >ville d'arrivée  <strong> *</strong></label>
        </div>
        <div class="input-field col s12">
          <input id="ruea" type="text" class="validate" name="ruea">
          <label for="ruea">Rue</label>
        </div>
             <div class="input-field col s4">
          <input id="datea" type="date" class="validate datepicker" name="datea" required="" aria-required="true">
          <label for="datea">Date d'arrivée</label>
        </div>
           <div class="input-field col s4 offset-s2"> 
          <input id="heura" type="time" class="timepicker" name="timea" required="" aria-required="true">
          <label for="heura">heure d'arrivée</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select name="type" required="" aria-required="true">
      <option value="" disabled selected>Choisir le type de véhicule </option>
              <option valeu="0" data-icon="Vue/Assets/2.2camion_citerne.jpg" class="left circle"> Camion citerne</option>
              <option valeu="1" data-icon="Vue/Assets/CAMBEN_PH_01.jpg" class="left circle"> Camion benne</option>
              <option valeu="2" data-icon="Vue/Assets/240_F_88623653_wTscB19tkxCnrZTGNKt0Fai7ASi5ssZe.jpg" class="left circle"> Camion frigo</option>
              <option valeu="3" data-icon="Vue/Assets/camion_a_bras.jpg" class="left circle"> Camion Ampliroll 
</option>
              <option valeu="4" data-icon="Vue/Assets/360x250_porteVoiture-nissan-cabstar,0.jpg" class="left circle"> Camion
Plateau</option>
              <option valeu="5" data-icon="Vue/Assets/Camion-fourgon_30à50M3.jpg" class="left circle"> Camion-fourgon 30 à 50 M <sup>3 </sup>  </option>
              <option valeu="6" data-icon="Vue/Assets/Camion-fourgon_55à60M3.jpg" class="left circle"> Camion-fourgon 55 à 66 M <sup>3 </sup>  </option>
              <option valeu="7" data-icon="Vue/Assets/porte-char_trm_4000.jpg" class="left circle"> Camion porte char</option>
              <option valeu="8" data-icon="Vue/Assets/benne_3t5.jpg" class="left circle"> Benne 3T5 </option>
              <option valeu="9" data-icon="Vue/Assets/kangoo_3m3.jpg" class="left circle"> utilitaire 3 M <sup> 3</sup> </option>
              <option valeu="10" data-icon="Vue/Assets/jumpy_6m3.jpg" class="left circle"> utilitaire 6 M <sup>3 </sup> </option>
              <option valeu="11" data-icon="Vue/Assets/jumper_7à9m3.jpg" class="left circle"> Fourgon 7 à 9 M <sup>3 </sup> </option>
              <option valeu="12" data-icon="Vue/Assets/fourgon_10à12m3.jpg" class="left circle"> Fourgon 10 à 12 M <sup>3 </sup> </option>
              <option valeu="13" data-icon="Vue/Assets/fougon-camion_20à22m3.jpg" class="left circle"> Fourgon-camion 20 à 22 M <sup>3 </sup> </option>
              <option valeu="14" data-icon="Vue/Assets/icone-aide.png" class="left circle"> autre véhciule </option>
              
    </select><label>Type du camion
                        </label>
        </div>
          <div class="input-field col s3">
          <input id="tonage" type="number" class="validate" name="tonage">
          <label for="tonage"> Charge utile (Kg) </label>
        </div>
           <div class="input-field col s3">
          <input id="prix" type="number" class="validate" name="prix">
          <label for="prix">Prix</label>
        </div>
      </div>
        <div>
            <button class="btn waves-effect waves-light col s4 offset-s4" type="submit" name="action">Envoyez
    <i class="material-icons right">send</i>
  </button>
        
        </div></div>
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
