<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>

        <title>JustStop__ - Portfolio</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <!-- nav -->
            <nav class="nav container padd-15">
                <!-- nav logo -->
                <a href="#" class="nav-logo">
                    <h2>JustStop__</h2>
                </a>
                <!-- nav menu -->
                <div class="nav-menu" id="nav-menu">
                    <!-- nav list -->
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#experience" class="nav-link">Expériences</a>
                        </li>
                        <li class="nav-item">
                            <a href="#testimonial" class="nav-link">Avis</a>
                        </li>
                    </ul>
                    <!-- nav close -->
                    <div class="nav-close" id="nav-close">
                        <i class="lni lni-close"></i>
                    </div>
                </div>
                <!-- nav btn -->
                <div class="nav-btns">
                    <!-- theme change btn -->
                    <i class="lni lni-pallet change-theme" id="theme-button"></i>
                    <!-- toggle btn -->
                    <div class="nav-toggle" id="nav-toggle">
                        <i class="lni lni-grid-alt"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--=============== MAIN ===============-->
        <main class="main-content">
            <!--=============== HOME ===============-->
            <section class="home" id="home">
                <div class="container">
                    <!-- intro -->
                    <div class="intro">
                        <!-- avatar image -->
                        <img src="https://cdn.discordapp.com/avatars/661525561394462730/069c273e3cf5cfcc305d49c8ee6613dd.webp" style="border-radius: 100%;" alt="Bolby">
                        <!-- info -->
                        <h1>JustStop__</h1>
                        <span>Je suis <span class="info-text">un développeur HTML, CSS ET JS</span></span>
                        <!-- social icons -->
                        <ul class="social-icons">
                            <li><a href="https://discord.gg/G5PcBpzuq8"><i class="lni lni-discord"></i></a></li>
                        </ul>
                        <!-- button -->
                        <div>
                            <a href="https://discord.gg/G5PcBpzuq8" class="btn btn-default">M'engager</a>
                        </div>
                        <!-- scroll down mouse wheel -->
                        <div class="scroll-down">
                            <a href="#about" class="mouse-wrapper">
                                <span>Descendez</span>
                                <span class="mouse">
                                    <span class="wheel"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== About ===============-->
            <section class="about section" id="about">
                <div class="container">
                    <!-- section title -->
                    <h2 class="section-title padd-15">À propos de moi</h2>
                    <div class="row">
                        <div class="about-img padd-15">
                            <!-- avatar img -->
                            <img src="https://cdn.discordapp.com/avatars/661525561394462730/069c273e3cf5cfcc305d49c8ee6613dd.webp" style="border-radius: 100%;" alt="">
                        </div>
                        <div class="about-content padd-15">
                            <div class="rounded">
                                <div class="row">
                                    <div class="about-text padd-15">
                                        <!-- about text -->
                                        <p>Je m'apelle JustStop__, jeune développeur de 16 ans passionné d'informatique et surtout de développement. Je pratique désormais l'HTML, le CSS ainsi que le Javascript.</p>
                                    </div>
                                    <div class="skills padd-15">
                                        <div class="row">
                                            <!-- skill item -->
                                            <div class="skill-item">
                                                <h4>HTML</h4>
                                                <div class="progress">
                                                    <div class="progress-in" style="width: 70%; background: rgb(255,209,92);"></div>
                                                    <div class="skill-percent">70%</div>
                                                </div>
                                            </div>
                                            <!-- skill item -->
                                            <div class="skill-item">
                                                <h4>CSS</h4>
                                                <div class="progress">
                                                    <div class="progress-in" style="width: 75%; background: rgb(255,76,96);"></div>
                                                    <div class="skill-percent">75%</div>
                                                </div>
                                            </div>
                                            <!-- skill item -->
                                            <div class="skill-item">
                                                <h4>Javascript</h4>
                                                <div class="progress">
                                                    <div class="progress-in" style="width: 85%; background: rgb(108,108,229);"></div>
                                                    <div class="skill-percent">85%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container">
                        <!-- fact item -->
                        <div class="fact-item padd-15">
                            <i class="lni lni-thumbs-up"></i>
                            <div class="details">
                                <h3>23</h3>
                                <p>Projets terminés</p>
                            </div>
                        </div>
                        <!-- fact item -->
                        <div class="fact-item padd-15">
                            <i class="lni lni-coffee-cup"></i>
                            <div class="details">
                                <h3>1</h3>
                                <p>Projet en cours</p>
                            </div>
                        </div>
                        <!-- fact item -->
                        <div class="fact-item padd-15">
                            <i class="lni lni-users"></i>
                            <div class="details">
                                <h3>23</h3>
                                <p>Clients satisfaits</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============== Services ===============-->
            <section class="services section">
                <div class="container">
                    <!-- section title -->
                    <h2 class="section-title padd-15">Services</h2>
                    <div class="row">
                        <!-- service item -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner" style="background: rgb(108,108,229);">
                                <img src="assets/img/discord.png" width="100px" alt="">
                                <h3>Bot Discord</h3>
                                <p>Création de robots Discord, publics ou privés, 100% personnalisés.</p>
                            </div>
                        </div>
                        <!-- service item -->
                        <div class="service-item padd-15">
                            <div class="service-item-inner" style="background: rgb(249,215,76);">
                                <img src="assets/img/service-2.svg" alt="">
                                <h3>Développement web</h3>
                                <p>Développement de site customisés, reliés ou non à un robot Discord.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text padd-15">
                        <p>À la recherche de quelque chose d'autre ? <a href="https://discord.gg/G5PcBpzuq8">Rejoins mon Discord</a> pour me contacter ! 👋</p>
                    </div>
                </div>
            </section>
            <!--=============== Experience ===============-->
            <section class="section" id="experience">
                <div class="container">
                    <!-- section title -->
                    <h2 class="section-title padd-15">Expériences</h2>
                    <div class="row">
                        <!-- experience -->
                        <div class="experience padd-15">
                            <div class="row">
                                <div class="timeline-box">
                                    <div class="timeline">
                                        <!-- timeline item -->
                                        <div class="timeline-item">
                                            <i class="lni lni-briefcase timeline-icon"></i>
                                            <h3 class="timeline-date">
                                                <i class="lni lni-calendar"></i> 2020 - Maintenant
                                            </h3>
                                            <h3 class="timeline-title">Développeur</h3>
                                            <p class="timeline-text">Développeur du bot personnalisé du serveur Discord Eclipse.</p>
                                        </div>
                                        <!-- timeline item -->
                                        <div class="timeline-item">
                                            <i class="lni lni-briefcase timeline-icon"></i>
                                            <h3 class="timeline-date">
                                                <i class="lni lni-calendar"></i> 2019 - Maintenant
                                            </h3>
                                            <h3 class="timeline-title">Développeur JS</h3>
                                            <p class="timeline-text">Créateur de bots Discord personnalisés, reliés ou non à un site.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section" id="testimonial">
                <div class="container">
                    <h2 class="section-title padd-15" style="display: inline-flex;">Clients & Avis</h2>
                    <div class="review-button" style="display: inline-flex;color: var(--color-primary);cursor: pointer;">
                        <i class="lni lni-pencil add-review-btn" id="review-button" style="height: 32px;"></i>
                    </div>
                    <div class="swiper testimonial-wrapper">
                        <div class="swiper-wrapper">
                            <?php
                                include('config.php');

                                $mysqli = new mysqli($host, $user, $password, $database);
                                $stmt = $mysqli->query("SELECT * FROM `avis`");
                                $res = $stmt->fetch_all(MYSQLI_ASSOC);

                                foreach($res as $key){
                                    echo "<div class='testimonial-item swiper-slide'><div class='thumb'><img src='assets/img/avatar-".rand(1,3).".svg' style='border-radius: 100%;' alt=''></div><h3>".$key['name']."</h3><span class='subtitle'>".str_repeat("⭐", $key['note'])."</span><div>".$key['avis']."</div></div>";
                                }

                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            
            <footer class="footer">
                <div class="container">
                    <div class="footer-text padd-15">
                        <p>&copy; JustStop__ &bull; 2022 &bull; <a href="https://discord.gg/G5PcBpzuq8" style="color: var(--color-primary);">Me contacter</a></p>
                    </div>
                </div>
            </footer>
        </main>

        <div class="add-review">
            <div class="card">
                <h2>Ajoutez un avis</h2>
                <p>Poster votre avis concernant le développement des bots et sites effectués !</p>

                <div class="name">
                    <h3>Nom / Pseudo</h3>
                    <div>
                        <div class="choose-name">
                            <input type="text" name="name" id="name" placeholder="JustStop__" maxlength="20">
                        </div>
                    </div>
                </div>

                <div class="review">
                    <h3>Commentaire</h3>
                    <div>
                        <div class="choose-review">
                            <textarea name="name" name="review" id="review" placeholder="Merci de mettre ici un avis constructif." maxlength="300"></textarea>
                        </div>
                    </div>
                </div>

                <div class="note">
                    <h3>Note</h3>
                    <div>
                        <h3>0</h3>
                        <div class="choose-note">
                            <span class="note-1 active"></span>
                            <span class="note-2"></span>
                            <span class="note-3"></span>
                            <span class="note-4"></span>
                            <span class="note-5"></span>
                        </div>
                        <h3>5</h3>
                    </div>
                </div>

                <div class="submit">
                    <a href="#" class="btn btn-default" onclick="post();">Poster</a>
                </div>
            </div>
        </div>
        
        <div class="customize-theme">
            <div class="card">
                <h2>Customisez votre expérience</h2>
                <p>Choisissez la taille d'écriture, ansi que la couleur d'écriture et de fond !</p>
                <!-- font size -->
                <div class="font-size">
                    <h3>Taille d'écriture</h3>
                    <div>
                        <h6>Aa</h6>
                        <div class="choose-size">
                            <span class="font-size-1"></span>
                            <span class="font-size-2"></span>
                            <span class="font-size-3 active"></span>
                            <span class="font-size-4"></span>
                        </div>
                        <h3>Aa</h3>
                    </div>
                </div>
                <!-- color -->
                <div class="color">
                    <h3>Couleur</h3>
                    <div class="choose-color">
                        <span class="color-1"></span>
                        <span class="color-2"></span>
                        <span class="color-3 active"></span>
                        <span class="color-4"></span>
                        <span class="color-5"></span>
                    </div>
                </div>
                <!-- background -->
                <div class="background">
                    <h3>Fond</h3>
                    <div class="choose-bg">
                        <div class="bg-1 active">
                            <span></span>
                            <h5 for="bg-1">Clair</h5>
                        </div>
                        <div class="bg-2">
                            <span></span>
                            <h5 for="bg-2">Sombre</h5>
                        </div>
                        <div class="bg-3">
                            <span></span>
                            <h5 for="bg-3">Très sombre</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>    
        <script src="assets/js/main.js"></script>
    </body>
</html>