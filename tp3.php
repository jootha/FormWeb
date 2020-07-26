<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="tp3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<div id="main_div">
	    <div id="div_img">
	    <img src="https://www.geekplay.fr/wp-content/uploads/2018/09/steam-profiter-dune-reduction-jusqua-85-sur-la-franchise-the-witcher-81424.jpg">
	    </div>
	    <h1>Qui es-tu WITCHEUR ?</h1>
            
            
	    <form method=post action="pageResultat.php">
	      <h3 id="quelques_infos">Quelques informations sur toi !</h3>
	      <br>
	      <label> Ton prenom</label>
	      <input type="text" id="uprenom" name="prenom" 
	      placeholder="" size=30>
	      <br>
	      <label> Ton nom</label>
	      <input type="text" id="unom" name="nom" onkeypress="passeAuRouge()"
	      placeholder="" size=30>
	      <br>
	      <label> Ton age</label>
	      <input type="number" id="unage" name="age" 
	      placeholder="" size=10>
	      <br>
	      <label> Genre</label>
	      <input type="radio" id="homme" name="genre" 
                     placeholder="" size=30 value="homme">
	      homme
	      <input type="radio" id="femme" name="genre" 
                     placeholder="" size=30 value="femme">
	      femme
	      <input type="radio" class='autre' id="autre" name="genre" 
                     placeholder="" size=30 value="autre">
	      autre
	      
	      <h3 id="quelques_infos">Quels sont tes personnages préférés ?</h3>
	      <br>
	      <label> Quel est ton personage mâl préféré ?</label>
	      <input type="radio" id="Géralt" name="personage" 
                     placeholder="" size=30 checked value="Géralt">
	      Gérar de la Rivier
	      <input type="radio" id="Jasquier" name="personage" 
	      placeholder="" size=30 value="Jasquier">
	      Jasquier
              <input type="radio" id="Zoltan" name="personage" placeholder="" size=30 value="Zoltan">
	      Zoltan
	      <input type="radio" id='autreRadio' class="autre" name="personage" value="autre"
                     placeholder="" size=30 value="autre">
	      Autre
	      <textarea class="saisie_autre" id="saisie_autre_mal" name="saisie_autre_mal" rows="1" cols="20">Votre réponse ?
	      </textarea> 
	     <br>	
	      <label> Préfères-tu Triss ou Yennefer ?</label>
	      <select id='selectFem' name="pers_fem">
		<option value="Triss">Triss</option>
		<option value="Yennefer">Yennefer</option>
		<option value="both">Pourquoi Pas les 2 ?</option>
		<option id='autreSelect' class='autre' value="autre" >Autre</option>
	      </select>
	      <textarea class="saisie_autre" id="saisie_autre_fem" name="saisie_autre_fem"rows="1" cols="20">Votre réponse ?
	      </textarea>
	      <br><br>
	      
	      <button id="valider">valider</button>
	    </form>	    
    <div class=aquarium >
      	    <img id='poisson' style='position:absolute; width:5%; padding:7%'
	  src='5afeab156554160a79bea233.png'>
	  
      	   <img id='acq'  src="https://lh6.googleusercontent.com/proxy/rAYp-mfuQgBFmkIqTbb4jyf0jRHws0bFFuRlolt_q0ZLZOOxsnUYGXalOpOxStzcaUcaaS1-D33iXLbMgICn_U96Eh4Uhkg">
	 </div>
    </div>
<script src="tp3.js"></script>
</body>
</html>
