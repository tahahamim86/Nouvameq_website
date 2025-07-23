<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>DoctorSina</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
          <link href="https://www.doctorsina.io/frontend_assets/img/ds-ico2.ico" rel="icon">
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


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
<style>

.about-us {
  background: linear-gradient(to bottom right, #ffffff, #fef5f0),
              url('img/ATindustry.jpg') no-repeat center;
  background-size: cover;
  background-blend-mode: lighten;

  padding: 80px 40px;
  margin: 120px auto;
  border-radius: 20px;
  box-shadow: 0 8px 40px rgba(0, 0, 0, 0.12);
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-us::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(255, 255, 255, 0.6);
  backdrop-filter: blur(4px);
  z-index: 0;
  border-radius: 20px;
}

.about-us > * {
  position: relative;
  z-index: 1;
}

.about-us:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 45px rgba(0, 0, 0, 0.2);
}

/* Titles */
.section-title h1 {
  font-family: 'Playfair Display', serif;
  font-size: 3rem;
  color: #0E1F56;
  border-bottom: 4px solid #FF6B00;
  display: inline-block;
  padding-bottom: 10px;
  margin-bottom: 30px;
}

/* Typography */
.about-us h4 strong {
  color: #010b3a;
  font-size: 1.6rem;
}

.about-us p {
  font-size: 1.1rem;
  color: #333;
  line-height: 1.8;
  margin-bottom: 25px;
  text-align: justify;
}

hr {
  border: 1px solid #FFA552;
  width: 100%;
  margin: 40px 0;
}

/* Generic Container */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Global headings */
h1 {
  font-size: 2.5rem;
  color: #0077cc;
  text-align: center;
  margin-bottom: 20px;
}

h2 {
  font-size: 1.8rem;
  color: #0e1825;
  margin-top: 30px;
  margin-bottom: 10px;
}

p {
  font-size: 1.1rem;
  margin-bottom: 15px;
  text-align: justify;
}

ul {
  list-style-type: disc;
  padding-left: 20px;
  margin-bottom: 20px;
}

ul li {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

strong {
  color: #021c3b;
}

/* =================== Responsive =================== */

/* Tablets (≤992px) */
@media (max-width: 992px) {
  .about-us {
    padding: 60px 30px;
    margin: 80px 20px;
  }

  .section-title h1 {
    font-size: 2.5rem;
  }

  h1 {
    font-size: 2.2rem;
  }

  h2 {
    font-size: 1.5rem;
  }

  p, ul li {
    font-size: 1rem;
  }

  .about-us h4 strong {
    font-size: 1.4rem;
  }
}

/* Mobile phones (≤768px) */
@media (max-width: 768px) {
  .about-us {
    padding: 40px 20px;
    margin: 60px 15px;
  }

  .section-title h1 {
    font-size: 2rem;
  }

  h1 {
    font-size: 1.8rem;
  }

  h2 {
    font-size: 1.4rem;
  }

  p, ul li {
    font-size: 0.95rem;
  }

  .about-us h4 strong {
    font-size: 1.2rem;
  }
}

/* Very small screens (≤480px) */
@media (max-width: 480px) {
  .about-us {
    padding: 30px 15px;
    margin: 40px 10px;
  }

  .section-title h1,
  h1 {
    font-size: 1.6rem;
  }

  h2 {
    font-size: 1.2rem;
  }

  p, ul li {
    font-size: 0.9rem;
    line-height: 1.6;
  }

  .about-us h4 strong {
    font-size: 1rem;
  }
}

</style>
    <body>
 

        <!-- Spinner End -->
    <?php include "widgets/header.php"; ?>

<nav class="hero-nav animated-bg">
  <div class="overlay"></div>
  <div class="nav-content">
    <p class="brand-name">
      Nouvameq offre rigueur, expérience et des solutions complètes pour la conception<br>
      et l'aménagement des datacenters.
    </p>
  </div>
</nav>
<style>
  .hero-nav {
  position: relative;
  height: 100vh;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  overflow: hidden;
  border-radius: 0 0 20px 20px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
  animation: backgroundCycle 20s infinite ease-in-out;
}

/* Overlay for readability */
.hero-nav .overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.6), rgba(10, 10, 10, 0.4));
  z-index: 1;
}

