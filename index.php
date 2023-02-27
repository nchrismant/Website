<?php
require_once "./class/PHPMailer/src/Exception.php";
require_once "./class/PHPMailer/src/PHPMailer.php";
require_once "./class/PHPMailer/src/SMTP.php";
require_once "./class/mail.php";

use App\Mail\Mail;
use PHPMailer\PHPMailer\PHPMailer;

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--==================== UNICONS ====================-->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"
    />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/styles.min.css" />

    <title>Nathan Chriqui - Site web</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">Nathan</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="uil uil-estate nav__icon"></i> Accueil
              </a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="uil uil-user nav__icon"></i> A propos
              </a>
            </li>
            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="uil uil-file-alt nav__icon"></i> Compétences
              </a>
            </li>
            <li class="nav__item">
              <a href="#services" class="nav__link">
                <i class="uil uil-briefcase-alt nav__icon"></i> Services
              </a>
            </li>
            <li class="nav__item">
              <a href="#portfolio" class="nav__link">
                <i class="uil uil-scenery nav__icon"></i> Portfolio
              </a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="uil uil-message nav__icon"></i> Me contacter
              </a>
            </li>
          </ul>
          <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav__btns">
          <!-- Theme change button -->
          <i class="uil uil-moon change-theme" id="theme-button"></i>

          <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-apps"></i>
          </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__content grid">
            <div class="home__social">
              <a
                href="https://www.linkedin.com/in/chriqui-nathan/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-linkedin-alt"></i>
              </a>
              <a
                href="https://github.com/nchriqui"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uil uil-github-alt"></i>
              </a>
            </div>
            <!-- <div class="home__img">
              <svg
                version="1.1"
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />

                  <image
                    class="home__blob-img"
                    x="12"
                    y="14"
                    height="180"
                    width="180"
                    href=""
                  />
                </g>
              </svg>
            </div> -->
            <div class="home__data">
              <h1 class="home__title">Salut, je suis Nathan</h1>
              <h3 class="home__subtitle">Etudiant en Informatique</h3>
              <p class="home__description">
                Expérience de haut niveau dans la conception et le développement
                de sites web et de logiciels, produisant un travail de qualité.
              </p>
              <a href="#contact" class="button button--flex">
                Me contacter <i class="uil uil-message button__icon"></i>
              </a>
            </div>
          </div>
          <div class="home__scroll">
            <a href="#about" class="home__scroll-button button--flex">
              <i class="uil uil-mouse-alt home__scroll-mouse"></i>
              <span class="home__scroll-name">Défiler vers le bas</span>
              <i class="uil uil-arrow-down home__scroll-arrow"></i>
            </a>
          </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <h2 class="section__title">A propos de moi</h2>
        <span class="section__subtitle">Mon introduction</span>

        <div class="about__container container grid">
          <img src="assets/img/about.jpg" alt="A propos image" class="about__img" />

          <div class="about__data">
            <p class="about__description">
              Étudiant en Master 1 IISC-SIC et passionné par le domaine de
              l'informatique, de la data et du web avec une connaissance approfondie et
              quelques années d'expérience. J'ai toujours à coeur de réussir
              proprement et correctement tout les projets que j'entreprends.
            </p>
            <div class="about__info">
              <div>
                <span class="about__info-title">4+</span>
                <span class="about__info-name"
                  >Années <br />
                  d'expérience</span
                >
              </div>

              <div>
                <span class="about__info-title">7+</span>
                <span class="about__info-name"
                  >Projets <br />
                  réalisés</span
                >
              </div>
            </div>

            <div class="about__buttons">
              <a
                download="CV_CHRIQUI_Nathan"
                href="assets/pdf/CV_CHRIQUI_Nathan.pdf"
                class="button button--flex"
              >
                Télécharger CV <i class="uil uil-download-alt button__icon"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SKILLS ====================-->
      <section class="skills section" id="skills">
        <h2 class="section__title">Compétences</h2>
        <span class="section__subtitle">Mon niveau technique</span>

        <div class="skills__container container grid">
          <div>
            <!--==================== SKILLS 1 ====================-->
            <div class="skills__content skills__open">
              <div class="skills__header">
                <i class="uil uil-brackets-curly skills__icon"></i>

                <div>
                  <h2 class="skills__title">Développeur Frontend</h2>
                  <span class="skills__subtitle">Plus de 3 ans</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">HTML</h3>
                    <span class="skills__number">90%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__html"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">CSS</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__css"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">JavaScript</h3>
                    <span class="skills__number">60%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__js"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">jQuery</h3>
                    <span class="skills__number">65%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__jquery"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">XML</h3>
                    <span class="skills__number">85%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__xml"></span>
                  </div>
                </div>
              </div>
            </div>

            <!--==================== SKILLS 2 ====================-->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-server-network skills__icon"></i>

                <div>
                  <h2 class="skills__title">Développeur Backend</h2>
                  <span class="skills__subtitle">Plus de 3 ans</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">PHP</h3>
                    <span class="skills__number">85%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__php"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">SQL</h3>
                    <span class="skills__number">85%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__sql"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Symfony</h3>
                    <span class="skills__number">55%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__symfony"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Java</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__java"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <!--==================== SKILLS 3 ====================-->
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="uil uil-code-branch skills__icon"></i>

                <div>
                  <h2 class="skills__title">Développeur</h2>
                  <span class="skills__subtitle">Plus de 4 ans</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">C</h3>
                    <span class="skills__number">70%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__c"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Assembleur</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__assembleur"></span>
                  </div>
                </div>

                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Python</h3>
                    <span class="skills__number">75%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills__python"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== QUALIFICATION ====================-->
      <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">Mon parcours personnel</span>

        <div class="qualification__container container">
          <div class="qualification__tabs">
            <div
              class="qualification__button button--flex qualification__active"
              data-target="#education"
            >
              <i class="uil uil-graduation-cap qualification__icon"></i>
              Formation
            </div>

            <div class="qualification__button button-flex" data-target="#work">
              <i class="uil uil-briefcase-alt qualification__icon"></i>
              Expériences <br />
              Professionnelles
            </div>
          </div>

          <div class="qualification__sections">
            <!--==================== QUALIFICATION CONTENT 1 ====================-->
            <div
              class="qualification__content qualification__active"
              data-content="data-content"
              id="education"
            >
              <!--==================== QUALIFICATION 1 ====================-->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Master 1 IISC-SIC FI parcours SID</h3>
                  <span class="qualification__subtitle"
                    >France - CY Cergy Paris Université</span
                  >
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2022 - 2023
                  </div>
                </div>

                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>

              <!--==================== QUALIFICATION 2 ====================-->
              <div class="qualification__data">
                <div></div>

                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>

                <div>
                  <h3 class="qualification__title">
                    Licence Informatique
                  </h3>
                  <span class="qualification__subtitle"
                    >France - CY Cergy Paris Université</span
                  >
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2019 - 2022
                  </div>
                </div>


              </div>

              <!--==================== QUALIFICATION 3 ====================-->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Baccalauréat scientifique</h3>
                  <span class="qualification__subtitle"
                    >France - Lycée Fragonard</span
                  >
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    2016 - 2019
                  </div>
                </div>

                <div>
                  <span class="qualification__rounder"></span>
                  <!-- <span class="qualification__line"></span> -->
                </div>
              </div>
            </div>

            <!--==================== QUALIFICATION CONTENT 2 ====================-->
            <div class="qualification__content" data-content="data-content" id="work">
            <!--==================== QUALIFICATION 1 ====================-->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Stage<span class="d-block">Développeur Web</span></h3>
                  <span class="qualification__subtitle"
                    >France - École Supérieure Pour les Talents Atypiques</span
                  >
                  <div class="qualification__calendar">
                    <i class="uil uil-calendar-alt"></i>
                    Avril 2022 - Juin 2022
                  </div>
                </div>

                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>

              <!--==================== QUALIFICATION 2 ====================-->
              <div class="qualification__data">
                <div></div>

                <div>
                  <span class="qualification__rounder"></span>
                  <!--<span class="qualification__line"></span>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SERVICES ====================-->
      <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle">Ce que je sais faire</span>

        <div class="services__container container grid">
          <!--==================== SERVICES 1 ====================-->
          <div class="services__content">
            <div>
              <i class="uil uil-web-grid services__icon"></i>
              <h3 class="services__title">
                Développeur <br />
                Web
              </h3>
            </div>

            <span
              class="button button--flex button--small button--link services__button"
            >
              En savoir plus
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Développeur <br />
                  Web
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Créer un site web.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>
                      Elaborer la conception et modélisation d’une base de
                      données.
                    </p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Instaurer un système d'authentification.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Effectuer des requêtes API.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Réaliser des graphes et des cartes intéractives.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Travailler le design responsive.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Mettre en place le référencement d'un site.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!--==================== SERVICES 2 ====================-->
          <div class="services__content">
            <div>
              <i class="uil uil-arrow services__icon"></i>
              <h3 class="services__title">
                Développeur <br />
                Logiciel
              </h3>
            </div>

            <span
              class="button button--flex button--small button--link services__button"
            >
              En savoir plus
              <i class="uil uil-arrow-right button__icon"></i>
            </span>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">
                  Développeur <br />
                  Logiciel
                </h4>
                <i class="uil uil-times services__modal-close"></i>

                <ul class="services__modal-services grid">
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Développer un logiciel.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Elaborer la conception de diagramme UML de classes.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Concevoir une interface graphique.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Utiliser des design patterns.</p>
                  </li>
                  <li class="services__modal-service">
                    <i class="uil uil-check-circle services__modal-icon"></i>
                    <p>Effectuer des tests unitaires.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== PORTFOLIO ====================-->
      <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>
        <span class="section__subtitle">Projets les plus récents</span>

        <div class="portfolio__container container swiper-container">
          <div class="swiper-wrapper">
            <!--==================== PORTFOLIO 1 ====================-->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/24hWeather.png"
                alt="Page d'accueil de 24hWeather"
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">24hWeather</h3>
                <p class="portfolio__description">
                  Site météorologique professionnel
                </p>
                <div class="portfolio__links">
                  <a
                    href="https://24hweather.alwaysdata.net/"
                    class="button button--flex button--small portfolio__button"
                  >
                    Visiter
                    <i class="uil uil-arrow-right button__icon"></i>
                  </a>
                  <a
                    href="https://github.com/nchriqui/24hWeather"
                    class="button button--flex button--small portfolio__button"
                  >
                    Code
                    <i class="uil uil-brackets-curly button__icon"></i>
                  </a>
                </div>
              </div>
            </div>

            <!--==================== PORTFOLIO 2 ====================-->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/footista.png"
                alt="Page d'accueil de Footista"
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Footista</h3>
                <p class="portfolio__description">
                  Site d’information sur le football professionel interagissant
                  avec une base de données
                </p>
                <div class="portfolio__links">
                  <a
                    href="https://footista.alwaysdata.net/"
                    class="button button--flex button--small portfolio__button"
                  >
                    Visiter
                    <i class="uil uil-arrow-right button__icon"></i>
                  </a>
                  <a
                    href="https://github.com/nchriqui/Footista"
                    class="button button--flex button--small portfolio__button"
                  >
                    Code
                    <i class="uil uil-brackets-curly button__icon"></i>
                  </a>
                </div>
              </div>
            </div>

            <!--==================== PORTFOLIO 3 ====================-->
            <div class="portfolio__content grid swiper-slide">
              <img
                src="assets/img/cineflix.png"
                alt="Page d'accueil de Cinéflix"
                class="portfolio__img"
              />

              <div class="portfolio__data">
                <h3 class="portfolio__title">Cinéflix</h3>
                <p class="portfolio__description">
                  Site sur les films et séries utilisant des requêtes API
                </p>
                <div class="portfolio__links">
                  <a
                    href="https://cineflix.alwaysdata.net/"
                    class="button button--flex button--small portfolio__button"
                  >
                    Visiter
                    <i class="uil uil-arrow-right button__icon"></i>
                  </a>
                  <a
                    href="https://github.com/nchriqui/Cineflix"
                    class="button button--flex button--small portfolio__button"
                  >
                    Code
                    <i class="uil uil-brackets-curly button__icon"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
          </div>

          <div class="swiper-pagination"></div>
        </div>

        <!--==================== WORK ====================-->
        <div class="work section">
          <span class="section__subtitle work__subtitle">Tous les projets</span>

          <div class="work__filters">
            <span class="work__item active-work" data-filter="all">Tout</span>
            <span class="work__item" data-filter=".web">Web</span>
            <span class="work__item" data-filter=".mobile">Mobile</span>
            <span class="work__item" data-filter=".logiciel">Logiciel</span>
          </div>

          <div class="work__container container grid">
          <div class="work__card mix">
              <img src="assets/img/Projet_labo.png" alt="Neo4j base de données" class="work__img" />

              <h3 class="work__title">Projet de Laboratoire</h3>
              <p class="work__description">Exploration, visualisation et analyse d'une base de données graph sur des données historiques.</p>

            </div>

            <div class="work__card mix web">
              <img src="assets/img/24hWeather.png" alt="Page d'accueil de 24hWeather" class="work__img" />

              <h3 class="work__title">24hWeather</h3>
              <p class="work__description">Site météorologique professionnel.</p>

              <div class="portfolio__links">
                <a
                  href="https://24hweather.alwaysdata.net/"
                  class="work__button"
                >
                  Visiter <i class="uil uil-angle-right-b work__icon"></i>
                </a>

                <a
                  href="https://github.com/nchriqui/24hWeather"
                  class="work__button"
                >
                  Code <i class="uil uil-brackets-curly work__icon"></i>
                </a>
              </div>
            </div>

            <div class="work__card mix web">
              <img src="assets/img/footista.png" alt="Page d'accueil de Footista" class="work__img" />

              <h3 class="work__title">Footista</h3>
              <p class="work__description">
                Site d'information sur le football professionel interagissant
                avec une base de données.
              </p>

              <div class="portfolio__links">
                <a href="https://footista.alwaysdata.net/" class="work__button">
                  Visiter <i class="uil uil-angle-right-b work__icon"></i>
                </a>

                <span class="work__button services__button">
                  Démo <i class="uil uil-presentation-play work__icon"></i>
                </span>

                <a
                  href="https://github.com/nchriqui/Footista"
                  class="work__button"
                >
                  Code <i class="uil uil-brackets-curly work__icon"></i>
                </a>
              </div>
            </div>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">Footista démo</h4>
                <i class="uil uil-times services__modal-close"></i>

                <div class="services__modal-services grid">
                  <video class="portfolio__video" controls="controls">
                    <source
                      src="assets/video/video_Footista.mp4"
                      type="video/mp4"
                    />
                    Votre navigateur ne prend pas en charge la balise vidéo.
                  </video>
                </div>
              </div>
            </div>

            <div class="work__card mix web">
              <img src="assets/img/cineflix.png" alt="Page d'accueil de Cinéflix" class="work__img" />

              <h3 class="work__title">Cinéflix</h3>
              <p class="work__description">
                Site sur les films et séries utilisant des requêtes API.
              </p>

              <div class="portfolio__links">
                <a href="https://cieflix.alwaysdata.net/" class="work__button">
                  Visiter <i class="uil uil-angle-right-b work__icon"></i>
                </a>

                <span class="work__button services__button">
                  Démo <i class="uil uil-presentation-play work__icon"></i>
                </span>

                <a
                  href="https://github.com/nchriqui/Cineflix"
                  class="work__button"
                >
                  Code <i class="uil uil-brackets-curly work__icon"></i>
                </a>
              </div>
            </div>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">Cinéflix démo</h4>
                <i class="uil uil-times services__modal-close"></i>

                <div class="services__modal-services grid">
                  <video class="portfolio__video" controls="controls">
                    <source
                      src="assets/video/video_Cineflix.mp4"
                      type="video/mp4"
                    />
                    Votre navigateur ne prend pas en charge la balise vidéo.
                  </video>
                </div>
              </div>
            </div>

            <div class="work__card mix logiciel">
              <img src="assets/img/go.png" alt="Illustration du jeu Go" class="work__img" />

              <h3 class="work__title">Go</h3>
              <p class="work__description">
                Jeu de GO chinois avec ajout de règles et de contraintes
                spécifiques.
              </p>

              <div class="portfolio__links">
                <span class="work__button services__button">
                  Démo <i class="uil uil-presentation-play work__icon"></i>
                </span>

                <a href="https://github.com/nchriqui/Go" class="work__button">
                  Code <i class="uil uil-brackets-curly work__icon"></i>
                </a>
              </div>
            </div>

            <div class="services__modal">
              <div class="services__modal-content">
                <h4 class="services__modal-title">Go démo</h4>
                <i class="uil uil-times services__modal-close"></i>

                <div class="services__modal-services grid">
                  <video class="portfolio__video" controls="controls">
                    <source src="assets/video/video_Go.mp4" type="video/mp4" />

                    Votre navigateur ne prend pas en charge la balise vidéo.
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== CONTACT ME ====================-->
      <section class="contact section" id="contact">
        <h2 class="section__title">Me contacter</h2>
        <span class="section__subtitle">Entrer en contact</span>

        <div class="contact__container container grid">
          <div>
            <div class="contact__information">
              <i class="uil uil-phone contact__icon"></i>

              <div>
                <h3 class="contact__title">Téléphone</h3>
                <span class="contact__subtitle">07 85 75 46 78</span>
              </div>
            </div>

            <div class="contact__information">
              <i class="uil uil-envelope contact__icon"></i>

              <div>
                <h3 class="contact__title">Email</h3>
                <span class="contact__subtitle">nathanchriqui1@gmail.com</span>
              </div>
            </div>

            <div class="contact__information">
              <i class="uil uil-map-marker contact__icon"></i>

              <div>
                <h3 class="contact__title">Localisation</h3>
                <span class="contact__subtitle">France - L'isle Adam</span>
              </div>
            </div>
          </div>

          <form
            action="#"
            method="POST"
            class="contact__form grid"
            id="contact-form"
          >
            <div class="contact__inputs grid">
              <div class="contact__content">
                <label for="nameMail" class="contact__label">Nom</label>
                <input
                  type="text"
                  name="nameMail"
                  id="nameMail"
                  required="required"
                  class="contact__input"
                />
                <div class="error"></div>
              </div>

              <div class="contact__content">
                <label for="userMail" class="contact__label">Email</label>
                <input
                  type="email"
                  name="userMail"
                  id="userMail"
                  required="required"
                  class="contact__input"
                />
                <div class="error"></div>
              </div>
            </div>

            <div class="contact__content">
              <label for="bodyMail" class="contact__label">Message</label>
              <textarea
                cols="1"
                rows="7"
                class="contact__input"
                name="bodyMail"
                id="bodyMail"
                required="required"
              ></textarea>
              <div class="error"></div>
            </div>

            <div>
              <span class="button button--flex" id="submit-button">
                Envoyer
                <i class="uil uil-message button__icon"></i>
              </span>
            </div>
          </form>
          <?php
            if(isset($_POST['nameMail'], $_POST['userMail'], $_POST['bodyMail'])) {
              $nameMail = htmlspecialchars($_POST['nameMail']);
              $userMail = htmlspecialchars($_POST['userMail']);
              $bodyMail = htmlspecialchars($_POST['bodyMail']);
              $phpmailer = new PHPMailer();
              $mail = new Mail($phpmailer);
              $mail->sendMail($bodyMail, $userMail, $nameMail); } ?>
        </div>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h2 class="footer__title">Nathan</h2>
            <span class="footer__subtitle">Etudiant en Informatique</span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="#services" class="footer__link">Services</a>
            </li>
            <li>
              <a href="#portfolio" class="footer__link">Portfolio</a>
            </li>
            <li>
              <a href="#contact" class="footer__link">Me contacter</a>
            </li>
          </ul>

          <div class="footer__socials">
            <a
              href="https://www.linkedin.com/in/chriqui-nathan/"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-linkedin-alt"></i>
            </a>
            <a
              href="https://github.com/nchriqui"
              target="_blank"
              class="footer__social"
            >
              <i class="uil uil-github-alt"></i>
            </a>
          </div>
        </div>

        <p class="footer__copy">&#169; Tout droits réservés</p>
      </div>
    </footer>

    <!--==================== SCROLL UP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.min.js"></script>
  </body>
</html>
