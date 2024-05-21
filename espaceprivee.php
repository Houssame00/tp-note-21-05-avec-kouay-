<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <img src="nvss.png" alt="">
        <a class="navbar-brand" href="#" id="logo">Espace privé</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" id="soustitle">Bonjour, <?php echo "BAHMOU HOUSSAM"; ?> </a>
            </li> -->
            <li class="nav-item">
              <form action="authentifier.php" method="POST">
                <button class="nav-link btn btn-danger mx-5" type="submit" id="soustitle">Sign Out</button>
              </form>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

    
    </div>

    <?php
        date_default_timezone_set('Africa/Casablanca');

        $currentHour = date('G');

        if ($currentHour >= 6 && $currentHour < 18) {
            echo "<h1  style='margin-left:350px'> Bonjour <strong>ALLALI AHMED </strong> </h1>";
        } else {
            echo "<h1> Bonsoir <strong>ALLALI AHMED </strong> </h1>";
        }
?>

    <form action="insererStagaire.php" method="post">
        <button type="submit" class="btn btn-success mx-5">Ajouter</button>
    </form>


<table class="table table-striped mx-5 container">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de Naissance</th>
        <th>Photo Profil</th>
        <th>Filiere</th>
        <th>Modifier</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>El Kouay</td>
        <td>Mohammed</td>
        <td>2006-01-18</td>
        <td><img src="kouaaay.jpeg" alt="" class="img"></td>
        <td>Développemnt Digital</td>
        <td><button>Modifier</button></td>
        <td><button>Supprimer</button></td>
      </tr>
      <tr>
        <td>Bahmou</td>
        <td>Houssam</td>
        <td>2005-09-06</td>
        <td><img src="houssam.jpeg" alt="" class="img"></td>
        <td>Cyber Sécurité</td>
        <td><button>Modifier</button></td>
        <td><button>Supprimer</button></td>
      </tr>
      <tr>
        <td>El Louzi </td>
        <td>Abdellatif</td>
        <td>2003-06-05</td>
        <td><img src="louzi.jpg" alt="" class="img"></td>
        <td>jassooss</td>
        <td><button>Modifier</button></td>
        <td><button>Supprimer</button></td>
      </tr>
      <tr>

      </tr>
      <?php foreach ($Stagiaire as $stagiaire) : ?>
        <tr>
                <td><?php echo $stagiaire['idstagiaire']; ?></td>
                <td><?php echo $stagiaire['nom']; ?></td>
                <td><?php echo $stagiaire['prenom']; ?></td>
                <td><?php echo $stagiaire['dateNaissance']; ?></td>
                <td><?php echo $stagiaire['photoProfil']; ?></td>
                <td><?php echo $stagiaire['idFiliere']; ?></td>
                <td>
                    <a href="supprimer-voiture.php?matricule=<?php echo $voiture['Matricule']; ?>" onclick="return confirm('Are you sure ?')">Supprimer</a>
                    <a href="modifier-voiture.php?matricule=<?php echo $voiture['Matricule']; ?>" >modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>






  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>