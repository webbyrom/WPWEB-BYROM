<?php  
 
   //on récupére tout le contenu de la table consultation_total`


 if(isset($_POST["annee1"]))  
 {  

  //récupére année
     $valeur_annee= $_POST["annee1"]; 




//connexion a la base 
     $bdd = new PDO('mysql:host=localhost:3308;dbname=fourelro_api_pollution;charset=utf8', 'root','123');
    

    
    //on récupére tout le contenu de la table bdpollution2_5
    
    $pollution25 = $bdd->query("SELECT * FROM `bdpollution2_5` WHERE `id` = 11 ");
    
    
    $res_taux25 = $pollution25->fetch();

    $veriftaux25=$res_taux25[$valeur_annee];
    
    //on récupére tout le contenu de la table bdpollution10
    
    $pollution10 = $bdd->query("SELECT * FROM `bdpollution10` WHERE `id` = 11 ");
    
    
    $res_taux10 = $pollution10->fetch();

    $veriftaux10=$res_taux10[$valeur_annee];
    
    
    //on récupére tout le contenu de la table consultation_cardio`
    
    $cardio = $bdd->query("SELECT * FROM `consultation_cardio` WHERE `pays` LIKE '%001 France entière%' ");
    $res_cardio = $cardio->fetch();

    //on récupére tout le contenu de la table consultation_pneumo`
    
    $pneumo = $bdd->query("SELECT * FROM `consultation_pneumo` WHERE `pays` LIKE '%001 France entière%' ");
    $res_pneumo = $pneumo->fetch();

    //on récupére tout le contenu de la table consultation_total`
    
    $total = $bdd->query("SELECT * FROM `consultation_total` WHERE `pays` LIKE '%001 fra%' ");
    $res_total = $total->fetch();



    echo "Carte pour les particules 2,5 ";

    //condition si mp2.5 est inferieur a 10 vert 07FF3D
    if ($veriftaux25 < 10) {
    
        echo "<img src='img/francegreen.png'>";

    }
    //condition si mp2.5 est superieur a 10 et inferieur a 15 orange FFD800
    else if ($veriftaux25 >= 10 && $veriftaux25 < 15) {
        echo "<img src='img/franceorange.png'>";
    }
    //condition si mp2.5 est superieur a 15 et inferieur 25 rouge FF1418
    else if ($veriftaux25 >= 15 && $veriftaux25 < 25) {
        echo "<img src='img/francered.png'>";
    }
    //condition si mp2.5 est superieur 25 et inferieur 35 gris  C0C0C0
    else if ($veriftaux25 >= 25 && $veriftaux25 < 35) {
        echo "<img src='img/francegrey.png'>";
    }
    //condition si mp2.5 est superieur 35 noire   000000
    else if ($veriftaux25 >= 35 ) {
        echo "<img src='img/francenoire.png'>";
    }


    echo "Carte pour les particules 10 ";


	//condition si mp10 est inferieur a 20 vert 07FF3D
	if ($veriftaux10 < 20) {
	
		echo "<img src='img/francegreen.png'>";

	}
	//condition si mp10 est superieur a 20 et inferieur a 30 orange FFD800
	else if ($veriftaux10 > 20 && $veriftaux10 < 30) {
		echo "<img src='img/franceorange.png'>";
	}
	//condition si mp10 est superieur a 30 et inferieur 50 rouge FF1418
	else if ($veriftaux10 > 30 && $veriftaux10 < 50) {
		echo "<img src='img/francered.png'>";
	}
	//condition si mp10 est superieur 50 et inferieur 70 gris  C0C0C0
	else if ($veriftaux10 > 50 && $veriftaux10 < 70) {
		echo "<img src='img/francegrey.png'>";
	}
	//condition si mp10 est superieur 70 noire   000000
	else if ($veriftaux10 > 70 ) {
		echo "<img src='img/francenoire.png'>";
	}
?>
    
    <!-- Affichage de légende  -->

<div class="row">


<div class='container-fluid news_center py-5'>
    <?php
    echo "
    <ul>

        <li class='lvert'>Peu pollué</li>
        <li class='lorange'>Pollué</li>               
        <li class='lrouge'>Très pollué</li>
        <li class='lgris'>Taux Dangereux</li>
        <li class='lnoire'>Taux Mortel</li>

    </ul>";

?>
 <!-- Les différents tableau  -->
<div class="col-md-6 no-gutter py-5">

 <table>
<tr class="text-center">
    <td style="tdborderless"></td>
    <td>Taux particules 2.5</td>
    <td>Taux particules 10</td>   
</tr> 

<tr class="text-center">
    <td >Taux moyen de l'OMS</td>
    <td>10</td>
    <td>20</td>
</tr>

<tr class="text-center">
    <td>Taux réel relevé</td>
    <td><?php echo $res_taux25[$valeur_annee]; ?></td>
    <td><?php echo $res_taux10[$valeur_annee]; ?></td>
</tr>

</table>
</div>

<div class="col-md-6 no-gutter py-5">
<table class="text-center">
<tr>
    <td style="tdborderless"> </td>
    <td>Pneumologie</td>
    <td>Cardiologie</td>
    <td>Total</td>
</tr>
    
<!-- Calcul pour le champ total
 -->
<?php $val1= $res_cardio[$valeur_annee];
         $val2= $res_pneumo[$valeur_annee];  
         $res= $val1+$val2;
         ?>

<tr>
   <td>Consultations</td>
   <td><?php echo $res_cardio[$valeur_annee]; ?></td>
   <td><?php echo $res_pneumo[$valeur_annee]; ?></td>
   <td><?php echo $res ?></td>
</tr>

</table>
</div>

</div>

<?php

 } 

?>