/* Text content */
.nav-content {
  position: relative;
  z-index: 2;
  max-width: 900px;
  padding: 0 20px;
  text-align: center;
  animation: fadeInUp 1.2s ease-out forwards;
  opacity: 0;
}

.brand-name {
  font-size: 2.5rem;
  font-weight: 700;
  font-family: 'Segoe UI', sans-serif;
  color: #ffffff;
  line-height: 1.6;
  text-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
}

/* Fade-in animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Background cycle animation */
@keyframes backgroundCycle {
  0% {
    background-image: url('img/equipe.jpeg');
  }
  33% {
    background-image: url('img/ATindustry.jpg');
  }
  66% {
    background-image: url('img/porte.jpg');
  }
  100% {
    background-image: url('img/IMG-20220617-WA0068.jpg');
  }
}

/* ============ Responsive Styles ============ */

/* Tablets */
@media (max-width: 992px) {
  .hero-nav {
    height: 90vh;
  }

  .brand-name {
    font-size: 2rem;
  }

  .nav-content {
    max-width: 90%;
    padding: 0 15px;
  }
}

/* Smartphones */
@media (max-width: 768px) {
  .hero-nav {
    height: 85vh;
    border-radius: 0 0 16px 16px;
  }

  .brand-name {
    font-size: 1.6rem;
    line-height: 1.4;
  }

  .nav-content {
    padding: 0 10px;
  }
}

/* Extra small devices */
@media (max-width: 480px) {
  .hero-nav {
    height: 70vh;
    border-radius: 0 0 12px 12px;
  }

  .brand-name {
    font-size: 1.3rem;
    line-height: 1.3;
  }
}

</style>
        <!-- Navbar & Hero End -->
<section class="about-us wow fadeInUp" data-wow-delay="0.3s">
  <div class="container">
    <div class="section-title text-center">
      <h1>Introduction</h1>
    </div>
<br>
    <h4><strong>Data Centers Mobiles en conteneur par Nouvameq</strong></h4>
    <p>
      Chez <strong>Nouvameq</strong>, nous offrons des solutions innovantes et flexibles pour répondre aux besoins diversifiés de nos clients en matière de Data Centers.
      Nos Data Centers mobiles en conteneur sont conçus pour offrir une infrastructure informatique robuste et modulable, idéale pour une installation rapide et une mobilité optimale.
      Nous proposons des conteneurs de dimensions variées, notamment 10", 20" et 40", chacun pouvant être personnalisé selon les spécifications et les exigences de nos clients.
    </p>

    <hr>

    <h4><strong>Notre Engagement</strong></h4>
    <p>
      Chez <strong>Nouvameq</strong>, notre mission est de fournir des solutions de Data Centers de haute qualité, innovantes et personnalisées, répondant aux besoins spécifiques de nos clients.
      Nous nous engageons à garantir la performance, la sécurité et la fiabilité de vos infrastructures IT, tout en offrant un service technique exceptionnel et inégalé.
    </p>
  </div>
</section>

 <!-- Title and Description Container -->
<section class="conception-header">
  <h2 class="conception-title" style="  color: #091624;">Conception Container Data Center 3D</h2>
  <p class="conception-description">
    NOUVAMEQ propose également des Data Centers mobiles en conteneur offrant flexibilité et performance. Ces unités modulaires sont personnalisables selon vos besoins spécifiques et intègrent toutes les fonctionnalités essentielles d'un Data Center traditionnel. Elles sont idéales pour des déploiements rapides, des extensions ou des solutions sur site, garantissant une gestion optimisée des infrastructures. De plus, nos solutions peuvent servir de site principal ou de site Backup, assurant continuité opérationnelle et une résilience accrues pour vos installations.
  </p>
</section>

<!-- Facebook-style Gallery Container -->
<div class="fb-gallery" aria-label="Facebook style image gallery" role="list">
  <!-- Images inserted by JS -->
</div>

<!-- Lightbox Overlay -->
<div id="fb-lightbox" class="fb-lightbox" aria-modal="true" role="dialog" aria-hidden="true" tabindex="-1">
  <button id="fb-lightbox-close" class="fb-lightbox-close" aria-label="Close">&times;</button>
  <button id="fb-lightbox-prev" class="fb-lightbox-nav" aria-label="Previous image">&#10094;</button>
  <img id="fb-lightbox-img" class="fb-lightbox-img" src="" alt="Zoomed gallery image" />
  <button id="fb-lightbox-next" class="fb-lightbox-nav" aria-label="Next image">&#10095;</button>
