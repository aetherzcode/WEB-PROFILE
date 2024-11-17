<?php
header("Cache-Control: max-age=31536000, public");
header("Expires: ".gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
header("Pragma: public");

ob_start();

function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s',
        '/<!--(.|\s)*?-->/'
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

ob_start("sanitize_output");

$url = "https://" . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YMWDE0VTD3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-YMWDE0VTD3");
    </script>
    <meta name="google-site-verification" content="zMNl24ruDnyqiliYwKNU_r09OkPCDKz0kMBtF9nqiCc" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="theme-color" content="#000" />
    <meta name="description" content="AETHER | Portfolio, Visit and know about me & my projects/designs. I value simple content structure, clean design patterns, and thoughtful interactions." />
    <meta name="keywords" content="AETHER,AETHER portfolio,AETHER Portfolio,AETHER web developer,AETHER site,AETHER Site,AETHER me,AETHER web,AETHER github,vinodjangid site,vinodjangid uiverse,uiverse,AETHER uiverse,AETHER frontend developer,frontend developer,AETHER jaipur,vinod jaipur"
    />
    <meta name="author" content="AETHER" />
    <meta property="og:image" content="https://aetherz.xyz/src/png/Preview-card-min.png" />
    <meta property="og:title" content="AETHER | Portfolio" />
    <meta property="og:description" content="Hi! My name is AETHER. I'm a web developer and digital visual artist. Visit and know about me & my projects/designs. I value simple content structure, clean design patterns, and thoughtful interactions." />

    <meta property="og:url" content="https://aetherz.xyz" />
    <meta property="og:site_name" content="AETHER Web Developer" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@aetherzx" />
    <meta name="twitter:title" content="AETHER | Portfolio" />
    <meta name="twitter:description" content="Hi! My name is AETHER. I'm a web developer and digital visual artist. Visit and know about me & my projects/designs. I value simple content structure, clean design patterns, and thoughtful interactions." />
    <meta name="twitter:image" content="https://aetherz.xyz/src/png/Preview-card-min.png" />
    <title>AETHER | Portfolio</title>
    <link rel="icon" type="image/x-icon" href="src/png/main-favicon.png" />
  <!-- aos cdn -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <!-- google fonts-->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Passions+Conflict&family=Orbitron&family=Fira+Code&family=Six+Caps" />

<body class="body">
  <audio loop="" id="audioPlayer" style="display: none">
    <source src="src/mp3/preloader.mp3" type="audio/mp3" />
  </audio>
  <div id="preloader"></div>
  <noscript>Allow Javascript</noscript>

  <header>
    <div class="cursor-inner" id="cursor-inner"></div>
    <div class="cursor-outer" id="cursor-outer"></div>

    <div class="navbar" id="navbar">
      <div class="hey">Hey!</div>
      <div class="logo" tabindex="0" aria-label="vinod jangid logo">
        <div class="logo-top">
          <img src="src/png/nav-avatar.png" alt="animation-head" id="nav-avatar"/>
        </div>
      </div>
      <div class="navbar-tabs" id="navbar-tabs">
        <ul class="navbar-tabs-ul">
          <li class="home activeThistab" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="100">
            <a href="#home" tabindex="0" aria-label="Home menu button">
              &#60;/Home&#62;
            </a>
          </li>

          <li class="about" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="250">
            <a href="#about" aria-label="about menu button">
              &#60;/AboutMe&#62;
            </a>
          </li>

          <li class="hobbies" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="350">
            <a href="#hobbies" aria-label="hobbies menu button">
                &#60;/Hobbies&#62;
            </a>
          </li>

          <li class="skills" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="500">
            <a href="#skills" aria-label="skills menu button">
              &#60;/Skills&#62;
            </a>
          </li>

          <li class="projects" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="700">
            <a href="#projects" aria-label="projects menu button">
              &#60;/Projects&#62;
            </a>
          </li>

          <li class="contact" class="navbar-tabs-li" data-aos="fade-down" data-aos-delay="900">
            <a href="#contact" aria-label="contact menu button">
              &#60;/Contact&#62;
            </a>
          </li>

        </ul>
      </div>
      <!-- navbar tabs ends -->
    </div>
  </header>
  <!-- header ends here -->

  <main>
    <!-- hamburger -->
    <div class="hamburger" id="hamburger" data-aos="fade">
      <div class="hamburgerbase">
        <button id="hamburger-button" onclick="hamburgerMenu()" tabindex="0" aria-label="Menu Button">
          <span class="burger-bar" id="burger-bar1"></span>
          <span class="burger-bar" id="burger-bar2"></span>
          <span class="burger-bar" id="burger-bar3"></span>
        </button>
      </div>
    </div>
    <!-- hamburger -->
    <div class="mobiletogglemenu" id="mobiletogglemenu">
      <ul class="mobile-navbar-tabs-ul" id="mobile-ul">
        <li id="home-mobile-tab" class="mobile-navbar-tabs-li home activeThismobiletab" onclick="hidemenubyli()">
          <a href="#home" tabindex="0" aria-label="Home menu button">
            &#60;/Home&#62;
          </a>
        </li>

        <li id="aboutme-mobile-tab" class="mobile-navbar-tabs-li about" onclick="hidemenubyli()">
          <a href="#about" tabindex="0" aria-label="about menu button">
            &#60;/AboutMe&#62;
          </a>
        </li>
        <li id="hobbies-mobile-tab" class="mobile-navbar-tabs-li hobbies" onclick="hidemenubyli()">
          <a href="#hobbies" tabindex="0" aria-label="hobbies menu button">
            &#60;/Hobbies&#62;
          </a>
        </li>
        <li id="skills-mobile-tab" class="mobile-navbar-tabs-li skills" onclick="hidemenubyli()">
          <a href="#skills" tabindex="0" aria-label="skills menu button">
            &#60;/Skills&#62;
          </a>
        </li>
        <li id="projects-mobile-tab" class="mobile-navbar-tabs-li projects" onclick="hidemenubyli()">
          <a href="#projects" tabindex="0" aria-label="projects menu button">
            &#60;/Projects&#62;
          </a>
        </li>
        <li id="contact-mobile-tab" class="mobile-navbar-tabs-li contact" onclick="hidemenubyli()">
          <a href="#contact" tabindex="0" aria-label="contact menu button">
            &#60;/Contact&#62;
          </a>
        </li>
      </ul>
    </div>
    <!-- mobile toggle menu ends -->

    <section class="landing-page-container" id="home">
                <div class="blob"></div>

                <div class="text-content">
                    <article id="hello-friend" data-aos="fade-up" data-aos-delay="0">
                        <p class="jello">H</p>
                        <p class="jello">a</p>
                        <p class="jello">l</p>
                        <p class="jello">l</p>
                        <p class="jello">o</p>
                        <p class="jello">(</p>
                        <p class="jello">)</p>
                        <p class="jello">;</p>
                        &nbsp;
                        <p class="jello">I</p>
                        <p class="jello">'</p>
                        <p class="jello">m</p>
                    </article>
                    <article id="name" data-aos="fade-up" data-aos-delay="200">
                        <p class="jello">A</p>
                        <p class="jello">E</p>
                        <p class="jello">T</p>
                        <p class="jello">H</p>
                        <p class="jello">E</p>
                        <p class="jello">R</p>
                    </article>

                    <article id="work" data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <p class="jello">I</p>
                        </div>
                        <div>
                            <p class="jello">d</p>
                            <p class="jello">e</p>
                            <p class="jello">s</p>
                            <p class="jello">i</p>
                            <p class="jello">g</p>
                            <p class="jello">n</p>
                        </div>
                        <div>
                            <p class="jello">&</p>
                        </div>
                        <div>
                            <p class="jello">c</p>
                            <p class="jello">o</p>
                            <p class="jello">d</p>
                            <p class="jello">e</p>
                        </div>
                        <div>
                            <p class="jello">f</p>
                            <p class="jello">o</p>
                            <p class="jello">r</p>
                        </div>
                        <div>
                            <p class="jello">w</p>
                            <p class="jello">e</p>
                            <p class="jello">b</p>
                            <p class="jello">.</p>
                        </div>
                    </article>
                    <p id="info-para" data-aos="fade-up" data-aos-delay="600">
                        Web Developer with experience of Digital Concept Arts, Frontend Web Designs. I Love fun Web UI, collaboration and making products.<br />
                        <br /> I value simple content structure, clean design patterns, and thoughtful interactions.
                    </p>
                    <div class="contact-btn-div" data-aos="fade-up" data-aos-delay="800">
                        <a href="https://wa.me/6285798045817" tabindex="-1">
                            <button class="letsTalkBtn">
              <p class="letsTalkBtn-text">Let's Talk!</p>
              <span class="letsTalkBtn-BG"></span>
            </button></a>
                        <div class="setting-container" id="setting-container">
                            <input type="checkbox" id="switchforsetting" onclick="settingtoggle()" />

                            <label for="switchforsetting" class="needtobeinvert" id="labelforsetting" tabindex="0" aria-label="settings for sound and appearance"></label>

                            <div class="visualmodetogglebuttoncontainer" id="visualmodetogglebuttoncontainer">
                                <input type="checkbox" id="switchforvisualmode" onclick="visualmode()" />
                                <label for="switchforvisualmode" id="labelforvisualmode" tabindex="0" aria-label="switch appearance"></label>
                            </div>

                            <div class="soundtogglebuttoncontainer" id="soundtogglebuttoncontainer">
                                <input type="checkbox" id="switchforsound" onclick="playpause()" />
                                <label for="switchforsound" id="labelforsound" tabindex="0" aria-label="switch sound" class="needtobeinvert"></label>
                            </div>
                        </div>
                        <!-- setting div ends -->
                    </div>
                    <!-- contact-btn-div -->
                </div>

            </section>
            <!-- landing page ends here -->
            <section class="about-section-container" id="about" data-aos="fade-up">
                <div class="about-section">
                    <div class="section-heading">
                        <h2 class="section-heading-article" tabindex="0" aria-label="About me heading">
                            &#60;/AboutMe&#62;
                        </h2>
                        <p class="sectionHeadingP"></p>
                    </div>

                    <div class="info-dp-section">
                        <div class="about-info">
                            <p tabindex="0">
                                Hi! My name is AETHER. I'm a web developer and digital visual artist. I love creating things that exist on the internet. My interest in web development started in 2021 when I decided to upload my digital concept arts online.
                            </p>
                            <br />
                            <p tabindex="0">
                                Instead of creating an online Concepts Art website, I started enjoying web development. Creating custom things for the web taught me a lot about design & development!
                            </p>
                            <br />
                            <p tabindex="0">
                                My main focus these days is building interesting & creative web designs. I like to code things from scratch and enjoy bringing ideas to life in the browser.
                            </p>
                            <div class="text">Resume</div>
                        </div>

                        <div class="dp" data-aos="fade-up">
                            <img src="src/png/aether.jpg" alt="AETHER - Web Developer and Digital Visual Artist" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- about section ends  -->

            <section class="about-section-container" id="hobbies" data-aos="fade-up">
                <div class="about-section">
                    <div class="section-heading">
                        <h2 class="section-heading-article" tabindex="0" aria-label="About me heading">
                            &#60;/Hobbies&#62;
                        </h2>
                        <p class="sectionHeadingP"></p>
                    </div>

                    <div class="info-dp-section">
                        <div class="about-info">
                            <p tabindex="0">
                            My hobbies include the art of music and the world of programming, two things that give me the opportunity to be creative and grow.
                            </p>
                            <br />
                            <p tabindex="0">
                            Playing guitar is my way of expressing feelings through melody, while as a vocalist, I can connect emotions through sound.
                            </p>
                            <br />
                            <p tabindex="0">
                            Meanwhile, in the world of programming, I find challenges in creating new solutions, turning ideas into reality, and solving problems with logic and creativity.
                            </p>
                            <div class="text">Resume</div>
                        </div>

                        <div class="dp" data-aos="fade-up">
                            <video controls style="width: 92%; height: auto;">
                                <source src="src/mp4/playing-guitar.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about section ends  -->

            <section class="skills-section-container" id="skills">
                <div class="skills-section">
                    <div class="section-heading" data-aos="fade-up">
                        <h2 class="section-heading-article" tabindex="0" aria-label="skills heading">
                            &#60;/Skills&#62;
                        </h2>
                        <p class="sectionHeadingP"></p>
                    </div>

                    <div class="frontend-dev-section">
                        <h3 class="frontend-dev-heading" data-aos="fade-up" tabindex="0" aria-label="As a frontend a developer these are the skills i have">
                            Tech Stack
                        </h3>
                        <ul class="tech-stack-wrapper">
                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/htmllogo.png" alt="Html skill" class="tech-stack-logo" />
                                <span class="tooltip">HTML</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/csslogo.png" alt="css skill" class="tech-stack-logo" />
                                <span class="tooltip">CSS</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/jslogo.png" alt="js skill" class="tech-stack-logo" />
                                <span class="tooltip">JS</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/bootstraplogo.png" alt="bootstrap skill" class="tech-stack-logo" />
                                <span class="tooltip">BOOTSTRAP</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/reactlogo.png" alt="react skill" class="tech-stack-logo" />
                                <span class="tooltip">REACT</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/githublogo.png" alt="github skill" class="tech-stack-logo needtobeinvert" />
                                <span class="tooltip">GITHUB</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/gitlogo.png" alt="git skill" class="tech-stack-logo" />
                                <span class="tooltip">GIT</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/clogo.png" alt="c language skill" class="tech-stack-logo" />
                                <span class="tooltip">C</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/cpplogo.png" alt="c++ language skill" class="tech-stack-logo" />
                                <span class="tooltip">C++</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/figmalogo.png" alt="figma skill" class="tech-stack-logo" />
                                <span class="tooltip">FIGMA</span>
                            </li>

                            <li class="tech-stack-box" data-aos="fade-up">
                                <img src="./src/png/canvalogo.png" alt="canva skill" class="tech-stack-logo" />
                                <span class="tooltip">CANVA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- skills section ends -->

            <section class="projects-section-container" id="projects">
                <div class="projects-section-div">
                    <div class="section-heading" data-aos="fade-up">
                        <h2 class="section-heading-article" tabindex="0" aria-label="My projects starts from here">
                            &#60;/Projects&#62;
                        </h2>
                        <p class="sectionHeadingP"></p>
                    </div>
                    <div class="project-boxes-div">
                        <div data-aos="fade-up" class="project-box-wrapper">
                            <div class="project-box project-box2" id="project-box2">
                                <div class="info-div">
                                    <img src="src/webp/pexelicon-favicon.webp" alt="pexelicon website favicon" class="faviconforProject" />
                                    <article class="ProjectHeading">Pexelicons</article>
                                    <p class="ProjectDescription">
                                        Pexelicons: A world of personalized file folder icons to transform your PC into a reflection of your style.
                                    </p>
                                    <div class="project-buttons">
                                        <a href="https://pexelicons.aetherz.xyz/" target="_blank" class="cta" aria-label="Visit Pexelicons Live">
                                            <span>Live view</span>
                                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-div">
                                    <img src="src/webp/Group 76.webp" alt="Pexelicon website preview image" />
                                </div>
                            </div>
                        </div>

                        <div class="project-box-wrapper" data-aos="fade-up">
                            <div class="project-box project-box4" id="project-box4">
                                <div class="info-div">
                                    <img src="src/webp/bot-icon.webp" alt="Discord Music Bot" class="faviconforProject" />
                                    <article class="ProjectHeading">Discord Music</article>
                                    <p class="ProjectDescription">
                                    The Powerful and Cool Discord Music Bot!.
                                    </p>
                                    <div class="project-buttons">
                                        <a href="https://aetherzbotzz.aetherz.xyz/" target="_blank" class="cta" aria-label="Visit Discord Music Bot live">
                                            <span>Live view</span>
                                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-div">
                                    <img src="src/webp/discord-music-bot.webp" alt="Discord Music Bot" />
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------- -->

                        <div class="project-box-wrapper" data-aos="fade-up">
                            <div class="project-box project-box4" id="project-box4">
                                <div class="info-div">
                                    <img src="src/webp/payment-icon.webp" alt="List of Payment" class="faviconforProject" />
                                    <article class="ProjectHeading">List of Payment</article>
                                    <p class="ProjectDescription">
                                    List of Payment Methods for Transactions!.
                                    </p>
                                    <div class="project-buttons">
                                        <a href="https://my-payments.aetherz.xyz/" target="_blank" class="cta" aria-label="List of Payment live">
                                            <span>Live view</span>
                                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-div">
                                    <img src="src/webp/my-payment.webp" alt="List of Payment" />
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------- -->

                        <!-- ---------------------- -->
                        <div class="project-box-wrapper" data-aos="fade-up">
                            <div class="project-box project-box4" id="project-box4">
                                <div class="info-div">
                                    <img src="src/webp/qr-favicon.webp" alt="Qr generator website favicon" class="faviconforProject" />
                                    <article class="ProjectHeading">QR Generator</article>
                                    <p class="ProjectDescription">
                                        A webpage to make a QR Code from text using API.
                                    </p>
                                    <div class="project-buttons">
                                        <a href="https://qr-generator.aetherz.xyz/" target="_blank" class="cta" aria-label="Visit qr generator live">
                                            <span>Live view</span>
                                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-div">
                                    <img src="src/webp/QRgeneratorProject.webp" alt="qr generator website preview image" />
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------- -->

                        <div class="project-box-wrapper" data-aos="fade-up">
                            <div class="project-box project-box1" id="project-box1">
                                <div class="info-div">
                                    <img src="src/webp/axocean-favicon.webp" alt="Axocean website favicon" class="faviconforProject" />
                                    <article class="ProjectHeading">AXOCEAN</article>
                                    <p class="ProjectDescription">
                                        E-commerce website frontend work to choose people their favorite design of product and redirect to flipkart shopping site.
                                    </p>
                                    <div class="project-buttons">
                                        <a href="https://axocean.aetherz.xyz/" target="_blank" class="cta" aria-label="Visit axocean live">
                                            <span>Live view</span>
                                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-div">
                                    <img src="src/webp/AXOCEAN-project.webp" alt="Axocean website preview image" />
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------- -->
        </div>
      </div>
    </section>
  </main>
  <!-- main ends here -->

  <section id="contact" class="section" data-aos="fade-up">


  <footer id="footer">
    <button class="fas" id="backtotopbutton" onclick="scrolltoTopfunction()">
      <article aria-label="Back to top">&#8592;BACK TO TOP</article>
    </button>
    <div class="footer-background">
      <div class="footer-blob"></div>
    </div>
    <div class="footer-foreground">
      <div class="footercontainer">
        <div class="footer-avatar-container">
            <img src="src/png/footer-avatar-vinod.png" alt="animation-head" class="footer-avatar-img" id="footer-wala-avatar"/>
            <div class="footer-avatar-face">
                <div class="footer-avatar-eye footer-left-eye">
                    <div class="footer-pupil"></div>
                </div>
                <div class="footer-avatar-eye footer-right-eye">
                    <div class="footer-pupil"></div>
                </div>
            </div>
        </div>
        <div class="two-words">
          <article tabindex="0" aria-label="Learning, Living, and Leveling Up, my quote">
            "Learning, Living, and Leveling Up."
          </article>
        </div>
        <div class="social-media-container">
          <div class="getintouch-heading">
            <article>GetinTouch();</article>
          </div>
          <div class="logos">
          <a href="https://www.instagram.com/aetherz17_" target="_blank" tabindex="0" aria-label="My instagram"><svg viewBox="0 0 448 512" class="SocialHandle">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg></a>

                            <a href="https://wa.me/6285798045817" target="_blank" aria-label="My WhatsApp">
                                <svg class="SocialHandle" viewBox="0 0 448 512">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                </svg>
                            </a>

                            <a href="https://github.com/PRINCE-AETHER" target="_blank" aria-label="My github"><svg viewBox="0 0 496 512"
                class="SocialHandle">
                <path
                  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
              </svg></a>

                            <a href="mailto:aetherscode@gmail.com" target="_blank" aria-label="My G mail"><svg id="GmailLogo"
                viewBox="0 0 512 512">
                <path
                  d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
              </svg></a>
          </div>
        </div>
        <div class="contact-form">
            <div class="shadow-box">
                <h1>Message To AETHER</h1>
                <form id="contactForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                        <div class="input-group">
                            <input type="text" name="nama" id="full-name" placeholder="Name *" required>
                        </div>
                        <div class="input-group">
                          <input type="number" name="kontak" id="whatsapp" placeholder="WhatsApp *" required>
                      </div>
                        <div class="input-group">
                            <input type="email" name="email" id="email" placeholder="Email ( Opsional )">
                        </div>
                        <div class="input-group">
                            <textarea name="message" id="message" placeholder="Your Message *" required></textarea>
                        </div>
                        <div class="input-group">
                            <button class="theme-btn submit-btn" name="submit" type="submit">Send Message</button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="footer-bottom">
          <article>
            Design & Built by AETHER
          </article>
        </div>
      </div>
    </div>
  </footer>
  </section>
  <!-- footer ends here -->

  <script src="main.js"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    function openURL() {
      var url = "src/pdf/AETHER's Resume.pdf";

      window.open(url, "_blank");
    }
  </script>

  <script>
    const cursorInner = document.getElementById("cursor-inner");
    const cursorOuter = document.getElementById("cursor-outer");
    const links = document.querySelectorAll("a,label,button");

    document.addEventListener("mousemove", function (e) {
      const posX = e.clientX;
      const posY = e.clientY;

      cursorInner.style.left = `${posX}px`;
      cursorInner.style.top = `${posY}px`;

      // cursorOuter.style.left = `${posX}px`;
      // cursorOuter.style.top = `${posY}px`;

      cursorOuter.animate(
        {
          left: `${posX}px`,
          top: `${posY}px`,
        },
        { duration: 500, fill: "forwards" }
      );

      links.forEach((link) => {
        link.addEventListener("mouseenter", () => {
          cursorInner.classList.add("hover");
          cursorOuter.classList.add("hover");
        });
        link.addEventListener("mouseleave", () => {
          cursorInner.classList.remove("hover");
          cursorOuter.classList.remove("hover");
        });
      });
    });
  </script>
 <script src='https://saweria.co/overlays/recent-donation.js'></script>
        <script>
            SaweriaOverlay.draw('aetherscode', {
                'position': 'right',
                'theme': 'dark',
                'backgroundColor': '#794bc4',
                'textColor': '#fff'
            });
        </script>

        <!-- Saweria Button -->
        <a href="https://saweria.co/aetherscode" target="_blank" class="saweria-button">
            <img src="src/png/saweria.png" alt="Saweria Icon"> Support me
        </a>

        <style>
            .saweria-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #794bc4;
                color: #fff;
                padding: 10px 20px;
                border-radius: 25px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 8px;
                font-size: 14px;
                z-index: 1000;
            }
            
            .saweria-button img {
                width: 20px;
                height: 20px;
            }
            
            .saweria-button:hover {
                opacity: 0.9;
            }
        </style>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $kontak = $_POST['kontak'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $caption = "Notification from AETHERZ Website :\n\n";
  $caption .= "Name: $nama\n";
  $caption .= "WhatsApp: $kontak\n";
  $caption .= "Email: $email\n";
  $caption .= "Message: $message\n\n Powered By: AETHER";

  $imageUrl = 'https://i.ibb.co.com/GsJ7ZzS/logo.png';

  $url = "https://aetherz-discord-bot.vercel.app/api/submit-form";
  $data = array(
    'imageUrl' => $imageUrl,
    'caption' => $caption
  );

  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => "Content-Type: application/json\r\n",
      'content' => json_encode($data)
    )
  );

  $context = stream_context_create($options);
  $result = @file_get_contents($url, false, $context);

  if ($result === FALSE) {
    $error = error_get_last();
    echo "<script>
      toastr.options = {
        'closeButton': true,
        'progressBar': true,
        'positionClass': 'toast-top-full-width',
        'showDuration': '300',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut'
      };
      toastr.error('Error sending message. Please try again.<br>PHP Error: " . addslashes($error['message']) . "', 'Error');
    </script>";
  } else {
    $response = json_decode($result, true);
    if (isset($response['error'])) {
      echo "<script>
        toastr.options = {
          'closeButton': true,
          'progressBar': true,
          'positionClass': 'toast-top-full-width',
          'showDuration': '300',
          'hideDuration': '1000',
          'timeOut': '5000',
          'extendedTimeOut': '1000',
          'showEasing': 'swing',
          'hideEasing': 'linear',
          'showMethod': 'fadeIn',
          'hideMethod': 'fadeOut'
        };
        toastr.error('Error from server. Please try again.<br>" . addslashes($response['error']) . "', 'Server Error');
      </script>";
    } else {
      echo "<script>
        toastr.options = {
          'closeButton': true,
          'progressBar': true,
          'positionClass': 'toast-top-full-width',
          'showDuration': '300',
          'hideDuration': '1000',
          'timeOut': '5000',
          'extendedTimeOut': '1000',
          'showEasing': 'swing',
          'hideEasing': 'linear',
          'showMethod': 'fadeIn',
          'hideMethod': 'fadeOut'
        };
        toastr.success('Your message has been sent successfully.', 'Success');
        document.querySelector('form').reset();
      </script>";
    }
  }
}

ob_end_flush();
?>