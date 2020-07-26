<html>
<head>
<title>Resultat</title>
<link rel="stylesheet" href="tp3.css">
<h1>Hello World</h1>
</head>
<body>
<?php
echo "<label>Bonjour ".$_POST['prenom']." ".$_POST['nom']."</label> <br>";
echo "<label>Tu as ".$_POST['age']." ans</label><br>";
echo "<label>Tu es ";
$genre=$_POST['genre'];
if ($genre==homme){
    $genre="un ".$_POST['genre'];
}else if ($genre==femme){
    $genre="une ".$_POST['genre'];
}else{ $genre="non binaire";}
echo $genre."</label><br>";


$persoM=$_POST['personage'];
$persoF=$_POST['pers_fem'];

echo "<label>Tes personnages préférés sont : </label><br><ul>";
if($persoM==autre){
    $persoM=$_POST['saisie_autre_mal'];
}
if($persoF==autre){
    $persoF=$_POST['saisie_autre_fem'];
}
echo"<li><label>".$persoM."</label></li>";
echo"<li><label>".$persoF."</label></li></ul>";
?>
</body>
</html>