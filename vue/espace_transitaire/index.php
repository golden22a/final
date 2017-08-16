<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <me ta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blank Page | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="Vue/Assets/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="Vue/Assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="Vue/Assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="Vue/Assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="Vue/Assets/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="Vue/Assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="espace_transitaire.php"><?php echo $_SESSION['Nom']; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mon Compte
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="param.php">Paramètres</a></li>
            <li><a href="deco.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>                    
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name col-purple" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']; ?></div>
                    <div class="email col-purple"><?php echo $_SESSION['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="espace_transitaire.php">
                            <i class="material-icons">verified_user</i>
                            <span>Espace utilisateur</span>
                        </a>
                    </li>
                    <li>
                        <a href="depo.php">
                            <i class="material-icons">create_new_folder</i>
                            <span>Deposer un depart</span>
                        </a>
                    </li>
                    <li>
                        <a href="recherche_avancer_transitaire.php">
                            <i class="material-icons">search</i>
                            <span>Recherche avancez</span>
                        </a>
                    </li>
                    <li>
                        <a href="confirmer_reservation_transitaire.php">
                            <i class="material-icons">access_time</i>
                            <span>Confirmer une reservation</span>
                        </a>
                    </li>
    
                    
                    
                    
                   
                    
             
                    <li class="header">LABELS</li>
                    <li>
                        <a href="annonce_deposer_transitaire.php">
                            <i class="material-icons col-blue">donut_large</i>
                            <span>Annonce deposer</span>
                        </a>
                    </li>
                    <li>
                        <a href="annonce_terminer_transitaire.php">
                            <i class="material-icons col-pink">donut_large</i>
                            <span>Annonce terminer</span>
                        </a>
                    </li>
                    <li>
                        <a href="annonce_nonpayer_trensitaire.php">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Course non payez</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">O-logistic</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
               
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluidr">
        <div class="block-header">
                </div>
            <div class="row clearfix">
             <a href="annonce_deposer_transitaire.php"><div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">file_download</i>
                        </div>
                        <div class="content">
                            <div class="text">Annonce deposer</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $nombre; ?></div>
                        </div>
                    </div>
                
        </div></a>
                <a href="annonce_terminer_transitaire.php"> <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
             <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">file_upload</i>
                        </div>
                        <div class="content">
                            <div class="text">course terminer</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $terminer; ?></div>
                        </div>
                    </div>
                     </div></a>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">chiffre daffaire</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"> <?php echo $chifre; ?> DA</div>
                        </div>
                    </div>
                         </div>
                         <a href="annonce_nonpayer_transitaire.php"><div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">reste a paye</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $reste; ?> DA</div>
                        </div>
                             </div></div></a>
    </div> </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                <td>wilaya de depart</td> 
                     <td>Adreese</td>
                     <td>date de depart</td>
                     <td> heur de depart</td>
                     <td>Wilaya darriver</td>
                     <td>Adresse</td>
                    <td>date arriver</td>
                     <td>heur darriver</td>
                     <td>Camion</td>
                    <td>Tonage</td>
                    <td>prix</td>
                    <td>action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($affiche as $cle=>$ss)
                    {
                        echo "<tr><td>".$ss['wilaya_d']."</td><td>".$ss['commune_d'].", ".$ss['rue_d']."</td><td>".$ss['DATEONLY']."</td><td>".$ss['TIMEONLY']."</td><td>".$ss['wilaya_a']."</td><td>".$ss['commune_a'].", ".$ss['rue_a']."</td><td>".$ss['DATEONLYA']."</td><td>".$ss['TIMEONLYA']."</td><td>".$ss['type_camion']."</td><td>".$ss['tonage']."</td><td>".$ss['prix']."</td><td><button class='btn btn-primary btn-xs' data-toggle='modal' data-target='#myModalNorm' onclick='fset(".$ss['id'].");'>
    reserver
</button></td></tr>";
                        
                    }
                    
                    ?>
                </tbody>
            </table>
                </div>
                </div>
        </div>
        <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Reserver
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form-horizontal" method="post">
                  <div class="form-group">
                      <div class="col-sm10">
                      <input type="text" class="form-control"
                      id="exampleInputEmail1" placeholder="nom du chauffeur" name="cf_name" required/>
                        </div>
                      </div>
                  <div class="form-group">
                     <div class="col-sm10">
                      <input type="text" class="form-control"
                          id="exampleInputPassword1" placeholder="matricul" name="matricul" required/>
                      </div>
                      <input type="hidden" id="x" name="id_annonce" value>
                  </div>
                     <div class="col-sm-offset-5 col-sm-4">
                  <button type="submit" class="btn btn-info btn-lg">reserver</button>
                    </div>
                </form>
                
                
            </div></div></div></div>
    </section>
    
    <!-- Jquery Core Js -->
    <script src="Vue/Assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="Vue/Assets/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="Vue/Assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="Vue/Assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="Vue/Assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="Vue/Assets/admin/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="Vue/Assets/admin/js/demo.js"></script>
    <script>
    function fset(x){
            $("#x").val(x);
            
        }
    </script>
</body>

</html>