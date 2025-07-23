 <html>
 <head>
        <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- Animate.css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    </head>
<body>


<style>

  /* Professional, clean style */



  .realisations-section {

    padding: 260px 120px;
    background-color: #fff;
  }


  .section-title {
    text-align: center;
    color: #FF7F11;
    font-weight: 700;
    font-size: 38px;
    margin-bottom: 50px;
    letter-spacing: 1px;
  }

  .project-selector {
    text-align: center;
    margin-bottom: 40px;
  }

  .project-btn {
    background-color: #fff;
    border: 2px solid #FF7F11;
    color: #FF7F11;
    padding: 12px 28px;
    margin: 0 10px;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.35s ease;
    font-size: 17px;
    font-weight: 600;
    box-shadow: 0 2px 6px rgb(255 127 17 / 0.3);
    user-select: none;
  }

  .project-btn:hover {
    background-color: #FF7F11;
    color: #fff;
    box-shadow: 0 4px 14px rgb(255 127 17 / 0.6);
  }

  .project-btn.active {
    background-color: #FF7F11;
    color: #fff;
    box-shadow: 0 6px 20px rgb(255 127 17 / 0.75);
  }

  .project-content {
    display: none;
    animation: fadeInUp 0.45s ease forwards;
  }

  .project-content.active {
    display: block;
  }

  .media-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
  }

  .media-grid a {
    display: block;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 12px rgb(0 0 0 / 0.1);
    transition: box-shadow 0.3s ease;
  }

  .media-grid a:hover {
    box-shadow: 0 8px 24px rgb(255 127 17 / 0.35);
  }

  .media-grid img,
  .media-grid video {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 12px;
    object-fit: cover;
  }

  /* Subtle fade-in animation */
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
@media (max-width: 992px) {
  .realisations-section {
    padding: 160px 40px;
  }
}

@media (max-width: 576px) {
  .realisations-section {
    padding: 120px 20px;
  }
}
@media (max-width: 768px) {
  .section-title {
    font-size: 28px;
  }
}
.project-selector {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
}

@media (max-width: 576px) {
  .project-btn {
    flex: 1 1 100%;
    margin: 5px 0;
  }
}

  /* Responsive */
  @media (max-width: 768px) {
    .project-btn {
      margin: 10px 6px;
      padding: 10px 20px;
      font-size: 15px;
    }

    .media-grid {
      grid-template-columns: 1fr;
    }
  }
  .media-grid video {
  width: 100%;
  height: auto;
  max-height: 400px;
  object-fit: cover;
}

</style>

<!-- Your updated HTML section -->
<?php include "widgets/header.php" ?>
<section class="realisations-section">
  <div class="container">
    <h2 class="section-title">Nos Réalisations</h2>

    <div class="project-selector">
      <button class="project-btn active" data-target="projet1">Evenement ADCD</button>
      <button class="project-btn" data-target="projet2">Projet 2 - Rénovation</button>
      <button class="project-btn" data-target="projet3">Projet 3 - Événementiel</button>
    </div>

    <div class="project-content active" id="projet1">
      <h3 style="color:#FF7F11; margin-bottom: 25px;">Evenement ADCD</h3>
      <div class="media-grid">
        <a href="img/adcd1.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd1.jpg" alt="Projet 1 image 1" />
        </a>
        <a href="img/adcd2.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd2.jpg" alt="Projet 1 image 2" />
        </a>
        <a href="img/adcd3.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd3.jpg" alt="Projet 1 image 3" />
        </a>
        <a href="img/adcd4.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd4.jpg" alt="Projet 1 image 4" />
        </a>

        <a href="img/adcd5.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd5.jpg" alt="Projet 1 image 5" />
        </a>
        <a href="img/adcd6.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd6.jpg" alt="Projet 1 image 6" />
        </a>
        <a href="img/adcd7.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd7.jpg" alt="Projet 1 image 7" />
        </a>

        <a href="img/adcd8.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd8.jpg" alt="Projet 1 image 8" />
        </a>
        <a href="img/adcd9.jpg" class="glightbox" data-gallery="projet1" data-title="">
          <img src="img/adcd9.jpg" alt="Projet 1 image 9" />
        </a>

        <a href="video/projet1.mp4" class="glightbox" data-gallery="projet1" data-type="video" data-title="">
          <video muted>
            <source src="video/projet1.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </a>
      </div>
    </div>

    <div class="project-content" id="projet2" style="display:none;">
      <h3 style="color:#FF7F11; margin-bottom: 25px;">Projet 2 - Rénovation</h3>
      <div class="media-grid">
        <a href="img/projet2-1.jpg" class="glightbox" data-gallery="projet2" data-title="">
          <img src="img/projet2-1.jpg" alt="Projet 2 image" />
        </a>

        <a href="video/projet2.mp4" class="glightbox" data-gallery="projet2" data-type="video" data-title="">
          <video muted>
            <source src="video/projet2.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </a>
      </div>
    </div>

    <div class="project-content" id="projet3" style="display:none;">
      <h3 style="color:#FF7F11; margin-bottom: 25px;">Projet 3 - Événementiel</h3>
      <div class="media-grid">
        <a href="img/projet3-1.jpg" class="glightbox" data-gallery="projet3" data-title="">
          <img src="img/projet3-1.jpg" alt="Projet 3 image" />
        </a>
      </div>
    </div>
  </div>
</section>
<!-- JS dependencies -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
  // Initialize GLightbox
  const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    closeOnOutsideClick: true,
    zoomable: true,
    autoplayVideos: false,
    // Don't show titles
    moreText: '',
    slideEffect: 'zoom',
    plyr: {
      css: 'https://cdn.plyr.io/3.6.8/plyr.css',
      js: 'https://cdn.plyr.io/3.6.8/plyr.js'
    }
  });

  // Handle tab switching
  const buttons = document.querySelectorAll('.project-btn');
  const contents = document.querySelectorAll('.project-content');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active from all buttons
      buttons.forEach(b => b.classList.remove('active'));
      button.classList.add('active');

      // Hide all content
      contents.forEach(c => {
        c.style.display = 'none';
        c.classList.remove('active');
      });

      // Show selected content
      const target = document.getElementById(button.dataset.target);
      target.style.display = 'block';
      target.classList.add('active');

      // Refresh lightbox in case of DOM changes
      lightbox.reload();
    });
  });
</script>
<?php include "widgets/footer.php"?>
</body>
</html>
