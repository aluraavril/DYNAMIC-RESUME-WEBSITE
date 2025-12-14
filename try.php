<?php include 'config.php'; ?>

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
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
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

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editAboutModal">Edit</button>
                <p><?php $result = $conn->query("SELECT content FROM about LIMIT 1");
                    echo $result->fetch_assoc()['content']; ?></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="beaimg/av.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Aspiring Junior Developer</h2>
                        <p class="fst-italic py-3">
                            I'm an aspiring Junior Developer excited to jump into the world of code. My journey into development is fueled by the same curiosity and passion I bring to my diverse hobbies.
                        </p>
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
                                <!-- Add Edit Button for Personal Details -->
                                <button class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#editPersonalDetailsModal">Edit Personal Details</button>
                            </div>
                        </div>
                        <p class="py-3">
                            Whether I’m perfecting a pattern while crocheting, meticulously following a recipe while cooking, or strategizing in a video game, I'm always looking for creative ways to solve problems and build something awesome. I believe this blend of meticulous focus and creative flair is exactly what I can offer. I am a fast and diligent learner, eager to absorb new technologies and contribute proactively to projects.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Bucket List Section -->
        <section id="services" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bucket List</h2>
                <p>A collection of personal goals and experiences I want to achieve, ranging from travel and food exploration to gaming milestones and personal growth.</p>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <!-- Travel the World -->
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <h4 class="title">Travel the World</h4>
                            <p class="description">Visit Japan, South Korea, Italy, and Iceland—immersing myself in new cultures, food, and landscapes.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Go on a Food Adventure -->
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <h4 class="title">Go on a Food Adventure</h4>
                            <p class="description">Explore global cuisines and experience food the way Anthony Bourdain did—authentic, local, and unforgettable.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Compete in Call of Duty -->
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div>
                            <h4 class="title">Compete in Call of Duty</h4>
                            <p class="description">Join an official COD tournament, test my skills, and experience competitive gaming firsthand.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Build My Own Full-Stack App -->
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <h4 class="title">Build My Own Full-Stack App</h4>
                            <p class="description">Develop and publish a fully functional app—from concept to deployment—to challenge myself as a developer.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Experience Solo Travel -->
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div>
                            <h4 class="title">Experience Solo Travel</h4>
                            <p class="description">Explore a new country alone to gain confidence, independence, and unforgettable memories.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Join COD Leaderboards -->
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div>
                            <h4 class="title">Join COD Leaderboards</h4>
                            <p class="description">Get to be part of the top 10 Philippines in Battle Royal Rank.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                </div>

            </div>

        </section>
        <!-- /Bucket List Section -->


        <!-- Personal Details Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-heart"></i>
                            <span>Creative Interests</span>
                            <p><strong>Crocheting, cooking, design, and gaming</strong></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-lightbulb"></i>
                            <span>Life Motto</span>
                            <p><strong>“Keep learning. Keep building. Keep improving.”</strong></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-graph-up"></i>
                            <span>Strengths</span>
                            <p><strong>Detail-oriented, fast learner, adaptable, team-oriented</strong></p>
                        </div>
                    </div><!-- End Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-exclamation-triangle"></i>
                            <span>Greatest Fear</span>
                            <p><strong>Not reaching my full potential and missing out on opportunities to learn and grow</strong></p>
                        </div>
                    </div><!-- End Item -->

                </div>

            </div>

        </section>
        <!-- /Personal Details Section -->


        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">

            <!-- Section Title for Transferable Skills -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Transferable Skills</h2>
                <p>Valuable skills gained from my internship experience that seamlessly apply to a junior developer.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row skills-content skills-animation">

                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill"><span>Multitasking</span> <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Organization</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Communication</span> <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill"><span>Tech Proficiency</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Problem Solving</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Time Management</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Section Title for Technical Skills -->
            <div class="container section-title" data-aos="fade-up" style="margin-top:50px;">
                <h2>Technical Skills</h2>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editSkillsModal">Edit</button>
                <p>Programming languages, frameworks, tools, databases, and other technologies I am proficient in.</p>
            </div><!-- End Section Title -->

            <!-- Technical Skills List -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tech-skills-list">
                            <?php $result = $conn->query("SELECT * FROM technical_skills WHERE id <= 3");
                            while ($row = $result->fetch_assoc()) {
                                echo "<li><i class='bi bi-chevron-right text-primary'></i> <strong>{$row['category']}:</strong> {$row['skills']}</li>";
                            } ?>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="tech-skills-list">
                            <?php $result = $conn->query("SELECT * FROM technical_skills WHERE id > 3");
                            while ($row = $result->fetch_assoc()) {
                                echo "<li><i class='bi bi-chevron-right text-primary'></i> <strong>{$row['category']}:</strong> {$row['skills']}</li>";
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </section><!-- /Skills Section -->


        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>Get to know my professional background through my resume, which includes a quick summary, education, and work experience. It showcases my skills, growth, and readiness for the tech world.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Summary</h3>

                        <div class="resume-item pb-0">
                            <h4>Avril Jayzel R. Balington</h4>
                            <p><em>Dedicated and motivated Computer Science student with a solid foundation in programming, web development, and database management, leveraging problem-solving, analytical, and collaborative skills to transition seamlessly into a Junior Developer role.</em></p>
                            <ul>
                                <li>Dasmariñas, Cavite, PH</li>
                                <li>+63 928 027 3759</li>
                                <li>balington.avril@gmail.com</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <h3 class="resume-title">Education</h3>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editEducationModal">Edit</button>
                        <?php $result = $conn->query("SELECT * FROM education");
                        while ($row = $result->fetch_assoc()) { ?>
                            <div class="resume-item">
                                <h4><?php echo $row['title']; ?></h4>
                                <h5><?php echo $row['dates']; ?></h5>
                                <p><em><?php echo $row['institution']; ?></em></p>
                                <p><?php echo $row['description']; ?></p>
                            </div><!-- End Resume Item -->
                        <?php } ?>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Internship – Junior Developer</h4>
                            <h5>June 2025 - August 2025</h5>
                            <p><em>Tourism Infrastructure and Enterprise Zone Authority</em></p>
                            <ul>
                                <li>Developed a system to generate reports, streamlining data collection and improving reporting efficiency for management.</li>
                                <li>Created a compilation system integrating multiple web-based applications, enhancing accessibility and workflow for staff.</li>
                                <li>Performed inventory management of digital assets and system resources to ensure organized and up-to-date records.</li>
                                <li>Assisted colleagues with technical tasks, troubleshooting issues, and providing support for system-related operations.</li>
                                <li>Provided general administrative assistance, including organizing project documents, preparing reports, and conducting research to support ongoing projects.</li>
                            </ul>
                        </div><!-- End Resume Item -->
                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio: Developed Systems and Data Reports</h2>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProjectsModal">Edit</button>
                <p>Explore my body of work which includes functional web applications and websites—from full-stack systems to front-end projects. You will also find professional data reports and compelling visualizations.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Websites</li>
                        <li data-filter=".filter-product">Data Reports</li>
                        <li data-filter=".filter-branding">Systems</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <?php $result = $conn->query("SELECT * FROM projects");
                        while ($row = $result->fetch_assoc()) {
                            $filter = strtolower(str_replace(' ', '-', $row['category']));
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

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Certifications & Awards</h2>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCertificationsModal">Edit</button>
                <p>These are my academic recognitions and honors that reflect my dedication and consistent performance throughout my education.</p>
            </div><!-- End Section Title -->

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

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>I'd love to connect—feel free to reach out through the form below or via my contact details for any opportunities or inquiries.</p>
            </div><!-- End Section Title -->

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
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Me</h3>
                                    <p>+63 928 027 3759</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Me</h3>
                                    <p>balington.avril@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

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
                    </div><!-- End Contact Form -->

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
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Edit Modals -->
    <!-- About Modal -->
    <div class="modal fade" id="editAboutModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit About Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="aboutForm">
                        <div class="mb-3">
                            <label for="aboutContent" class="form-label">About Text</label>
                            <textarea class="form-control" id="aboutContent" rows="5"><?php $result = $conn->query("SELECT content FROM about LIMIT 1");
                                                                                        echo $result->fetch_assoc()['content']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Personal Details Modal -->
    <div class="modal fade" id="editPersonalDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Personal Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="personalDetailsForm">
                        <div id="personalDetailsList">
                            <?php $result = $conn->query("SELECT * FROM personal_details");
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="mb-3 personal-detail-item" data-id="<?php echo $row['id']; ?>">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control label" value="<?php echo $row['label']; ?>">
                                    <label class="form-label">Value</label>
                                    <input type="text" class="form-control value" value="<?php echo $row['value']; ?>">
                                    <button type="button" class="btn btn-danger btn-sm delete-personal-detail">Delete</button>
                                </div>
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addPersonalDetail">Add Detail</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Modal -->
    <div class="modal fade" id="editSkillsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Technical Skills</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="skillsForm">
                        <div id="skillsList">
                            <?php $result = $conn->query("SELECT * FROM technical_skills");
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="mb-3 skill-item" data-id="<?php echo $row['id']; ?>">
                                    <label class="form-label">Category</label>
                                    <input type="text" class="form-control category" value="<?php echo $row['category']; ?>">
                                    <label class="form-label">Skills</label>
                                    <input type="text" class="form-control skills" value="<?php echo $row['skills']; ?>">
                                    <button type="button" class="btn btn-danger btn-sm delete-skill">Delete</button>
                                </div>
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addSkill">Add Skill</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Modal -->
    <div class="modal fade" id="editProjectsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Projects</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="projectsForm">
                        <div id="projectsList">
                            <?php $result = $conn->query("SELECT * FROM projects");
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="mb-3 project-item" data-id="<?php echo $row['id']; ?>">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control title" value="<?php echo $row['title']; ?>">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control description" rows="3"><?php echo $row['description']; ?></textarea>
                                    <label class="form-label">Image Filename</label>
                                    <input type="text" class="form-control image" value="<?php echo $row['image']; ?>">
                                    <label class="form-label">Category</label>
                                    <input type="text" class="form-control category" value="<?php echo $row['category']; ?>">
                                    <button type="button" class="btn btn-danger btn-sm delete-project">Delete</button>
                                </div>
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addProject">Add Project</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Education Modal -->
    <div class="modal fade" id="editEducationModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="educationForm">
                        <div id="educationList">
                            <?php $result = $conn->query("SELECT * FROM education");
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="mb-3 education-item" data-id="<?php echo $row['id']; ?>">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control title" value="<?php echo $row['title']; ?>">
                                    <label class="form-label">Dates</label>
                                    <input type="text" class="form-control dates" value="<?php echo $row['dates']; ?>">
                                    <label class="form-label">Institution</label>
                                    <input type="text" class="form-control institution" value="<?php echo $row['institution']; ?>">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control description" rows="3"><?php echo $row['description']; ?></textarea>
                                    <button type="button" class="btn btn-danger btn-sm delete-education">Delete</button>
                                </div>
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addEducation">Add Education</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Certifications Modal -->
    <div class="modal fade" id="editCertificationsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Certifications & Awards</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="certificationsForm">
                        <div id="certificationsList">
                            <?php $result = $conn->query("SELECT * FROM certifications");
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="mb-3 certification-item" data-id="<?php echo $row['id']; ?>">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control title" value="<?php echo $row['title']; ?>">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control description" rows="3"><?php echo $row['description']; ?></textarea>
                                    <button type="button" class="btn btn-danger btn-sm delete-certification">Delete</button>
                                </div>
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addCertification">Add Certification</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Custom JS for CRUD Operations -->
    <script>
        // Personal Details Form
        $('#addPersonalDetail').click(function() {
            $('#personalDetailsList').append('<div class="mb-3 personal-detail-item"><label class="form-label">Label</label><input type="text" class="form-control label"><label class="form-label">Value</label><input type="text" class="form-control value"><button type="button" class="btn btn-danger btn-sm delete-personal-detail">Delete</button></div>');
        });
        $(document).on('click', '.delete-personal-detail', function() {
            $(this).parent().remove();
        });
        $('#personalDetailsForm').submit(function(e) {
            e.preventDefault();
            var personalDetails = [];
            $('.personal-detail-item').each(function() {
                personalDetails.push({
                    id: $(this).data('id'),
                    label: $(this).find('.label').val(),
                    value: $(this).find('.value').val()
                });
            });
            $.post('crud.php', {
                action: 'update_personal_details',
                personal_details: JSON.stringify(personalDetails)
            }, function() {
                location.reload();
            });
        });
        $(document).ready(function() {
            // About Form
            $('#aboutForm').submit(function(e) {
                e.preventDefault();
                $.post('crud.php', {
                    action: 'update_about',
                    content: $('#aboutContent').val()
                }, function() {
                    location.reload();
                });
            });

            // Skills Form
            $('#addSkill').click(function() {
                $('#skillsList').append('<div class="mb-3 skill-item"><label class="form-label">Category</label><input type="text" class="form-control category"><label class="form-label">Skills</label><input type="text" class="form-control skills"><button type="button" class="btn btn-danger btn-sm delete-skill">Delete</button></div>');
            });
            $(document).on('click', '.delete-skill', function() {
                $(this).parent().remove();
            });
            $('#skillsForm').submit(function(e) {
                e.preventDefault();
                var skills = [];
                $('.skill-item').each(function() {
                    skills.push({
                        id: $(this).data('id'),
                        category: $(this).find('.category').val(),
                        skills: $(this).find('.skills').val()
                    });
                });
                $.post('crud.php', {
                    action: 'update_skills',
                    skills: JSON.stringify(skills)
                }, function() {
                    location.reload();
                });
            });

            // Projects Form
            $('#addProject').click(function() {
                $('#projectsList').append('<div class="mb-3 project-item"><label class="form-label">Title</label><input type="text" class="form-control title"><label class="form-label">Description</label><textarea class="form-control description" rows="3"></textarea><label class="form-label">Image Filename</label><input type="text" class="form-control image"><label class="form-label">Category</label><input type="text" class="form-control category"><button type="button" class="btn btn-danger btn-sm delete-project">Delete</button></div>');
            });
            $(document).on('click', '.delete-project', function() {
                $(this).parent().remove();
            });
            $('#projectsForm').submit(function(e) {
                e.preventDefault();
                var projects = [];
                $('.project-item').each(function() {
                    projects.push({
                        id: $(this).data('id'),
                        title: $(this).find('.title').val(),
                        description: $(this).find('.description').val(),
                        image: $(this).find('.image').val(),
                        category: $(this).find('.category').val()
                    });
                });
                $.post('crud.php', {
                    action: 'update_projects',
                    projects: JSON.stringify(projects)
                }, function() {
                    location.reload();
                });
            });

            // Education Form
            $('#addEducation').click(function() {
                $('#educationList').append('<div class="mb-3 education-item"><label class="form-label">Title</label><input type="text" class="form-control title"><label class="form-label">Dates</label><input type="text" class="form-control dates"><label class="form-label">Institution</label><input type="text" class="form-control institution"><label class="form-label">Description</label><textarea class="form-control description" rows="3"></textarea><button type="button" class="btn btn-danger btn-sm delete-education">Delete</button></div>');
            });
            $(document).on('click', '.delete-education', function() {
                $(this).parent().remove();
            });
            $('#educationForm').submit(function(e) {
                e.preventDefault();
                var education = [];
                $('.education-item').each(function() {
                    education.push({
                        id: $(this).data('id'),
                        title: $(this).find('.title').val(),
                        dates: $(this).find('.dates').val(),
                        institution: $(this).find('.institution').val(),
                        description: $(this).find('.description').val()
                    });
                });
                $.post('crud.php', {
                    action: 'update_education',
                    education: JSON.stringify(education)
                }, function() {
                    location.reload();
                });
            });

            // Certifications Form
            $('#addCertification').click(function() {
                $('#certificationsList').append('<div class="mb-3 certification-item"><label class="form-label">Title</label><input type="text" class="form-control title"><label class="form-label">Description</label><textarea class="form-control description" rows="3"></textarea><button type="button" class="btn btn-danger btn-sm delete-certification">Delete</button></div>');
            });
            $(document).on('click', '.delete-certification', function() {
                $(this).parent().remove();
            });
            $('#certificationsForm').submit(function(e) {
                e.preventDefault();
                var certifications = [];
                $('.certification-item').each(function() {
                    certifications.push({
                        id: $(this).data('id'),
                        title: $(this).find('.title').val(),
                        description: $(this).find('.description').val()
                    });
                });
                $.post('crud.php', {
                    action: 'update_certifications',
                    certifications: JSON.stringify(certifications)
                }, function() {
                    location.reload();
                });
            });
        });
    </script>

</body>

</html>