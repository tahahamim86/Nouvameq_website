<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    <title>Nouvameq | Data center et onduleur Tunisie</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="https://nouvameq.com/xmlrpc.php" />
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<link rel="icon" href="https://nouvameq.com/wp-content/uploads/2020/04/nou.png" type="image/png" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


          <?php include "widgets/header.php"; ?>
 



        </div>
<section class="hero-datacenter">
  <div class="hero-container">
    <div class="hero-text">
      <h1 class="hero-title">Aménagement des salles des datacenters</h1>
      <p class="hero-description">
        Chez <strong>NOUVAMEQ</strong>, nous accompagnons nos clients à chaque étape du cycle de vie de leur data center, avec des solutions intelligentes, évolutives et parfaitement adaptées à leurs enjeux technologiques. De la conception à l’évolution continue, notre approche intégrée garantit performance, fiabilité et valeur ajoutée durable pour vos infrastructures.
      </p>
<a href="#services" class="hero-scroll">
  Découvrez nos activités <i class="fas fa-arrow-down"></i>
</a>
    </div>
  </div>
</section>
<style>
  .hero-datacenter {
  background: linear-gradient(to right, rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), 
              url('img/adcd5.jpg') center/cover no-repeat;
  color: #ffffff;
  padding: 120px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-container {
  max-width: 1000px;
  text-align: center;
  padding: 40px 20px;
  background:#58585872;
    border-radius:25px 25px;

}

.hero-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 25px;
  letter-spacing: -0.5px;
  color:white;
}

.hero-description {
  font-size: 1.25rem;
  line-height: 1.8;
  margin-bottom: 40px;
  color: #f0f0f0;
}
.hero-scroll {
  font-size: 1.1rem;
  color: #ffffff;
  font-weight: 500;
  margin-top: 20px;
  animation: bounce 2s infinite, borderPulse 2s infinite;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  padding: 10px 18px;
  border: 2px solid #00a6fb;
  border-radius: 6px;
  transition: background 0.3s ease;
}

.hero-scroll i {
  font-size: 1.2rem;
}

/* Animation de rebond */
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(5px);
  }
  60% {
    transform: translateY(3px);
  }
}

/* Animation pulsation de bordure */
@keyframes borderPulse {
  0% {
    box-shadow: 0 0 0 0 rgba(0, 166, 251, 0.7);
  }
  70% {
    box-shadow: 0 0 0 8px rgba(0, 166, 251, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(0, 166, 251, 0);
  }
}


</style>

        <!-- Services Start -->

      


 <style>
 

    .container-v {
      position: relative;
      height: 100vh;
      display: flex;
    }

    .scroll-container {
      position: relative;
      z-index: 2;
      flex: 1;
      height: 100vh;
      overflow-y: auto;
      scroll-snap-type: y mandatory;
      scroll-behavior: smooth;
    }

    .panel {
      scroll-snap-align: start;
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-left: 60px;
      position: relative;
      border-left: 6px solid transparent;
      transition: border-color 0.3s ease;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .panel::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 0;
      transition: background 0.3s ease;
    }

    .panel.active {
      border-color: #facc15;
    }

    .panel.active::before {
      background: rgba(0,0,0,0.35);
    }

    .panel-content {
      position: relative;
      max-width: 600px;
      z-index: 1;
    }

   .container-v h2 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #facc15;
      font-weight: 700;
    }

   .container-v p {
      font-size: 1.25rem;
      line-height: 1.6;
      color: #ddd;
      max-width: 600px;
    }

    .scroll-indicator {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 14px;
      z-index: 10;
    }

    .indicator-dot {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background: #555;
      cursor: pointer;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .indicator-dot.active {
      background: #facc15;
      box-shadow: 0 0 10px #facc15;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .panel {
        padding-left: 30px;
        justify-content: center;
        text-align: center;
      }
      .panel-content {
        max-width: 90vw;
      }
     .container-v h2 {
        font-size: 2.2rem;
      }
     .container-v p {
        font-size: 1rem;
      }
      .scroll-indicator {
        display: none;
      }
    }
    /* Tablettes : 769px à 992px */
@media (max-width: 992px) {
  .panel {
    padding-left: 40px;
  }

   .container-v h2 {
    font-size: 2.5rem;
  }

    .container-v p {
    font-size: 1.1rem;
  }

  .scroll-indicator {
    left: 10px;
  }

  .indicator-dot {
    width: 12px;
    height: 12px;
  }
}

