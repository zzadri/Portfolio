<?php


// API ROOTME

$opts = array("http" => array("method" => "GET", "header" => "Cookie: api_key=409021_fea474cd8dc2fd09f28d446c6cd5af3ea201be3e94e05b7dd52f35ad3fb0fc22\r\n"));
$context = stream_context_create($opts);
$resp = file_get_contents("https://api.www.root-me.org/auteurs/409021", false, $context);
$data = json_decode($resp, false);
// print($data->{'nom'});
// print($data->{'score'});
// print($data->{'position'});
$name = $data->{'nom'};
$score = $data->{'score'};
$position = $data->{'position'};

//print($data);

// API CodeWars

$respco = file_get_contents("https://www.codewars.com/api/v1/users/zzAdri", false);
$dataco = json_decode($respco, false);
// print($dataco->{'username'});
// print($dataco->{'honor'});
// print($dataco-> ranks-> overall -> {'name'});
$nameco = $dataco->{'username'};
$scoreco = $dataco->{'honor'};
$ranksco = $dataco->ranks->overall->{'name'};

function auto_copyright($year = 'auto')
{
    if (intval($year) == 'auto') {
        $year = date('Y');
    }
    if (intval($year) == date('Y')) {
        echo intval($year);
    }
    if (intval($year) < date('Y')) {
        echo intval($year) . ' - ' . date('Y');
    }
    if (intval($year) > date('Y')) {
        echo date('Y');
    }
}

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- meda quand partager via une app tier -->

    <!-- Basic metadata -->
    <!-- description -->
    <meta name="description" content="just a student's portfolio..."> />
    <meta name="url" content="https://portfolio.lafargue.info">
    <!-- redirection quand on clique sur le Titre-->
    <meta name="author" content="contact@lafargue.info"> <!-- affiche le créateur du site -->
    <meta name='language' content='FR, UK'> <!-- language du site -->
    <meta name="keywords" content="Portfolio, portfolio, étudiant, étudiants, BTS SIO, SIO.">
    <!-- Mots qui ferront resortire le site a la recherche -->

    <!-- OpenGraph metadata -->
    <meta name='og:title' content='Portfolio'>
    <meta name='og:type' content='portfolio'>
    <meta name='og:url' content='https://portfolio.lafargue.info'>
    <meta name='og:image' content="https://cdn.discordapp.com/attachments/719960352028360796/1048993153971142666/metalogo.png">
    <meta name='og:site_name' content='portfolio-lafargue'>
    <meta name='og:description' content="just a student's portfolio...">

    <!-- Titre -->
    <title>Portfolio</title>

    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="64x64" href="../img/logo/mainlogoo.png">

    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body id="page-top">
    <!--   _____        ___       __                 ____       _____  ________________ __________  ________ ____ ______________
          /  _  \    __| _/______|__| ____   ____   |    |     /  _  \ \_   _____/  _  \\______   \/  _____/|    |   \_   _____/
         /  /_\  \  / __ |\_  __ \  |/ __ \ /    \  |    |    /  /_\  \ |    __)/  /_\  \|       _/   \  ___|    |   /|    __)_ 
        /    |    \/ /_/ | |  | \/  \  ___/|   |  \ |    |___/    |    \|     \/    |    \    |   \    \_\  \    |  / |        \
        \____|__  /\____ | |__|  |__|\___  >___|  / |_______ \____|__  /\___  /\____|__  /____|_  /\______  /______/ /_______  /
                \/      \/               \/     \/          \/       \/     \/         \/       \/        \/                 \/  -->



    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
            <!-- Nom -->
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Adrien LAFARGUE</a>

            <!-- boutton menu telephone -->
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- menu ordinateur -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#presentation">
                            Presentation
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Mesexp">
                            My experiences
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Froma">
                            My education
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#compe">
                            My skills
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="fr-fr">
                            Language
                            <img src="../img/langue/UK.png" alt="logo-france">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

            <!-- pdp -->
            <img class="masthead-avatar mb-5" src="../img/pp/photo.jpg" alt="">

            <!-- Titre -->
            <h1 class="masthead-heading mb-0">Portfolio</h1>

            <!-- barre etoile -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- auto typewrite -->
            <h1>
                <a class="typewrite" data-period="5000" data-type='["I am a student in BTS SIO"]'>
                    <span class="wrap"></span>
                </a>
            </h1>
        </div>
    </header>
    <section class="page-section portfolio" id="presentation">
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Presentation</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- texte -->

            <h4 class="centertexte">
                Passionate about computers for many years, my professional path was immediately clear.
            </h4>

            <!-- Portfolio Grid Items-->
            <div class="row justify-content">
                <div class="card-pres">
                    <div class="card-body">
                        <div class="card">
                            <h5 class="presentation-title moi">Who am I ?</h5>

                            <p class="presentation-title moi-texte">
                                My name is Adrien, and I'm currently in BTS SIO, SLAM option.
                                <br>
                                Here you can discover my professional path, my skills, and learn more about me.
                                <br><br>
                                <span class="reduss">SIO : (Computer Services to Organizations)</span>
                                <br>
                                <span class="reduss">SLAM : (Software Solutions and Business Applications)</span>.
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <h5 class="presentation-title langue">
                                Language
                                <br>
                                ―― Practiced ――
                            </h5>
                            <div class="contenaire anglais">
                                <div class="wrapper">

                                    <div class="skill">
                                        <img src="../img/langue/Flag Uk.png" alt="drapeau-uk">
                                        <p>English <span>level : B1+</span></p>
                                    </div>

                                    <div class="skill">
                                        <img src="../img/langue/Flag ES.png" alt="drapeau-es">
                                        <p>Spanish <span>level : A2</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="page-section bg-primary text-white mb-0" id="Mesexp">
        <div class="container">
            <!-- Titre section -->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">My experiences</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- TimeLine horizontale -->
            <div class="container">
                <div class="main-timeline">
                    <!-- block 1 <rose> -->
                    <div class="timeline">
                        <article class="timeline-content">
                            <div class="timeline-icon">
                                <lord-icon src="https://cdn.lordicon.com/wluyqhxh.json" trigger="hover" delay="1500" colors="primary:#ffffff" state="hover" style="width:48px;height:48px">
                                </lord-icon>
                            </div>
                            <h3 class="title">Apprenticeship internship</h3>
                            <p class="description">
                                From May 2023 to July 2023, I completed a one-month internship at Atol Conseils et Développements in Gevrey-Chambertin.
                            </p>
                        </article>
                    </div>
                    <!-- block 2 <vert> -->
                    <div class="timeline">
                        <article class="timeline-content">
                            <div class="timeline-icon">
                                <lord-icon src="https://cdn.lordicon.com/hkkhwztk.json" trigger="hover" delay="1500" colors="primary:#ffffff" state="hover" style="width:48px;height:48px">
                                </lord-icon>
                            </div>
                            <h3 class="title">Apprenticeship internship</h3>
                            <p class="description">
                                From September 2020 to February 2022, I completed two 2-month apprenticeship internships at SARL MAUBON ELEC as an apprentice electrician.
                            </p>
                        </article>
                    </div>
                    <!-- block 3 <violet> -->
                    <div class="timeline">
                        <article class="timeline-content">
                            <div class="timeline-icon">
                                <lord-icon src="https://cdn.lordicon.com/tyounuzx.json" trigger="hover" colors="primary:#ffffff,secondary:#ffffff" stroke="100" axis-y="75" style="width:64px;height:64px"></lord-icon>
                            </div>
                            <h3 class="title">Observational work placement</h3>
                            <p class="description">
                                I completed an observation internship at APRR headquarters in Saint-Apollinaire from May 2018 to June 2019
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>


        <!-- telechargé mon CV -->
        <div class="download">
            <div class="button" id="button-7">
                <a class="a-7" href="./pdf/CV_2022-09-11_Adrien_LAFARGUE BTS SIO.pdf" download="CV_2022-09-11_Adrien_LAFARGUE BTS SIO.pdf">Download my resume</a>
            </div>
        </div>
        <!-- egg -->

        <a class="Easteregg1" href="Easter-Egg">.</a>

        <!-- fin egg -->
    </section>


    <section class="page-section" id="Froma">
        <div class="container">
            <!-- Titre sections -->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-secondary">My education</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="card-master">
                <div class="card">
                    <img src="../img/formation/saintbé.bmp" class="card-img-top" alt="image saint bénigne" />
                    <div class="card-body">
                        <h5 class="card-title">BTS SIO <br>September 2022 to July 2024</span> <br><a href="https://www.sb-lycee.fr/">School's website <i class="fas fa-link"></i></a>
                        </h5>
                        <p class="card-text">I completed my BTS SIO at Saint Bénigne private high school in Dijon.
                            <br>option: SLAM <span class="reduss">(Software Solutions and Business Applications)</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/formation/saintjo.bmp" class="card-img-top" alt="image saint Joseph" />
                    <div class="card-body">
                        <h5 class="card-title">Baccalaureate<br><span class="reduss-title">September 2021 to July 2022</span>
                        <br><a href="https://www.stjodijon.com/">school website <i class="fas fa-link"></i></a></h5>
                        <p class="card-text">At the private high school Saint Joseph la salle in Dijon, I passed my Bac professional. 
                            <br> Section : MELEC <span class="reduss">(Trades in Electricity and its Connected Environments)</span></p>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/formation/BEP.png" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">BEP MELEC<br><span>September 2020 to July 2021</span> <br><a href="https://www.stjodijon.com/">school website <i class="fas fa-link"></i></a></h5>
                        <p class="card-text">At the private high school Saint Joseph la salle in Dijon, I passed my 
                            <span class="reduss">(Trades in Electricity and its Connected Environments)</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/formation/pix.bmp" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Pix certificate<br><span>March 2022 to April 2022</span><br><a href="https://www.stjodijon.com/">school website <i class="fas fa-link"></i></a></h5>
                        <p class="card-text">At the private high school Saint Joseph la salle, I passed my Pix certificate.<br>
                            <span class="reduss">Certificate verification code : P-VW4K836X</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-section bg-primary text-white mb-0" id="compe">
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">My skills</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row justify-content">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto"> <!--data-toggle="modal" data-target="#portfolioModal0"-->
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="card portfolio-item-caption-content text-center text-white">

                                <img class="card-img-top" src="../img/comp/java.png" alt="Java" style="width:128px;height:128px;align-self:center;">

                                <a data-toggle="collapse" href="#collapseJava" aria-expanded="false" aria-controls="collapseJava">
                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:48px;height:48px; padding-top:5px; padding-bottom:5px">
                                    </lord-icon>
                                </a>

                                <div class="collapse" id="collapseJava">
                                    <div class="card card-block">
                                        <p class="mb-5 text-dark">
                                            <br>
                                            I'm starting to learn the java language on my own, and soon I'll be doing my
                                            internship.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="https://github.com/zzadri/Projet-en-java/blob/master/chronom%C3%A8tre.java" target="_blank">
                                                <i class="fab fa-fw fa-github"></i>
                                                Java project
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto"> <!--data-toggle="modal" data-target="#portfolioModal1"-->
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="card portfolio-item-caption-content text-center text-white">

                                <img class="card-img-top" src="../img/comp/js.png" alt="Java-script" style="width:128px;height:128px;align-self:center;">

                                <a data-toggle="collapse" href="#collapseJava-script" aria-expanded="false" aria-controls="collapseJava-script">
                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:48px;height:48px; padding-top:5px; padding-bottom:5px">
                                    </lord-icon>
                                </a>

                                <div class="collapse" id="collapseJava-script">
                                    <div class="card card-block">
                                        <p class="mb-5 text-dark">
                                            <br>
                                            I started learning the java-script language as part of my studies and as an autodidact.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="https://github.com/zzadri/Bot-JavaScript/tree/main/bot%20Discord%20JavaScript" target="_blank">
                                                <i class="fab fa-fw fa-github"></i>
                                                Java-Script Project
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="img/comp/js.png" alt="Java-script">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto"> <!--data-toggle="modal" data-target="#portfolioModal2"-->
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="card portfolio-item-caption-content text-center text-white">

                                <img class="card-img-top" src="../img/comp/unity.png" alt="Unity" style="width:128px;height:128px;align-self:center;">

                                <a data-toggle="collapse" href="#collapseUnity" aria-expanded="false" aria-controls="collapseUnity">
                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:48px;height:48px; padding-top:5px; padding-bottom:5px"></lord-icon>
                                </a>

                                <div class="collapse" id="collapseUnity">
                                    <div class="card card-block">
                                        <p class="mb-5 text-dark">
                                            <br>
                                            I started using unity as part of my studies using the C# language.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="https://github.com/zzadri/porjet-C-sharp" target="_blank">
                                                <i class="fab fa-fw fa-github"></i>
                                                Unity Project
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="img/comp/unity.png" alt="unity">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto"> <!--data-toggle="modal" data-target="#portfolioModal2"-->
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="card portfolio-item-caption-content text-center text-white">

                                <img class="card-img-top" src="../img/comp/html.png" alt="html" style="width:128px;height:128px;align-self:center;">

                                <a data-toggle="collapse" href="#collapsehtml" aria-expanded="false" aria-controls="collapsehtml">
                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:48px;height:48px; padding-top:5px; padding-bottom:5px">
                                    </lord-icon>
                                </a>

                                <div class="collapse" id="collapsehtml">
                                    <div class="card card-block">
                                        <p class="mb-5 text-dark">
                                            <br>
                                            I've already practised HTML language and have a solid grounding in it.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="https://github.com/zzadri/Portfolio" target="_blank">
                                                <i class="fab fa-fw fa-github"></i>
                                                Html project
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="img/comp/html.png" alt="html">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto"> <!--data-toggle="modal" data-target="#portfolioModal2"-->
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="card portfolio-item-caption-content text-center text-white">

                                <img class="card-img-top" src="../img/comp/c-sharp.png" alt="c-sharp" style="width:128px;height:128px;align-self:center;">

                                <a data-toggle="collapse" href="#collapsec-sharp" aria-expanded="false" aria-controls="collapsec-sharp" trigger="hover">
                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:48px;height:48px; padding-top:5px; padding-bottom:5px">
                                    </lord-icon>
                                </a>

                                <div class="collapse" id="collapsec-sharp">
                                    <div class="card card-block">
                                        <p class="mb-5 text-dark">
                                            <br>
                                            I started learning the C# language as part of my studies and as a self-taught
                                            self-taught.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="https://github.com/zzadri/porjet-C-sharp" target="_blank">
                                                <i class="fab fa-fw fa-github"></i>
                                                C-sharp project
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="img/comp/c-sharp.png" alt="C-sharp">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto"> <!--data-toggle="modal" data-target="#portfolioModal2"-->
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="card portfolio-item-caption-content text-center text-white">

                                <img class="card-img-top" src="../img/comp/python.png" alt="python" style="width:128px;height:128px;align-self:center;">

                                <a data-toggle="collapse" href="#collapsepython" aria-expanded="false" aria-controls="collapsepython">
                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:48px;height:48px; padding-top:5px; padding-bottom:5px">
                                    </lord-icon>
                                </a>

                                <div class="collapse" id="collapsepython">
                                    <div class="card card-block">
                                        <p class="mb-5 text-dark">
                                            <br>
                                            Python was the first programming language I learned, and I have a pretty good grounding in it.
                                            basis in this language.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="https://github.com/zzadri/Tiktok-Discord/tree/main/live%20tiktok" target="_blank">
                                                <i class="fab fa-fw fa-github"></i>
                                                Python project
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="img/comp/python.png" alt="python">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <h2>Code wars</h2>
                                <div class="container">
                                    <div class="card hover-lift hover-shadow-xl shadow-sm border-0">
                                        <div class="card-body p-4">
                                            <div class="d-flex mb-4 align-items-center">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div class="p-2 bg-black shadow-lg position-relative flex-center rounded-circle border">
                                                        <img src="../img/comp/code wars.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-secondary">
                                                <?php echo "Pseudo : " . $nameco
                                                ?>
                                            </h5>
                                            <h6 class="mb-0 text-muted"><?php echo "Score : " . $scoreco
                                                                        ?></h6>
                                            <h6 class="mb-0 text-muted">
                                                <?php echo "Ranks : " . $ranksco
                                                ?>
                                            </h6>
                                        </div>
                                        <!--link-->
                                        <a href="https://www.codewars.com/users/zzAdri" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" id="nodisplay">
                    <div class="portfolio-item mx-auto">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <h2>Root-me</h2>
                                <div class="container">
                                    <div class="card hover-lift hover-shadow-xl shadow-sm border-0">
                                        <!--card-body-->
                                        <div class="card-body p-4">
                                            <div class="d-flex mb-4 align-items-center">

                                                <!--Companies group-->
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <!--Campany-->
                                                    <div class="p-2 bg-black shadow-lg position-relative flex-center rounded-circle border">
                                                        <img src="../img/comp/rootmee.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-secondary">
                                                <?php echo "Pseudo : " . $name ?>
                                            </h5>
                                            <h6 class="mb-0 text-muted">
                                                <?php echo "Score : " . $score ?></h6>
                                            <h6 class="mb-0 text-muted">
                                                <?php echo "Position : " . $position . "ème" ?>
                                            </h6>
                                        </div>
                                        <!--link-->
                                        <a href="https://www.root-me.org/zzadri?lang=fr" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-section" id="contact">
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- information pour Contact -->
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3">
                            <lord-icon src="https://cdn.lordicon.com/diihvcfp.json" trigger="hover" colors="primary:#ffffff" state="hover" style="width:48px;height:48px">
                            </lord-icon>
                        </div>
                        <div class="text-muted">Email</div>
                        <a class="lead font-weight-bold" href="mailto:contact@lafargue.info" target="_blank">
                            Contact@lafargue.info
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Référentiel</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    Bloc 1 : 1.1.1, 1.1.2, 1.1.5, 1.4.2, 1.5.2, 1.6.1, 1.6.2, 1.6.3 et 1.6.4 <br>
                                    Bloc 2 : Aucune actuellement <br>
                                    Bloc 3 : 3.1.2, 3.1.4, 3.3.2, 3.3.3, 3.4.1, 3.4.2, et 3.5.5 <br>
                                </p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Bloc 1</th>
                                            <th>Bloc 2</th>
                                            <th>Bloc 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.1.1 : Recenser et identifier les ressources numériques</td>
                                            <td>2.1.1 : Analyser un besoin exprimé et son contexte juridique</td>
                                            <td>3.1.1 : Recenser les traitements sur les données à caractère
                                                personnel au sein de l'organisation</td>
                                        </tr>
                                        <tr>
                                            <td>1.1.2 : Exploiter des référentiels, normes et standards adoptés par
                                                le prestataire informatique </td>
                                            <td>2.1.2 : Participer à la conception de l'architecture d'une solution
                                                applicative</td>
                                            <td>3.1.2 : Identifier les risques liés à la collecte, au traitement, au
                                                stockage et à la diffusion des données à caractère personnel</td>
                                        </tr>
                                        <tr>
                                            <td>1.1.3 : Mettre en place et vérifier les niveaux d'habilitation
                                                associés à un service</td>
                                            <td>2.1.3 : Modéliser une solution applicative</td>
                                            <td>3.1.3 : Appliquer la réglementation en matière de collecte, de
                                                traitement et de conservation des données à caractère personnel</td>
                                        </tr>
                                        <tr>
                                            <td>1.1.4 : Vérifier les conditions de la continuité d'un service
                                                informatique</td>
                                            <td>2.1.4 : Exploiter les ressources du cadre applicatif (framework)</td>
                                            <td>3.1.4 : Sensibiliser les utilisateurs à la protection des données à
                                                caractère personnel</td>
                                        </tr>
                                        <tr>
                                            <td>1.1.5 : Gérer des sauvegardes</td>
                                            <td>2.1.5 : Identifier, développer, utiliser ou adapter des composants
                                                logiciels</td>
                                            <td>3.2.1 : Protéger l'identité numérique d'une organisation</td>
                                        </tr>
                                        <tr>
                                            <td>1.1.6 : Vérifier le respect des règles d'utilisation des ressources
                                                numériques</td>
                                            <td>2.1.6 : Exploiter les technologies Web pour mettre en œuvre les échanges
                                                entre applications, y compris de mobilité</td>
                                            <td>3.2.2 : Déployer les moyens appropriés de preuve électronique</td>
                                        </tr>
                                        <tr>
                                            <td>1.2.1 : Collecter, suivre et orienter des demandes</td>
                                            <td>2.1.7 : Utiliser des composants d'accès aux données </td>
                                            <td>3.3.1 : Informer les utilisateurs sur les risques associés à
                                                l'utilisation d'une ressource numérique et promouvoir les bons usages
                                                à adopter</td>
                                        </tr>
                                        <tr>
                                            <td>1.2.2 : Traiter des demandes concernant les services réseau et
                                                système, applicatifs</td>
                                            <td>2.1.8 : Intégrer en continu les versions d'une solution applicative</td>
                                            <td>3.3.2 : Identifier les menaces et mettre en œuvre les défenses
                                                appropriées</td>
                                        </tr>
                                        <tr>
                                            <td>1.2.3 : Traiter des demandes concernant les applications</td>
                                            <td>2.1.9 : Réaliser les tests nécessaires à la validation ou à la mise
                                                en production d'éléments adaptés ou développés</td>
                                            <td>3.3.3 : Gérer les accès et les privilèges appropriés</td>
                                        </tr>
                                        <tr>
                                            <td>1.3.1 : Participer à la valorisation de l'image de l'organisation sur
                                                les médias numériques en tenant compte du cadre juridique et des
                                                enjeux économiques</td>
                                            <td>2.1.10 : Rédiger des documentations technique et d'utilisation d'une
                                                solution applicative</td>
                                            <td>3.3.4 : Vérifier l'efficacité de la protection</td>
                                        </tr>
                                        <tr>
                                            <td>1.3.2 : Référencer les services en ligne de l'organisation et mesurer
                                                leur visibilité</td>
                                            <td>2.1.11 : Exploiter les fonctionnalités d'un environnement de
                                                développement et de tests</td>
                                            <td>3.4.1 : Caractériser les risques liés à l'utilisation malveillante
                                                d'un service informatique</td>
                                        </tr>
                                        <tr>
                                            <td>1.3.3 : Participer à l'évolution d'un site Web exploitant les données
                                                de l'organisation</td>
                                            <td>2.2.1 : Recueillir, analyser et mettre à jour les informations sur une
                                                version d'une solution applicative</td>
                                            <td>3.4.2 : Recenser les conséquences d'une perte de disponibilité,
                                                d'intégrité ou de confidentialité</td>
                                        </tr>
                                        <tr>
                                            <td>1.4.1 : Analyser les objectifs et les modalités d'organisation d'un
                                                projet</td>
                                            <td>2.2.2 : Étudier l'impact d'une évolution d'un élément
                                                d'infrastructure sur le système informatique</td>
                                            <td>3.4.3 : Identifier les obligations légales qui s'imposent en matière
                                                d'archivage et de protection des données de l'organisation</td>
                                        </tr>
                                        <tr>
                                            <td>1.4.2 : Planifier les activités</td>
                                            <td>2.2.3 : Évaluer la qualité d'une solution applicative</td>
                                            <td>3.4.4 : Organiser la collecte et la conservation des preuves numériques
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1.4.3 : Évaluer les indicateurs de suivi d'un projet et analyser les
                                                écarts</td>
                                            <td>2.2.4 : Analyser et corriger un dysfonctionnement</td>
                                            <td>3.4.5 : Appliquer les procédures garantissant le respect des
                                                obligations légales</td>
                                        </tr>
                                        <tr>
                                            <td>1.5.1 : Réaliser les tests d'intégration et d'acceptation d'un service
                                            </td>
                                            <td>2.2.5 : Élaborer et réaliser les tests des éléments mis à jour</td>
                                            <td>3.5.1 : Participer à la vérification des éléments contribuant à la
                                                qualité d'un développement informatique</td>
                                        </tr>
                                        <tr>
                                            <td>1.5.2 : Déployer un service</td>
                                            <td>2.3.1 : Exploiter des données à l'aide d'un langage de requêtes</td>
                                            <td>3.5.2 : Prendre en compte la sécurité dans un projet de développement
                                                d'une solution applicative</td>
                                        </tr>
                                        <tr>
                                            <td>1.5.3 : Accompagner les utilisateurs dans la mise en place d'un service
                                            </td>
                                            <td>2.3.2 : Développer des fonctionnalités applicatives au sein d'un
                                                système de gestion de base de données (relationnel ou non)</td>
                                            <td>3.5.3 : Mettre en œuvre et vérifier la conformité d'une solution
                                                applicative et de son développement à un référentiel, une norme ou un
                                                standard de sécurité</td>
                                        </tr>
                                        <tr>
                                            <td>1.6.1 : Mettre en place son environnement d'apprentissage personnel</td>
                                            <td>2.3.3 : Concevoir ou adapter une base de données</td>
                                            <td>3.5.4 : Prévenir les attaques</td>
                                        </tr>
                                        <tr>
                                            <td>1.6.2 : Mettre en œuvre des outils et stratégies de veille
                                                informationnelle</td>
                                            <td>2.3.4 : Administrer et déployer une base de données</td>
                                            <td>3.5.5 : Analyser les connexions (logs)</td>
                                        </tr>
                                        <tr>
                                            <td>1.6.3 Gérer son identité professionnelle </td>
                                            <td></td>
                                            <td>3.5.6 : Analyser des incidents de sécurité, proposer et mettre en
                                                œuvre des contre-mesures</td>
                                        </tr>
                                        <tr>
                                            <td>1.6.4 Développer son projet professionnel </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">Location</h4>
                    <p class="pre-wrap lead mb-0">99 Rue de Talant<br>21000 Dijon</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">My other networks</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://wakelet.com/wake/3lAVLJgqKgVxGObIuOVQL">
                        <i class="fab fa-weebly"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/adrien-lafargue/">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/zzadri">
                        <i class="fab fa-fw fa-github"></i>
                    </a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="mb-4">Important link</h4>
                    <div data-toggle="modal" data-target="#portfolioModal10">
                        <a class="a-10" target="_blank" id="tab">Referential BTS SIO <i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-4 text-center text-white">
        <div class="container">
            <small class="pre-wrap">
                Copyright &copy; LAFARGUE <?php auto_copyright("2022"); ?>
            </small>
        </div>
    </section>
    <!-- Scroll to Top Button -->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    <!-- icone annimé -->
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>

</body>

</html>