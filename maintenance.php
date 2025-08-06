<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nouvameq</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
<link rel="icon" href="https://nouvameq.com/wp-content/uploads/2020/04/nou.png" type="image/png" />  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #e6f7f1, #f4fafd);
      overflow-x: hidden;
    }
    .hero {
      background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/construction datacenter.png');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 30px;
      text-align: center;
      animation: fadeInHero 3s ease;
    }
    @keyframes fadeInHero {
      0% { opacity: 0; transform: translateY(-20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .section-title {
      font-size: 2rem;
      margin-bottom: 30px;
      color: #151137;
      font-weight: bold;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .nav-pills .nav-link {
      font-weight: 600;
      color: #3b86d0;
      border-radius: 50px;
      padding: 10px 25px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .nav-pills .nav-link.active {
      background-color: #3b86d0;
      color: white;
    }
    .split-section {
      padding: 50px 0;
      align-items: center;
    }
    .split-section .text-col {
      padding: 20px 30px;
    }
    .split-section .img-col img {
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .split-section .img-col img:hover {
      transform: scale(1.05);
    }
    /* Alternate image/text alignment */
    .split-section.even .text-col { order: 2; }
    .split-section.even .img-col { order: 1; }

    /* Responsive */
    @media (max-width: 767px) {
      .split-section {
        flex-direction: column !important;
      }
      .split-section .text-col, .split-section .img-col {
        order: unset !important;
        padding: 10px 0;
      }
    }
    footer {
      background: linear-gradient(45deg, #0e2517, #778C7B);
      color: white;
      text-align: center;
      padding: 20px;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <?php include 'widgets/header.php'; ?>

  <header class="hero">
    <h1 class="display-4 animate__animated animate__fadeInDown">Maintenance d’un Data Center : notre point complet sur le sujet</h1>
    <p class="lead animate__animated animate__fadeInUp">La maintenance des data centers est un enjeu crucial pour les entreprises : bon fonctionnement, réduction des coûts, durabilité et impact écologique.</p>
    <div class="mt-4">
      <i class="fas fa-server fa-3x mx-3 animate__animated animate__pulse animate__infinite" style="color:#3b86d0;"></i>
      <i class="fas fa-microchip fa-3x mx-3 animate__animated animate__pulse animate__infinite" style="color:#3b86d0;"></i>
      <i class="fas fa-network-wired fa-3x mx-3 animate__animated animate__pulse animate__infinite" style="color:#3b86d0;"></i>
    </div>
  </header>

  <div class="container py-5">
    <!-- Pills navigation -->
    <ul class="nav nav-pills justify-content-center mb-5" id="maintenanceTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="consiste-tab" data-bs-toggle="pill" data-bs-target="#consiste" type="button" role="tab" aria-controls="consiste" aria-selected="true">
          En quoi ça consiste ?
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="importance-tab" data-bs-toggle="pill" data-bs-target="#importance" type="button" role="tab" aria-controls="importance" aria-selected="false">
          Pourquoi c'est important ?
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="cout-tab" data-bs-toggle="pill" data-bs-target="#cout" type="button" role="tab" aria-controls="cout" aria-selected="false">
          Combien ça coûte ?
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pratiques-tab" data-bs-toggle="pill" data-bs-target="#pratiques" type="button" role="tab" aria-controls="pratiques" aria-selected="false">
          Bonnes pratiques
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="externaliser-tab" data-bs-toggle="pill" data-bs-target="#externaliser" type="button" role="tab" aria-controls="externaliser" aria-selected="false">
          Pourquoi externaliser ?
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="ecologie-tab" data-bs-toggle="pill" data-bs-target="#ecologie" type="button" role="tab" aria-controls="ecologie" aria-selected="false">
          Enjeux écologiques
        </button>
      </li>
    </ul>

    <div class="tab-content" id="maintenanceTabsContent">
      <!-- En quoi ça consiste ? -->
      <div class="tab-pane fade show active" id="consiste" role="tabpanel" aria-labelledby="consiste-tab">
        <div class="d-flex split-section">
          <div class="text-col col-md-6">
            <h2 class="section-title">Maintenance data center : en quoi est-ce que ça consiste ?</h2>
            <p>La maintenance des data centers englobe un ensemble d’opérations visant à garantir la performance, la sécurité et la disponibilité des infrastructures informatiques :</p>
            <ul>
              <li><strong>Maintenance préventive</strong> : contrôles réguliers, nettoyage, vérification du refroidissement, alimentation et logiciels pour anticiper les pannes.</li>
              <li><strong>Maintenance corrective</strong> : remplacement ou réparation rapide des équipements défaillants.</li>
              <li><strong>Surveillance continue</strong> : détection en temps réel des anomalies (température, humidité, serveurs).</li>
              <li><strong>Refroidissement & énergie</strong> : gestion des onduleurs, générateurs et climatisation pour éviter les surchauffes.</li>
              <li><strong>Mises à jour logicielles</strong> : sécurité, efficacité, compatibilité garanties par des mises à jour régulières.</li>
            </ul>
          </div>
          <div class="img-col col-md-6">
            <img src="img/data-centre-maintenance-.jpg" alt="Maintenance Data Center" />
          </div>
        </div>
      </div>

      <!-- Pourquoi c'est important ? -->
      <div class="tab-pane fade" id="importance" role="tabpanel" aria-labelledby="importance-tab">
        <div class="d-flex split-section even">
          <div class="img-col col-md-6">
            <img src="img/importance.jpeg" alt="Importance Maintenance" />
          </div>
          <div class="text-col col-md-6">
            <h2 class="section-title">Pourquoi est-ce important ?</h2>
            <ul>
              <li>Prévenir les pannes et interruptions pour éviter des pertes financières.</li>
              <li>Garantir la sécurité des données sensibles stockées.</li>
              <li>Optimiser la performance et prolonger la durée de vie des équipements.</li>
              <li>Réduire les coûts énergétiques et d’exploitation.</li>
              <li>Respecter les normes et réglementations en vigueur.</li>
              <li>Favoriser l'efficacité énergétique via une maintenance intelligente.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Combien ça coûte ? -->
      <div class="tab-pane fade" id="cout" role="tabpanel" aria-labelledby="cout-tab">
        <div class="d-flex split-section">
          <div class="text-col col-md-6">
            <h2 class="section-title">Combien coûte la maintenance ?</h2>
            <p>Les coûts varient selon plusieurs facteurs :</p>
            <ul>
              <li>La taille et la complexité du data center.</li>
              <li>Le niveau de redondance (générateurs, UPS, double alimentation).</li>
              <li>Les technologies de refroidissement et systèmes de sécurité installés.</li>
              <li>Le niveau de surveillance 24/7 et le personnel impliqué.</li>
              <li>Les investissements en optimisation énergétique.</li>
            </ul>
            <p><em>Estimation indicative :</em></p>
            <ul>
              <li>Maintenance préventive annuelle : <strong>5 000 € à 15 000 €</strong></li>
              <li>Maintenance corrective (en fonction des pannes) : <strong>variable, souvent 1 000 € à 10 000 € par intervention</strong></li>
              <li>Surveillance continue 24/7 : <strong>2 000 € à 8 000 € par mois</strong></li>
              <li>Mises à jour logicielles : <strong>500 € à 3 000 € annuellement</strong></li>
            </ul>
          </div>
          <div class="img-col col-md-6">
            <img src="img/cost.jpg" alt="Coût Maintenance" />
          </div>
        </div>
      </div>

      <!-- Bonnes pratiques -->
      <div class="tab-pane fade" id="pratiques" role="tabpanel" aria-labelledby="pratiques-tab">
        <div class="d-flex split-section even">
          <div class="img-col col-md-6">
            <img src="img/bonnepratique.jpeg" alt="Bonnes pratiques" />
          </div>
          <div class="text-col col-md-6">
            <h2 class="section-title">Bonnes pratiques à adopter</h2>
            <ul>
              <li>Planification de la maintenance avec calendrier clair.</li>
              <li>Surveillance en temps réel (monitoring, alertes).</li>
              <li>Mises à jour régulières (matériel et logiciel).</li>
              <li>Formation continue du personnel IT et sécurité.</li>
              <li>Tests de restauration et de reprise après sinistre.</li>
              <li>Documentation complète et traçabilité des opérations.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pourquoi externaliser ? -->
      <div class="tab-pane fade" id="externaliser" role="tabpanel" aria-labelledby="externaliser-tab">
        <div class="d-flex split-section">
          <div class="text-col col-md-6">
            <h2 class="section-title">Pourquoi externaliser ?</h2>
            <ul>
              <li>Accès à des experts certifiés disponibles 24/7.</li>
              <li>Réduction des coûts fixes internes (recrutement, formation).</li>
              <li>Meilleure adaptation à l’évolution des besoins.</li>
              <li>Accès à des outils de supervision et technologies avancées.</li>
              <li>Optimisation énergétique et de la durabilité des équipements.</li>
            </ul>
          </div>
          <div class="img-col col-md-6">
            <img src="img/externaliser.jpg" alt="Externaliser Maintenance" />
          </div>
        </div>
      </div>

      <!-- Enjeux écologiques -->
      <div class="tab-pane fade" id="ecologie" role="tabpanel" aria-labelledby="ecologie-tab">
        <div class="d-flex split-section even">
          <div class="img-col col-md-6">
            <img src="img/enjeux.jpg" alt="Enjeux écologiques" />
          </div>
          <div class="text-col col-md-6">
            <h2 class="section-title">Les enjeux écologiques</h2>
            <ul>
              <li>Réduction de l’empreinte carbone via un bon refroidissement.</li>
              <li>Allongement de la durée de vie des serveurs par la maintenance.</li>
              <li>Recyclage responsable des composants usés.</li>
              <li>Utilisation d’équipements éco-conçus (Green IT).</li>
              <li>Respect de certifications écologiques (ISO 14001, LEED).</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php include 'widgets/footer.php'?>
</body>
</html>