/* Petits téléphones : <576px */
@media (max-width: 576px) {
  .container-v {
    flex-direction: column;
  }

  .scroll-container {
    scroll-snap-type: none; /* Permet le scroll libre sur très petits écrans */
  }

  .panel {
    padding: 20px;
    text-align: center;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-left: none;
    border-top: 6px solid transparent;
  }

  .panel.active {
    border-top-color: #facc15;
  }

   .container-v h2 {
    font-size: 1.8rem;
  }

   .container-v p {
    font-size: 0.95rem;
    line-height: 1.5;
  }

  .scroll-indicator {
    display: none;
  }

  .panel-content {
    padding: 0 15px;
  }
}

/* Grands écrans : >1200px */
@media (min-width: 1200px) {
  .panel-content {
    max-width: 800px;
  }

  .container-v h2 {
    font-size: 3.5rem;
  }

   .container-v p {
    font-size: 1.35rem;
  }
}

  </style>



  <div class="container-v" id="services">

    <div class="scroll-container" id="scroll-container">
      
      <section class="panel active" id="panel-1" style="background-image: url('img/Efficient-cooling-for-data-centers.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Climatisation</h2>
          <p>Nos systèmes de climatisation avancés
utilisent des compresseurs inverter pour une
régulation précise de la température et une
efficacité énergétique optimale. L’air est
soufflé de manière personnalisée, avec des
armoires de précision adaptées pour une
distribution frontale sous faux plancher et par
le haut, répondant ainsi aux besoins
spécifiques de chaque espace.</p>
        </div>
      </section>

      <section class="panel" id="panel-2" style="background-image: url('img/alimentation.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Onduleur</h2>
          <p>Nous proposons des onduleurs rackables ou
standards pour assurer une alimentation
électrique interrompue et protéger vos
équipements contre les fluctuations de
courant</p>
        </div>
      </section>

      <section class="panel" id="panel-3" style="background-image: url('img/monitoring-data_center.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Monitoring</h2>
          <p>Nos systèmes de monitoring avancés
permettent une surveillance constante de
vos équipements, avec une option de
monitoring à distance pour une gestion
proactive et une intervention rapide, même
à distance. Cela garantit une détection
immédiate des anomalies et une réponse
efficace</p>
        </div>
      </section>

      <section class="panel" id="panel-4" style="background-image: url('img/video-surveillance.jpg')">
        <div class="panel-content">
          <h2>Vidéo-surveillance</h2>
          <p>Nos systèmes de vidéosurveillance sont de
haute haute définition avec analyse
intelligente des images pour détecter les
comportements suspects et générer des
alertes en temps réel. Nos systèmes
assurent un enregistrement sécurisé des
vidéos, permettant une consultation facile
en cas d'incidents.</p>
        </div>
      </section>
            <section class="panel" id="panel-5" style="background-image: url('img/incendie.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Détection et Extinction 
Incendie</h2>
          <p>Nos systèmes de détection incendie avancés
capables d'identifier rapidement toute
menace potentielle grâce à des capteurs de
fumée et de chaleur. En cas de détection,
notre solution d'extinction automatique
utilise des agents d'extinction adaptés pour
neutraliser les incendies efficacement,
garantissant ainsi une protection optimale
de vos installations et de vos données.</p>
        </div>
      </section>
         <section class="panel" id="panel-6" style="background-image: url('img/rackdc.jpg')">
        <div class="panel-content" >
          <h2>Confinement des Racks</h2>
          <p>Nos systèmes optimisent la gestion thermique
et la sécurité dans les datacenters grâce à un
confinement efficace des racks. Nous
installons des solutions de confinement
adaptées pour séparer les flux d’air chaud et
froid, améliorant ainsi l'efficacité énergétique
et la performance des équipements tout en
réduisant le risque de surchauffe. Ce système
assure une circulation d'air optimale et une
protection accrue pour vos installations IT.</p>
        </div>
      </section>
           <section class="panel" id="panel-7" style="background-image: url('img/armoire\ electrique.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Câblages Électriques</h2>
          <p>Nos installation de câblage électrique
robuste et bien organisé, essentielle pour
bon fonctionnement de vos infrastructures
IT. Nous garantissons une gestion
professionnelle des câbles avec des chemins
de câbles sécurisés, un routage clair et
conformité aux normes de sécurité.
permet une distribution fiable de l'énergie
minimise les risques de pannes et facilite
opérations de maintenance.</p>
        </div>
      </section>
            <section class="panel" id="panel-8" style="background-image: url('img/cablage\ reseaux.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Câblages Réseaux</h2>
          <p>Nos solutions de câblage réseau de haute
