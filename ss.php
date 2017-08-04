

<?php include_once('wilayas.php');
    include_once('communes.php');?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
       <script type="text/javascript" src="Vue/Assets/jquery-1.11.3.min.js"></script>
         <script langage="text/javascript">
           $('document').ready(function(){

             var tab=<?php echo json_encode($wilayas);?>;
             var tab1=<?php echo json_encode($communes);?>;
                $.each(tab,function(cle,val){
			$("#wilaya").append($('<option>', {
    value: val.id,
    text: val.nom
            }));
                                });
           
           
             $("#wilaya").change(function(){
                 $.each(tab1,function(cle,val){
                     if(val.wilaya_id==$("#wilaya").val()){
			$("#commune").append($('<option>', {
    value: val.id,
    text: val.nom
            }));};
                                });
                 
                 
             });
           });
           
        </script>

    </head>
<body>
    <select id="wilaya"></select>
    <select id="commune"></select>
    <?php echo $wilayas[0]["nom"]; ?>
</body>

    </html>

<?php
                    while($ss=$affiche->fetch()){
                        echo "<tr><td>".$ss['wilaya_d']."</td><td>".$ss['commune_d'].", ".$ss['rue_d']."</td><td>".$ss['DATEONLY']."</td><td>".$ss['TIMEONLY']."</td><td>".$ss['wilaya_a']."</td><td>".$ss['commune_a'].", ".$ss['rue_a']."</td><td>".$ss['DATEONLYA']."</td><td>".$ss['TIMEONLYA']."</td><td>".$ss['type_camion']."</td><td>".$ss['tonage']."</td><td>".$ss['prix']."</td><td>yeah</td></tr>";
                        
                    }
                    
                    ?>
