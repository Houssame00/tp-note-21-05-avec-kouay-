<?php

require_once 'connexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['idstagiaire']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dateNaissance']) || empty($_POST['photoProfil'])  || empty($_POST['idFiliere'])) {
        $message = "SVP saisir tous les champs";
    } else {
        $message = "";
    }



$idstagiaire = $_POST['idstagiaire'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateNaissance = $_POST['dateNaissance'];
$photoProfil = $_POST['photoProfil'];
$idFiliere = $_POST['idFiliere'];



$sql = "INSERT INTO stagiaire (idstagiaire, nom, prenom, dateNaissance, photoProfil, idFiliere) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->execute([$idstagiaire, $nom, $prenom, $dateNaissance, $photoProfil, $idFiliere]);



$sql = "SELECT * FROM stagiaire";
$stmt = $conn->query($sql);
$Stagiaire = $stmt->fetchAll(PDO::FETCH_OBJ);
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1 style="margin-left:150px">Ajouter un Stagiaire</h1>
    <div class="container p-5">
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger"> les données d’authentification sont obligatoires.</div>
        <?php } ?>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input name="idstagiaire" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOM</label>
                <input name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PRENOM</label>
                <input type="prenom" name="prenom" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date de Naissance</label>
                <input type="date" name="dateNaissance" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Photo De Profile</label>
                <input type="file" name="photoProfil" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3 form-check">
                <label for="artilc">Filiere</label>
                <select name="idFiliere" id="idFiliere">
                    <option value="dd">Développement Digital</option>
                    <option value="infra">Infrastucture Digital</option>
                    <option value="cyber">Cyber Securite</option>
                    <option value="elec">Electricite</option>
                    <option value="mecha">Mechanique</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-75">Ajouter</button>


        </form>


     

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>