qualité pour garantir une connectivité fiable
et performante. Nous assurons une
installation soignée avec des câbles
structurés et des équipements de réseau
conformes aux normes industrielles,
permettant une transmission de données
rapide et stable. Notre approche
professionnelle optimise la gestion du
réseau et facilite les opérations de mise à
jour et de maintenance.</p>
        </div>
      </section>
                <section class="panel" id="panel-8" style="background-image: url('img/groupelectrog.jpg')">
        <div class="panel-content" style="background-color: rgba(103, 102, 102, 0.618);">
          <h2>Groupe Électrogène</h2>
          <p>Nos groupes électrogéne garantit la continuité de
vos opérations avec des groupes électrogènes de
secours fiables et performants. Nos solutions sont
conçues pour fournir une alimentation électrique
instantanée en cas de coupure de courant,
assurant ainsi une protection continue pour vos
équipements critiques. Nous installons et
maintenons des groupes électrogènes adaptés aux
besoins spécifiques de votre infrastructure,
garantissant une réponse rapide et efficace en
toutes circonstances.</p>
        </div>
      </section>
    </div>

    <div class="scroll-indicator" id="scroll-indicator">
      <div class="indicator-dot active" data-target="panel-1"></div>
      <div class="indicator-dot" data-target="panel-2"></div>
      <div class="indicator-dot" data-target="panel-3"></div>
      <div class="indicator-dot" data-target="panel-4"></div>
      <div class="indicator-dot" data-target="panel-5"></div>
      <div class="indicator-dot" data-target="panel-6"></div>
      <div class="indicator-dot" data-target="panel-7"></div>
      <div class="indicator-dot" data-target="panel-8"></div>
      <div class="indicator-dot" data-target="panel-9"></div>

    </div>

  </div>

        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=GsNVrF9UEAQ" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


<section class="services-section">
  <h2 class="section-title">Vos Bénéfices avec <span>NOUVAMEQ</span></h2>

  <div class="benefits-grid">
    <div class="benefit-item">
      <i class="fas fa-chart-line"></i>
      <h4>Efficacité opérationnelle</h4>
    </div>
    <div class="benefit-item">
      <i class="fas fa-euro-sign"></i>
      <h4>Rentabilité accrue</h4>
    </div>
    <div class="benefit-item">
      <i class="fas fa-server"></i>
      <h4>Disponibilité des installations</h4>
    </div>
    <div class="benefit-item">
      <i class="fas fa-shield-alt"></i>
      <h4>Réduction des risques</h4>
    </div>
  </div>

  <div class="services-details">
    <div class="service-block">
      <i class="fas fa-cogs"></i>
      <h3>Optimisation des Coûts</h3>
      <p>Réduction des coûts opérationnels et énergétiques grâce à une gestion intégrée et des prestations de qualité au meilleur prix.</p>
    </div>
    <div class="service-block">
      <i class="fas fa-bolt"></i>
      <h3>Performance Énergétique</h3>
      <p>Contrôle précis des consommations pour une utilisation efficace de l’énergie.</p>
    </div>
    <div class="service-block">
      <i class="fas fa-leaf"></i>
      <h3>Impact Environnemental</h3>
      <p>Valorisation de votre infrastructure et réduction de son empreinte carbone.</p>
    </div>
    <div class="service-block">
      <i class="fas fa-tools"></i>
      <h3>Maintenance Simplifiée</h3>
      <p>Un seul interlocuteur pour une gestion et une maintenance facilitées.</p>
    </div>
  </div>

 <!-- <div class="maintenance-section">
    <h2>Maintenance & S.A.V</h2>
    <div class="maintenance-items">
      <div class="maintenance-item">
        <i class="fas fa-shield-virus"></i>
        <h4>Maintenance Préventive & Corrective</h4>
        <p>Pour assurer la continuité de fonctionnement.</p>
      </div>
      <div class="maintenance-item">
        <i class="fas fa-headset"></i>
        <h4>Astreinte 24h/7j</h4>
        <p>Notre équipe est à votre écoute pour une résolution rapide et efficace.</p>
      </div>
      <div class="maintenance-item">
        <i class="fas fa-wrench"></i>
        <h4>Service Après-Vente (S.A.V)</h4>
        <p>Interventions rapides pour réparations curatives et maintien de performance optimale.</p>
      </div>
    </div>
  </div>-->
</section>

<style>
  .services-section {
  padding: 80px 20px;
  min-width: 1200px;
  margin: auto;
  text-align: center;
}

.section-title {
  font-size: 2.8rem;
  margin-bottom: 50px;
  font-weight: 600;
  col
}
.section-title span {
  color: #f04e23;
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 30px;
  margin-bottom: 60px;
}

.benefit-item {
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
  transition: 0.3s;
}
.benefit-item:hover {
  transform: translateY(-8px);
}
.benefit-item i {
  font-size: 2rem;
  color: #f04e23;
  margin-bottom: 12px;
}
.benefit-item h4 {
  font-size: 1.2rem;
  font-weight: 500;
}

