  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Prakash Malaichamy</h1>
      </a>

     <?php $page = basename($_SERVER['PHP_SELF']); ?>

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php" class="<?= ($page == 'index.php') ? 'active' : '' ?>">Home</a></li>
    <li><a href="about.php" class="<?= ($page == 'about.php') ? 'active' : '' ?>">About</a></li>
    <li><a href="resume.php" class="<?= ($page == 'resume.php') ? 'active' : '' ?>">Resume</a></li>
    <li><a href="services.php" class="<?= ($page == 'services.php') ? 'active' : '' ?>">Services</a></li>
    <li><a href="portfolio.php" class="<?= ($page == 'portfolio.php') ? 'active' : '' ?>">Portfolio</a></li>
    <li><a href="contact.php" class="<?= ($page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

    <div class="header-social-links">
  <a href="https://www.facebook.com/share/1DNQQd6wsX/?mibextid=wwXIfr" target="_blank" class="facebook">
    <i class="bi bi-facebook"></i>
  </a>
  
  <a href="https://www.instagram.com/imdavidprakash?igsh=MW51aTM5MHp6am82bA%3D%3D&utm_source=qr" target="_blank" class="instagram">
    <i class="bi bi-instagram"></i>
  </a>
  
  <a href="https://www.linkedin.com/in/prakash-malaichamy-37b299218?utm_source=share_via&utm_content=profile&utm_medium=member_ios" target="_blank" class="linkedin">
    <i class="bi bi-linkedin"></i>
  </a>
</div>

    </div>
  </header>