</div>

<style>
  /* Conception Header Modernisé */
.conception-header {
  min-width: 1000px;
  margin: 60px auto 40px;
  text-align: center;
background-color: white;
  border-radius: 16px;
  padding: 50px 30px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  color: #050505;
}

.conception-title {
  font-size: 2.7rem;
  font-weight: 800;
  margin-bottom: 20px;
  position: relative;
  display: inline-block;
  color: #000000;
}

.conception-title::after {
  content: '';
  position: absolute;
  width: 60%;
  height: 4px;
  background-color: #FF6B00;
  left: 20%;
  bottom: -10px;
  border-radius: 2px;
  animation: underline-grow 1s ease forwards;
}

@keyframes underline-grow {
  from {
    width: 0;
    left: 50%;
  }
  to {
    width: 60%;
    left: 20%;
  }
}

.conception-description {
  font-size: 1.2rem;
  line-height: 1.8;
  color: #1a1a1a;
  max-width: 800px;
  margin: 0 auto;
}

/* Gallery Responsive Modern Style */
.fb-gallery {
  column-count: 4;
  column-gap: 20px;
  padding: 40px 20px;
  min-width: 1200px;
  margin: 0 auto;
  background-color: white;
}

@media (max-width: 1200px) {
  .fb-gallery {
    column-count: 3;
  }
}
@media (max-width: 768px) {
  .fb-gallery {
    column-count: 2;
  }
}
@media (max-width: 480px) {
  .fb-gallery {
    column-count: 1;
  }
}

.fb-gallery-item {
  position: relative;
  margin-bottom: 20px;
  break-inside: avoid;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.fb-gallery-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}

.fb-gallery-item img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 12px;
  transition: transform 0.4s ease;
}

.fb-gallery-item:hover img {
  transform: scale(1.03);
}

.fb-gallery-title {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 12px 16px;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
  color: #fff;
  font-weight: 600;
  font-size: 1rem;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.fb-gallery-item:hover .fb-gallery-title {
  opacity: 1;
}

/* Lightbox Modernisé */
.fb-lightbox {
  display: none;
  position: fixed;
  inset: 0;
  background-color: rgba(14, 31, 86, 0.95);
  justify-content: center;
  align-items: center;
  z-index: 10000;
}

.fb-lightbox.active {
  display: flex;
}

.fb-lightbox-img {
  max-width: 90vw;
  max-height: 90vh;
  border-radius: 12px;
  box-shadow: 0 0 40px rgba(255, 255, 255, 0.3);
  transition: all 0.4s ease-in-out;
}

.fb-lightbox-close,
.fb-lightbox-nav {
  position: absolute;
  background: none;
  border: none;
  color: #fff;
  font-size: 2.7rem;
  cursor: pointer;
  user-select: none;
  transition: color 0.3s ease;
  padding: 10px;
}

.fb-lightbox-close:hover,
.fb-lightbox-nav:hover {
  color: #FFA552;
}

.fb-lightbox-close {
  top: 20px;
  right: 30px;
}

.fb-lightbox-nav {
  top: 50%;
  transform: translateY(-50%);
}

#fb-lightbox-prev {
  left: 30px;
}

#fb-lightbox-next {
  right: 30px;
}
/* ===== Responsive Conception Header ===== */
@media (max-width: 1200px) {
  .conception-header {
    min-width: unset;
    margin: 50px 30px;
    padding: 40px 25px;
  }

  .conception-title {
    font-size: 2.3rem;
  }

  .conception-description {
    font-size: 1.1rem;
    max-width: 90%;
  }
}

@media (max-width: 768px) {
  .conception-header {
    margin: 40px 20px;
    padding: 35px 20px;
  }

  .conception-title {
    font-size: 2rem;
  }

  .conception-description {
    font-size: 1rem;
    line-height: 1.6;
  }

}