.services-details {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  margin-bottom: 80px;
}

.service-block {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  text-align: left;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
}
.service-block i {
  font-size: 1.8rem;
  color: #f04e23;
  margin-bottom: 10px;
}
.service-block h3 {
  font-size: 1.2rem;
  margin-bottom: 10px;
}
.service-block p {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #444;
}

.maintenance-section {
  margin-top: 60px;
}
.maintenance-section h2 {
  font-size: 2.2rem;
  margin-bottom: 30px;
}
.maintenance-items {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}
.maintenance-item {
  flex: 1 1 280px;
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}
.maintenance-item i {
  font-size: 2rem;
  color: #f04e23;
  margin-bottom: 12px;
}
.maintenance-item h4 {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 8px;
}
.maintenance-item p {
  font-size: 0.95rem;
  color: #444;
  line-height: 1.5;
}
@media (max-width: 1200px) {
  .services-section {
    min-width: unset;
    padding: 60px 30px;
  }
}

@media (max-width: 992px) {
  .section-title {
    font-size: 2.2rem;
    margin-bottom: 40px;
  }

  .service-block,
  .benefit-item,
  .maintenance-item {
    padding: 20px;
  }

  .benefit-item h4,
  .service-block h3,
  .maintenance-item h4 {
    font-size: 1.1rem;
  }

  .benefit-item i,
  .service-block i,
  .maintenance-item i {
    font-size: 1.6rem;
  }

  .services-section {
    padding: 60px 20px;
  }
}

@media (max-width: 768px) {
  .section-title {
    font-size: 1.9rem;
  }

  .benefits-grid,
  .services-details {
    grid-template-columns: 1fr;
  }

  .maintenance-items {
    flex-direction: column;
    align-items: center;
  }

  .maintenance-item {
    width: 100%;
    max-width: 90%;
  }
}

@media (max-width: 480px) {
  .services-section {
    padding: 40px 12px;
  }

  .section-title {
    font-size: 1.6rem;
    margin-bottom: 30px;
  }

  .benefit-item h4,
  .service-block h3,
  .maintenance-item h4 {
    font-size: 1rem;
  }

  .benefit-item p,
  .service-block p,
  .maintenance-item p {
    font-size: 0.9rem;
  }

  .benefit-item i,
  .service-block i,
  .maintenance-item i {
    font-size: 1.4rem;
  }
}

</style>
    <!-- Testimonial End -->


        <!-- Blog Start -->
 
        <!-- Blog End -->

<!-- Team End -->
        <!-- Footer Start -->
   <?php include "widgets/footer.php"; ?>
        

<script>
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');
  const track = document.getElementById('carouselTrack');
  const dots = document.querySelectorAll('.carousel-dot');

  function goToSlide(index) {
    currentSlide = index;
    track.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
  }

  // Auto-slide (optional)
  setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    goToSlide(currentSlide);
  }, 8000);
</script>
<script>
    const circles = document.querySelectorAll('.service-circle');
    const slides1 = document.querySelectorAll('.service-slide');

    function activateService(index) {
      circles.forEach((c, i) => {
        c.classList.toggle('active', i === index);
        c.setAttribute('aria-selected', i === index);
      });
      slides1.forEach((s, i) => {
        s.classList.toggle('active', i === index);
      });
    }

    circles.forEach(circle => {
      circle.addEventListener('click', () => {
        const index = Number(circle.dataset.index);
        activateService(index);
      });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      const activeIndex = [...circles].findIndex(c => c.classList.contains('active'));
      if (e.key === 'ArrowRight') {
        let next = (activeIndex + 1) % circles.length;
        activateService(next);
        circles[next].focus();
      } else if (e.key === 'ArrowLeft') {
        let prev = (activeIndex - 1 + circles.length) % circles.length;
        activateService(prev);
        circles[prev].focus();
      }
    });
  </script>


  <script>
    const scrollContainer = document.getElementById('scroll-container');
    const panels = document.querySelectorAll('.panel');
    const dots1 = document.querySelectorAll('.indicator-dot');

    function activatePanel(index) {
      panels.forEach((panel, i) => {
        panel.classList.toggle('active', i === index);
      });
      dots1.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
      });
    }

    scrollContainer.addEventListener('scroll', () => {
      let currentIndex = 0;
      let minDiff = Infinity;
      panels.forEach((panel, i) => {
        const rect = panel.getBoundingClientRect();
        const diff = Math.abs(rect.top);
        if (diff < minDiff) {
          minDiff = diff;
          currentIndex = i;
        }
      });
      activatePanel(currentIndex);
    });

    dots1.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        panels[i].scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>

    </body>

</html>