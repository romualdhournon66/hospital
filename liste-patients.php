<?php
include 'model/patients.php';
include 'controller/liste-patientsCtrl.php';
include 'header.php';
?>
<h1>Exercice 2</h1>
<p>Créer une page liste-patients.php et y afficher la liste des patients. 
    Inclure dans la page, un lien vers la création de patients.</p>
<?php
try {
    //On se connect à la base de donnée
    $bdd = new PDO('mysql:host=hospital;dbname=hospitalE2N;charset=utf8', 'romuald', '210673');
} catch (Exception $e) {
    //En cas d'erreur, on affiche l'erreur (code ci-dessous) et on n'execute rien d'autre. On stop les requettes suivantes
    die('Erreur : ' . $e->getMessage());
}

//Ci-dessous on affiche le contenu de la table clients
$reponse = $bdd->query('SELECT * FROM `patients`');
// On affiche chaque entrée une a une
?>
<table>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date anniverssaire</th>
            <th scope="col">Mail</th>
            <th scope="col">Téléphone</th>
        </tr>
    </thead>
    <?php while ($data = $reponse->fetch()) { ?>
        <tbody>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['lastname']; ?></td>
                <td><?= $data['firstname']; ?></td>
                <td><?= $data['birthdate']; ?></td>
                <td><?= $data['mail']; ?></td>
                <td><?= $data['phone']; ?></td>
            </tr>
        </tbody>
    <?php } ?>
</table>
<?php
$reponse->closeCursor(); //Termine le traitement de la requête.
?>
<?php
include 'footer.php';
?>