@media (max-width: 480px) {
  .conception-header {
    padding: 30px 15px;
    border-radius: 12px;
  }

  .conception-title {
    font-size: 1.7rem;
  }

  .conception-description {
    font-size: 0.95rem;
  }
    #fb-lightbox-prev {
  left: 30px;
}

#fb-lightbox-next {
  right: 30px;
}



}

/* ===== Responsive FB Gallery Columns Already Done Below ===== */
@media (max-width: 1200px) {
  .fb-gallery {
    column-count: 3;
    min-width: unset;
  }
      #fb-lightbox-prev {
  left: 30px;
  color:transparent;
}

#fb-lightbox-next {
  right: 30px;
   color:transparent;
}


}

@media (max-width: 768px) {
  .fb-gallery {
    column-count: 2;
  }
}

@media (max-width: 480px) {
  .fb-gallery {
    column-count: 1;
    padding: 30px 12px;
  }

  .fb-gallery-title {
    font-size: 0.9rem;
    padding: 10px 12px;
  }

  .fb-lightbox-img {
    max-width: 95vw;
    max-height: 85vh;
  }

  .fb-lightbox-close,
  .fb-lightbox-nav {
    font-size: 2rem;
    padding: 8px;
  }

  #fb-lightbox-prev,
  #fb-lightbox-next {
    left: 15px;
    right: 15px;
     color:transparent;

  }
}

</style>

<section class="video-section">
  <div class="video-container">
    <video id="nouvameq-video" src="img/container1-nouvameq.mp4" preload="metadata" poster="img/video-poster.jpg" playsinline></video>
    
    <div class="overlay">
      <button id="play-button" class="play-button" aria-label="Play video">
        <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="26px">
          <path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" fill="currentColor"></path>
        </svg>
      </button>
    </div>
  </div>
</section>
<style>
  .video-section {
  display: flex;
  justify-content: center;
  padding: 60px 20px;
}

.video-container {
  position: relative;
  width: 100%;
  min-width: 960px;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

video {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 16px;
}

/* Overlay play button container */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(10, 10, 10, 0.4);
  transition: opacity 0.3s ease;
  border-radius: 16px;
  z-index: 1;
}

/* Play Button */
.play-button {
  background: linear-gradient(30deg, rgb(255, 130, 0) 20%, rgb(255, 38, 0) 80%);
  border: none;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  animation: pulse 1.5s ease-out infinite;
  box-shadow: 0 0 0 0 rgba(255, 100, 0, 0.6);
  cursor: pointer;
  transition: transform 0.3s ease;
}

.play-button:hover {
  transform: scale(1.2);
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(255, 100, 0, 0.6);
  }
  70% {
    box-shadow: 0 0 0 20px rgba(255, 100, 0, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(255, 100, 0, 0);
  }
}
@media (max-width: 1200px) {
  .video-container {
    min-width: 100%;
  }
}

@media (max-width: 992px) {
  .video-section {
    padding: 50px 16px;
  }

  .video-container {
    min-width: unset;
    width: 100%;
  }

  .play-button {
    width: 70px;
    height: 70px;
  }
}

@media (max-width: 768px) {
  .video-section {
    flex-direction: column;
    padding: 40px 12px;
  }

  .play-button {
    width: 60px;
    height: 60px;
  }
}

@media (max-width: 480px) {
  .video-section {
    padding: 30px 10px;
  }

  .video-container {
    border-radius: 12px;
  }

  video {
    border-radius: 12px;
  }

  .overlay {
    border-radius: 12px;
  }

  .play-button {
    width: 50px;
    height: 50px;
    font-size: 1.2rem;
  }
}

</style>

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

  <div class="maintenance-section">
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
  </div>
</section>

<style>
  .services-section {
  background: #fdfdfd;
  padding: 80px 20px;
  min-width: 1200px;
  margin: auto;
  text-align: center;
}

