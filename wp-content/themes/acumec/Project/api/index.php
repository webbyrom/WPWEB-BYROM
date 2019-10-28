
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <title>Api Pollution</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


</head>
<body class="fonnd">
    <div class="imgback" img="pollution.jpg" height="100"></div>

    <!-- connexion---->
    <?php


    try
    {
        $result = new PDO('mysql:host=127.0.0.1:3308;dbname=fourelro_api_pollution;charset=utf8', 'root','123');





    //on récupere tout le contenu de la table bdpollution2_5

        $pollution25 = $result->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");


        $res_taux25 = $pollution25->fetch();

    //on récupere tout le contenu de la table bdpollution10

        $pollution10 = $result->query("SELECT * FROM `bdpollution10` WHERE `id` = 11 ");


        $res_taux10 = $pollution10->fetch();


    //on récupere tout le contenu de la table consultation_cardio`

        $cardio = $result->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
        $res_cardio = $cardio->fetch();

    //on récupere tout le contenu de la table consultation_pneumo`

        $pneumo = $result->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");
        $res_pneumo = $pneumo->fetch();

    //on récupere tout le contenu de la table consultation_total`

        $total = $result->query("SELECT * FROM `consultation_total` WHERE `pays` LIKE '%001 fra%' ");
        $res_total = $total->fetch();


    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
    ?>


    <div class="container">

        <div class="text-center ">
            <h1> 
                Impact de la Pollution sur la Santé !
            </h1>
            <span style="float:left;">2001</span><div class="text-center" ></div><span style="float:right;">2013</span>

        </div>
    </div>



    <div class="container">

 <!-- partie pour la carte de france et le selecteur des differentes années-->

        <div class="row"> 
            <div class="text-aligne col-sm-6"> 
                <?php include('fonction_slider.php');?>   
            </div>

    
            <div class="text-aligne col-sm-6">
                <h5> <span class="text-center" id="val_slider"></span>  <!-- Affichage de l'année sélectionnée -->
                </h5>
            </div>

            <input type="range" min="2001" max="2013" step="1" value="2001" id="slider_val" name="slider_val"/>  <!-- curseur de sélection (range)
 -->
            <div id="product_loading"></div> <!-- affichage des 2 cartes de france via l'ajax -->

        </div>  

    </div>




    <!--  récupération de l'année et régéneration de la page -->
    <script>  
        $(document).ready(function(){ 
            $('#slider_val').change(function(){  
                var annee1 = $(this).val();  
                $("#val_slider").text("pour l'année " + annee1);  
                $.ajax({  
                    url:"fonction_slider.php",  
                    method:"POST",  
                    data:{annee1:annee1},  
                    success:function(data){  
                        $("#product_loading").fadeIn(500).html(data);  
                    }  
                });  
            });  
        });  
    </script>  


    <!-- -------------------------------------------------------------
    Fin parti modifiable 
-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>




</body>

</html>
