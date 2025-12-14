<?php
session_start();  // Start session for login check
include 'config.php';  // Include DB connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Avril's Resume</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="beaimg/c.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="beaimg/Untitled design.png" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.php" class="logo d-flex align-items-center justify-content-center">
            <h1 class="sitename">Junior Developer</h1>
        </a>

        <div class="social-links text-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#certifications"><i class="bi bi-hdd-stack navicon"></i> Certifications &amp; Awards</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="beaimg/avqt.jpeg" alt="" data-aos="fade-in" class="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Avril Jayzel R. Balington</h2>
                <p>I'm <span class="typed" data-typed-items="an Aspiring Junior Developer, a Freelancer, an Diligent Student, a Creative Thinker">an Aspiring Junior Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p><?php $result = $conn->query("SELECT content FROM about LIMIT 1");
                    echo $result->fetch_assoc()['content']; ?></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="beaimg/av.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Aspiring Junior Developer</h2>
                        <p class="fst-italic py-3"><?php $result = $conn->query("SELECT additional_content FROM about LIMIT 1");
                                                    echo $result->fetch_assoc()['additional_content']; ?></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <?php $result = $conn->query("SELECT * FROM personal_details WHERE id <= 4");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<li><i class='bi bi-chevron-right'></i> <strong>{$row['label']}:</strong> <span>{$row['value']}</span></li>";
                                    } ?>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <?php $result = $conn->query("SELECT * FROM personal_details WHERE id > 4");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<li><i class='bi bi-chevron-right'></i> <strong>{$row['label']}:</strong> <span>{$row['value']}</span></li>";
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Bucket List Section -->
        <section id="services" class="contact section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2><?php $result = $conn->query("SELECT title FROM bucket_list_meta LIMIT 1");
                    echo $result->fetch_assoc()['title']; ?></h2>
                <p><?php $result = $conn->query("SELECT description FROM bucket_list_meta LIMIT 1");
                    echo $result->fetch_assoc()['description']; ?></p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <?php $result = $conn->query("SELECT * FROM bucket_list");
                    $delay = 100;
                    while ($row = $result->fetch_assoc()) { ?>
                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                            <div>
                                <h4 class="title"><?php echo $row['title']; ?></h4>
                                <p class="description"><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                        <?php $delay += 100; ?>
                    <?php } ?>
                </div>
            </div>
        </section><!-- /Bucket List Section -->

        <!-- Personal Details Section -->
        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <?php $result = $conn->query("SELECT * FROM personal_stats");
                    while ($row = $result->fetch_assoc()) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item">
                                <i class="<?php echo $row['icon']; ?>"></i>
                                <span><?php echo $row['title']; ?></span>
                                <p><strong><?php echo $row['description']; ?></strong></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section><!-- /Personal Details Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2><?php $result = $conn->query("SELECT title FROM transferable_skills_meta LIMIT 1");
                    echo $result->fetch_assoc()['title']; ?></h2>
                <p><?php $result = $conn->query("SELECT description FROM transferable_skills_meta LIMIT 1");
                    echo $result->fetch_assoc()['description']; ?></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row skills-content skills-animation">
                    <?php $result = $conn->query("SELECT * FROM transferable_skills");
                    $skills = $result->fetch_all(MYSQLI_ASSOC);
                    $total = count($skills);
                    $half = ceil($total / 2);
                    ?>
                    <div class="col-lg-6">
                        <?php for ($i = 0; $i < $half; $i++) { ?>
                            <div class="progress">
                                <span class="skill"><span><?php echo $skills[$i]['skill_name']; ?></span> <i class="val"><?php echo $skills[$i]['percentage']; ?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills[$i]['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6">
                        <?php for ($i = $half; $i < $total; $i++) { ?>
                            <div class="progress">
                                <span class="skill"><span><?php echo $skills[$i]['skill_name']; ?></span> <i class="val"><?php echo $skills[$i]['percentage']; ?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills[$i]['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up" style="margin-top:50px;">
                <h2>Technical Skills</h2>
                <p>Programming languages, frameworks, tools, databases, and other technologies I am proficient in.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tech-skills-list">
                            <?php $result = $conn->query("SELECT * FROM technical_skills");
                            $skills = $result->fetch_all(MYSQLI_ASSOC);
                            $total = count($skills);
                            $half = ceil($total / 2);
                            for ($i = 0; $i < $half; $i++) {
                                echo "<li><i class='bi bi-chevron-right text-primary'></i> <strong>{$skills[$i]['category']}:</strong> {$skills[$i]['skills']}</li>";
                            } ?>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="tech-skills-list">
                            <?php for ($i = $half; $i < $total; $i++) {
                                echo "<li><i class='bi bi-chevron-right text-primary'></i> <strong>{$skills[$i]['category']}:</strong> {$skills[$i]['skills']}</li>";
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>Get to know my professional background through my resume, which includes a quick summary, education, and work experience. It showcases my skills, growth, and readiness for the tech world.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Summary</h3>
                        <?php $result = $conn->query("SELECT * FROM summary LIMIT 1");
                        $summary = $result->fetch_assoc(); ?>
                        <div class="resume-item pb-0">
                            <h4><?php echo $summary['name']; ?></h4>
                            <p><em><?php echo $summary['description']; ?></em></p>
                            <ul>
                                <li><?php echo $summary['location']; ?></li>
                                <li><?php echo $summary['phone']; ?></li>
                                <li><?php echo $summary['email']; ?></li>
                            </ul>
                        </div>
                        <h3 class="resume-title">Education</h3>
                        <?php $result = $conn->query("SELECT * FROM education");
                        while ($row = $result->fetch_assoc()) { ?>
                            <div class="resume-item">
                                <h4><?php echo $row['title']; ?></h4>
                                <h5><?php echo $row['dates']; ?></h5>
                                <p><em><?php echo $row['institution']; ?></em></p>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <?php $result = $conn->query("SELECT * FROM professional_experience");
                        while ($row = $result->fetch_assoc()) { ?>
                            <div class="resume-item">
                                <h4><?php echo $row['title']; ?></h4>
                                <h5><?php echo $row['dates']; ?></h5>
                                <p><em><?php echo $row['company']; ?></em></p>
                                <ul>
                                    <?php $bullets = explode("\n", $row['description']);
                                    foreach ($bullets as $bullet) {
                                        echo "<li>$bullet</li>";
                                    } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio: Developed Systems and Data Reports</h2>
                <p>Explore my body of work which includes functional web applications and websites—from full-stack systems to front-end projects. You will also find professional data reports and compelling visualizations.</p>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Websites</li>
                        <li data-filter=".filter-product">Data Reports</li>
                        <li data-filter=".filter-branding">Systems</li>
                    </ul>
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <?php $result = $conn->query("SELECT * FROM projects");
                        while ($row = $result->fetch_assoc()) {
                            if ($row['category'] == 'Websites') $filter = 'app';
                            elseif ($row['category'] == 'Data Reports') $filter = 'product';
                            elseif ($row['category'] == 'Systems') $filter = 'branding';
                            else $filter = 'app';
                            echo "<div class='col-lg-4 col-md-6 portfolio-item isotope-item filter-{$filter}'>
    <div class='portfolio-content h-100'>
      <img src='beaimg/{$row['image']}' class='img-fluid' alt=''>
      <div class='portfolio-info'>
        <h4>{$row['title']}</h4>
        <p>{$row['description']}</p>
        <a href='beaimg/{$row['image']}' title='{$row['title']} Preview' data-gallery='portfolio-gallery-{$filter}' class='glightbox preview-link'><i class='bi bi-zoom-in'></i></a>
        <a href='portfolio-details.html' title='More Details' class='details-link'><i class='bi bi-link-45deg'></i></a>
      </div>
    </div>
  </div>";
                        } ?>
                    </div><!-- End Portfolio Container -->
                </div>
            </div>
        </section><!-- /Portfolio Section -->

        <!-- Certifications & Awards Section -->
        <section id="certifications" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Certifications & Awards</h2>
                <p>These are my academic recognitions and honors that reflect my dedication and consistent performance throughout my education.</p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <?php $result = $conn->query("SELECT * FROM certifications");
                    while ($row = $result->fetch_assoc()) {
                        $icon = ($row['id'] == 1) ? 'bi-award' : (($row['id'] == 2) ? 'bi-mortarboard' : 'bi-star');
                        echo "<div class='col-lg-4 col-md-6 service-item d-flex' data-aos='fade-up' data-aos-delay='100'>
    <div class='icon flex-shrink-0'><i class='bi {$icon}'></i></div>
    <div>
      <h4 class='title'>{$row['title']}</h4>
      <p class='description'>{$row['description']}</p>
    </div>
  </div>";
                    } ?>
                </div>
            </div>
        </section><!-- /Certifications & Awards Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>I'd love to connect—feel free to reach out through the form below or via my contact details for any opportunities or inquiries.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Dasmariñas, Cavite, Philippines</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Me</h3>
                                    <p>+63 928 027 3759</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Me</h3>
                                    <p>balington.avril@gmail.com</p>
                                </div>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Fixed Login Button (Bottom Left) -->
    <button id="loginBtn" class="btn btn-primary position-fixed" style="bottom: 20px; left: 20px; z-index: 1050;" onclick="window.location.href='login.php'">Login</button>
    <!-- Login Modal
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Custom JS for Login -->
    <script>
        $(document).ready(function() {
            $('#loginBtn').click(function() {
                $('#loginModal').modal('show');
            });
            $('#loginForm').submit(function(e) {
                e.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();
                if (username === 'admin' && password === 'password') {
                    window.location.href = 'admin.php';
                } else {
                    alert('Invalid credentials');
                }
            });
        });
    </script>
</body>

</html>