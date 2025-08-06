<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NOUVAMEQ – Expertise Data Centers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    :root {
      --primary: #003049;
      --secondary: #F77F00;
      --light-bg: #f4f6f9;
      --text-color: #212529;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: var(--light-bg);
      color: var(--text-color);
    }

    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('img/data-center-tunisie-nouvameq.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 140px 20px;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
      color: var(--secondary);
    }

    .section {
      padding: 60px 20px;
    }

    .section-title {
      font-size: 2.2rem;
      font-weight: 600;
      margin-bottom: 30px;
      color: var(--primary);
    }

    .text-muted-custom {
      color: #555;
      line-height: 1.8;
    }

    .icon-box {
      display: flex;
      gap: 20px;
      align-items: center;
      margin-bottom: 25px;
    }

    .icon-box i {
      font-size: 2rem;
      color: var(--secondary);
    }

    .bg-light-section {
      background-color: #f4f0eaff;
    }

    .img-fluid {
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

  
    .btn-orange {
      background-color: var(--secondary);
      color: white;
      border: none;
    }

    .btn-orange:hover {
      background-color: #d46600;
    }

    @media (min-width: 768px) {
      .align-center {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
      }
    }
  </style>
</head>
<body>
<?php include("widgets/header.php"); ?>
  <!-- HERO -->
  <section class="hero">
    <h1>NOUVAMEQ</h1>
    <p class="lead mt-3">Expertise Complète en Data Centers</p>
  </section>

  <!-- SECTION 1 -->
  <section class="section container">
    <div class="align-center row">
      <div class="col-md-6">
        <h2 class="section-title">Notre Expertise Globale</h2>
        <p class="text-muted-custom">
          Chez <strong>NOUVAMEQ</strong>, nous concevons, installons et maintenons des Data Centers performants.
          Nous maîtrisons chaque aspect technique : électricité, climatisation, groupes électrogènes, onduleurs,
          protection incendie, vidéosurveillance, contrôle d’accès, urbanisation, et supervision DCIM.
        </p>
        <div class="icon-box">
          <i class="fas fa-bolt"></i>
          <span>Électricité, Onduleurs, Groupes électrogènes</span>
        </div>
        <div class="icon-box">
          <i class="fas fa-fire-extinguisher"></i>
          <span>Protection incendie & Portes coupe-feu</span>
        </div>
        <div class="icon-box">
          <i class="fas fa-video"></i>
          <span>Vidéosurveillance & Contrôle d’accès</span>
        </div>
      </div>
      <div class="col-md-6">
        <img src="img/dc-power-monitoring.jpg" alt="Data Center" class="img-fluid">
      </div>
    </div>
  </section>

  <!-- SECTION 2 -->
  <section class="section bg-light-section">
    <div class="container align-center row flex-md-row-reverse">
      <div class="col-md-6">
        <h2 class="section-title">Data Centers Mobiles</h2>
        <p class="text-muted-custom">
          NOUVAMEQ conçoit aussi des Data Centers modulaires en conteneur, personnalisables selon vos besoins :
          rapides à déployer, parfaits pour des extensions temporaires ou des sites de secours.
        </p>
        <div class="icon-box">
          <i class="fas fa-truck-moving"></i>
          <span>Déploiement rapide sur site ou en backup</span>
        </div>
        <div class="icon-box">
          <i class="fas fa-cubes"></i>
          <span>Modules personnalisables et évolutifs</span>
        </div>
      </div>
      <div class="col-md-6">
        <img src="img/10.jpeg" alt="Container Data Center" class="img-fluid">
      </div>
    </div>
  </section>

  <!-- SECTION 3 -->
  <section class="section container text-center">
    <h2 class="section-title">Un Service Client de Qualité</h2>
    <p class="text-muted-custom mb-4">
      Nos équipes commerciales et techniques sont à votre écoute pour vous accompagner de manière personnalisée.<br>
      Avec NOUVAMEQ, vous bénéficiez d’un partenariat fiable, agile et orienté résultats.
    </p>
    <a href="mailto:contact@nouvameq.com?subject=Demande%20de%20contact" class="btn btn-orange btn-lg px-4">
      <i class="fas fa-envelope"></i> Contactez-nous
    </a>
  </section>

<?php include("widgets/footer.php"); ?>

</body>
</html>
