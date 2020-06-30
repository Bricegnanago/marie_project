<?php

//check_admin_login.php

include('database_connexion.php');

// session_start();

sleep(1);

$numero = '';
$nom = '';
$prenom = '';
$sexe = '';
$dateDeNaissance = '';
$heureDeNaissance = '';
$lieuDeNaissance = '';
$lieuDeclaration = '';
$dateDeclaration = '';
$identitePere = '';
$professionPere = '';
$identiteMere = '';
$professionMere = '';

$error_sexe = ''; //ok
$error_numero = ''; //ok
$error_nom = ''; //ok
$error_prenom = ''; //ok
$error_dateDeNaissance = ''; //ok
$error_heureDeNaissance = ''; //ok
$error_lieuDeNaissance = ''; //ok
$error_lieuDeclaration = ''; //ok
$error_dateDeclaration = ''; //ok
$error_identitePere = ''; //ok
$error_professionPere = '';
$error_identiteMere = '';
$error_professionMere = '';
$error = 0;

$output = array();
$data = array();
if (empty($_POST["numero"])) {
	$error_numero = 'Un numéro est requis !';
	$error++;
} else {
	$numero = $_POST["numero"];
}

if (empty($_POST["nom"])) {
	$error_nom = 'nom est requis';
	$error++;
} else {
	$nom = $_POST["nom"];
}

if (empty($_POST["prenom"])) {
	$error_prenom = 'Veuillez saisir au moins un prenom !';
	$error++;
} else {
	$prenom = $_POST["prenom"];
}
if (isset($_POST["genre"])) {
	$sexe = $_POST["genre"];
}

if (empty($_POST["dateDeNaissance"])) {
	$error_dateDeNaissance = 'Veuillez renseigner la date de naissance';
	$error++;
} else {
	$dateDeNaissance = $_POST["dateDeNaissance"];
}

if (empty($_POST["heureDeNaissance"])) {
	$error_heureDeNaissance = "Veuillez renseigner l'heure de naissance !";
	$error++;
} else {
	$heureDeNaissance = $_POST["heureDeNaissance"];
}
if (empty($_POST["lieuDeNaissance"])) {
	$error_lieuDeNaissance = "Veuillez renseigner le lieu de naissance !";
	$error++;
} else {
	$lieuDeNaissance = $_POST["lieuDeNaissance"];
}

if (empty($_POST["lieuDeclaration"])) {
	$error_lieuDeclaration = "Veuillez renseigner le lieu de déclaration !";
	$error++;
} else {
	$lieuDeclaration = $_POST["lieuDeclaration"];
}

if (empty($_POST["dateDeclaration"])) {
	$error_dateDeclaration = "Veuillez renseigner date de declaration!";
	$error++;
} else {
	$dateDeclaration = $_POST["dateDeclaration"];
}

if (empty($_POST["identitePere"])) {
	$error_identitePere = "Veuillez renseigner le nom et le prénom du père!";
	$error++;
} else {
	$identitePere = $_POST["identitePere"];
}

if (empty($_POST["professionPere"])) {
	$error_professionPere = "Veuillez renseigner la profession du père!";
	$error++;
} else {
	$professionPere = $_POST["professionPere"];
}

if (empty($_POST["identiteMere"])) {
	$error_identiteMere = "Veuillez renseigner le nom et le prénom du père!";
	$error++;
} else {
	$identiteMere = $_POST["identiteMere"];
}

if (empty($_POST["professionMere"])) {
	$error_professionMere = "Veuillez renseigner la profession de la mère!";
	$error++;
} else {
	$professionMere = $_POST["professionMere"];
}



if ($error == 0) {
	$query = "
	SELECT * FROM personne
	WHERE numero='" . $numero . "' OR nom='" . $nom . "'
	";

	$statement = $connect->prepare($query);

	if ($statement->execute()) {
		$total_row = $statement->rowCount();
		if ($total_row == 0) {
			$data = array(
				':numero' => $_POST["numero"],
				':nom'  => $_POST["nom"],
				':prenom'  => $_POST["prenom"],
				':genre' => $_POST["genre"],
				':dateDeNaissance' => $_POST['dateDeNaissance'],
				':heureDeNaissance' => $_POST['heureDeNaissance'],
				':lieuDeNaissance' => $_POST['lieuDeNaissance'],
				':lieuDeclaration' => $_POST['lieuDeclaration'],
				':dateDeclaration' => $_POST['dateDeclaration'],
				':identitePere' => $_POST['identitePere'],
				':professionPere' => $_POST['professionPere'],
				':identiteMere' => $_POST['identiteMere'],
				':professionMere' => $_POST['professionMere']
			);


			$sql = 'INSERT INTO personne(personne_id, numero, nom, prenom, genre, dateDeNaissance, heureDeNaissance, lieuDeNaissance, lieuDeclaration, dateDeclaration, identitePere, professionPere, identiteMere, professionMere) 
										VALUES(NULL, :numero, :nom, :prenom, :genre, :dateDeNaissance, :heureDeNaissance, :lieuDeNaissance, :lieuDeclaration, :dateDeclaration, :identitePere, :professionPere, :identiteMere, :professionMere)';

			$statement2 = $connect->prepare($sql);
			$statement2->execute($data);

			$output = array(
				'success'  => 'Données ajoutées avec succès !',
			);
		} else {
			$error_numero = 'Ce numero existe de dejà';
			$error++;
		}
	}
}

if ($error > 0) {
	$output = array(
		'error'		=>	true,
		'error_numero' => $error_numero,
		'error_nom'	=>	$error_nom,
		'error_prenom'	=>	$error_prenom,
		'error_dateDeNaissance' => $error_dateDeNaissance,
		'error_heureDeNaissance' => $error_heureDeNaissance,
		'error_lieuDeNaissance' => $error_lieuDeNaissance,
		'error_lieuDeclaration' => $error_lieuDeclaration,
		'error_dateDeclaration' => $error_dateDeclaration,
		'error_identitePere' => $error_identitePere,
		'error_professionPere' => $error_professionPere,
		'error_identiteMere' => $error_identiteMere,
		'error_professionMere' => $error_professionMere,
	);
	// echo "Sexe : ".$_POST["sexe"]."\n";
} else {
	$output = array(
		'success'		=>	'Données ajoutées avec succès !',
		'numero' => $numero,
		'nom'	=>	$nom,
		'prenom'	=>	$prenom,
		'dateDeNaissance' => $dateDeNaissance,
		'heureDeNaissance' => $heureDeNaissance,
		'lieuDeNaissance' => $lieuDeNaissance,
		'lieuDeclaration' => $lieuDeclaration,
		'dateDeclaration' => $dateDeclaration,
		'identitePere' => $identitePere,
		'professionPere' => $professionPere,
		'identiteMere' => $identiteMere,
		'professionMere' => $professionMere,
	);
}

echo json_encode($output);