.section-title {
  font-size: 2.8rem;
  margin-bottom: 50px;
  font-weight: 600;
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
<br>
         <?php include "widgets/footer.php"; ?>
        
 

<script>
  (function() {
    const gallery = document.querySelector('.fb-gallery');
    const lightbox = document.getElementById('fb-lightbox');
    const lightboxImg = document.getElementById('fb-lightbox-img');
    const closeBtn = document.getElementById('fb-lightbox-close');
    const prevBtn = document.getElementById('fb-lightbox-prev');
    const nextBtn = document.getElementById('fb-lightbox-next');

    const images = [
      { src: 'img/conception/1.jpeg', title: 'Design Concept 1' },
      { src: 'img/conception/2.jpeg', title: 'Design Concept 2' },
      { src: 'img/conception/3.jpeg', title: 'Design Concept 3' },
      { src: 'img/conception/4.jpeg', title: 'Design Concept 4' },
      { src: 'img/conception/5.jpeg', title: 'Design Concept 5' },
      { src: 'img/conception/6.jpeg', title: 'Design Concept 6' },
      { src: 'img/conception/7.jpeg', title: 'Design Concept 7' },
      { src: 'img/conception/8.jpeg', title: 'Design Concept 8' },
      { src: 'img/conception/9.jpeg', title: 'Design Concept 9' },
      { src: 'img/conception/10.jpeg', title: 'Design Concept 10' },
      { src: 'img/conception/11.jpeg', title: 'Design Concept 11' },
      { src: 'img/conception/12.jpeg', title: 'Design Concept 12' },
      { src: 'img/conception/13.jpeg', title: 'Design Concept 13' },
      { src: 'img/conception/14.jpeg', title: 'Design Concept 14' },
      { src: 'img/conception/15.jpeg', title: 'Design Concept 15' },
      { src: 'img/conception/16.jpeg', title: 'Design Concept 16' },
      { src: 'img/conception/17.jpeg', title: 'Design Concept 17' },
      { src: 'img/conception/18.jpeg', title: 'Design Concept 18' },
      { src: 'img/conception/19.jpeg', title: 'Design Concept 19' },
      { src: 'img/conception/20.jpeg', title: 'Design Concept 20' },
      { src: 'img/conception/21.jpeg', title: 'Design Concept 21' }
    ];

    let currentIndex = 0;

    // Render gallery items
    gallery.innerHTML = images
      .map(({ src, title }, i) => `
        <div class="fb-gallery-item" tabindex="0" role="listitem" data-index="${i}" aria-label="View ${title}">
          <img src="${src}" alt="${title}" />
          <div class="fb-gallery-title">${title}</div>
        </div>
      `).join('');

    function openLightbox(index) {
      currentIndex = index;
      lightboxImg.src = images[currentIndex].src;
      lightboxImg.alt = images[currentIndex].title;
      lightbox.classList.add('active');
      lightbox.setAttribute('aria-hidden', 'false');
      lightbox.focus();
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      lightbox.classList.remove('active');
      lightbox.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    function showImage(delta) {
      currentIndex = (currentIndex + delta + images.length) % images.length;
      lightboxImg.src = images[currentIndex].src;
      lightboxImg.alt = images[currentIndex].title;
    }

    // Click and keyboard handlers on gallery
    gallery.addEventListener('click', e => {
      const item = e.target.closest('.fb-gallery-item');
      if (!item) return;
      openLightbox(parseInt(item.dataset.index, 10));
    });

    gallery.addEventListener('keydown', e => {
      if (e.target.classList.contains('fb-gallery-item') && (e.key === 'Enter' || e.key === ' ')) {
        e.preventDefault();
        openLightbox(parseInt(e.target.dataset.index, 10));
      }
    });

    closeBtn.addEventListener('click', closeLightbox);
    prevBtn.addEventListener('click', () => showImage(-1));
    nextBtn.addEventListener('click', () => showImage(1));

    lightbox.addEventListener('click', e => {
      if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', e => {
      if (!lightbox.classList.contains('active')) return;
      switch (e.key) {
        case 'ArrowLeft':
          showImage(-1);
          break;
        case 'ArrowRight':
          showImage(1);
          break;
        case 'Escape':
          closeLightbox();
          break;
      }
    });
  })();
</script>
        
<script>
  const playBtn = document.getElementById('play-button');
  const video = document.getElementById('nouvameq-video');
  const overlay = document.querySelector('.overlay');

  playBtn.addEventListener('click', () => {
    video.play();
    overlay.style.opacity = '0';
    overlay.style.pointerEvents = 'none';
  });

  // Optional: Restore overlay if video is paused
  video.addEventListener('pause', () => {
    overlay.style.opacity = '1';
    overlay.style.pointerEvents = 'auto';
  });
</script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>

</html>