<?php
/***** TEST *****
 * add_depense.php
 * 
 * Ajoute une dépense dans la base de données
 */

include('../include/include.php');

$cout 			= $_GET['cout'];
$description 	= $_GET['description'];
$id_categorie	= $_GET['id_categorie'];
$id_user		= $_GET['id_user'];

if (!empty($cout) || !empty($description) || !empty($id_categorie)){
	$connexion = new PDO('mysql:host='.$config['host'].';dbname='.$config['db'], $config['user'], $config['pass']);
	
	$sql_insert_depense = "INSERT INTO easycompta_depense(cout,id_categorie, id_user, description) VALUES('$cout',$id_categorie, $id_user, '$description')";
	$query_insert_depense = $connexion->prepare($sql_insert_depense);
	$query_insert_depense->execute();

	if ($query_insert_depense)
		echo "Insertion effectué";
	else
		echo "Problème Insertion";
}
else
	echo "Usage : ?cout=cout&description=description&id_categorie=id_categorie";
?>