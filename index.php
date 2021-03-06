<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circa - Concientización ambiental</title>
    <link rel="icon" type="image/png" href="images/logo-circa-favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700|Turret+Road:800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/popup.css" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="header">
    <!--Boton de donación mobile-->
    <!--
       <div class="header-logo-mobile">
         <div class="header-logo-mobile-svg">
               <svg xmlns="http://www.w3.org/2000/svg" id="prefix___001-leafs" width="30.12" height="37.926" data-name="001-leafs" viewBox="0 0 30.12 37.926">
                  <path id="prefix__Tracé_148" d="M183.076.409a1.186 1.186 0 0 0-1.136-.385 19.768 19.768 0 0 0-15.632 17.885c-.838 10.6 12.99 15.219 18.582 6.324A20.1 20.1 0 0 0 183.076.409z" data-name="Tracé 148" transform="translate(-157.845)" style="fill:#9bd75e"/>
                  <path id="prefix__Tracé_149" d="M74.309 17.91A19.767 19.767 0 0 0 58.677.025a1.187 1.187 0 0 0-1.136.385 20.1 20.1 0 0 0-1.814 23.824c5.599 8.906 19.418 4.245 18.582-6.324z" data-name="Tracé 149" transform="translate(-52.65)" style="fill:#c8f39c"/>
                  <path id="prefix__Tracé_151" d="M69.092 5.934A19.577 19.577 0 0 0 58.667.025 1.187 1.187 0 0 0 57.53.41a20.078 20.078 0 0 0-4.89 13.306 10.921 10.921 0 0 0 6.109-3.231 18.253 18.253 0 0 1 10.343-4.551z" data-name="Tracé 151" transform="translate(-52.64)" style="fill:#c8f29c"/>
                  <path id="prefix__Tracé_152" d="M338.472 23.948a20.1 20.1 0 0 0-1.99-23.539 1.186 1.186 0 0 0-1.136-.385 19.418 19.418 0 0 0-3.383 1.028c1.783 1.6 4.522 5.086 3.944 11.118a18.953 18.953 0 0 0 2.565 11.778z" data-name="Tracé 152" transform="translate(-311.252)" style="fill:#9bd65e"/>
                  <path id="prefix__Tracé_153" d="M148.566 109.487l1.352-3.825a1.186 1.186 0 0 0-2.237-.79l-.468 1.325q-1.025-2.3-2.269-4.614a1.186 1.186 0 0 0-2.089 1.125 60.4 60.4 0 0 1 4.6 10.85l-2.494-.861a1.186 1.186 0 0 0-.775 2.243l4.035 1.394a43.343 43.343 0 0 1 1.169 13.784 1.186 1.186 0 0 0 2.365.19 47.724 47.724 0 0 0-3.189-20.821z" data-name="Tracé 153" transform="translate(-136.033 -93.473)" style="fill:#77a042"/>
               </svg>
         </div>
         <div class="header-logo-mobile-text">
               <p>Donación</p>
         </div>
      </div>  
    -->
     <!--Boton de donación mobile-->
      <div class="wrapper-container-menu">
            <div class="menu-mobile">
               <div class="menu-mobile-logo">
                  <figure class="logo">
                      <img src="images/logo-circa.jpg" alt="circa" width="110">
                  </figure>
               </div>
               <div class="menu-mobile-icon">
                  <i class="icon-menu burger-button" id="burger-menu"></i>
               </div>
            </div>
            <nav class="menu">
                <div class="menu-cerrar-mobile">
                    <figure class="logo">
                        <img src="images/menu-cerrar.png" alt="circa" width="110">
                    </figure>
                </div>
                <div class="div-uls-menu">
                    <ul>
                        <li><a class="link" href="#QuienesSomos">Quienes Somos</a>
                        </li>
                        <li><a class="link" href="#MisionVision">Misión/Visión</a>
                        </li>
                        <li><a class="link" href="#Ejes">Ejes de Acción</a>
                        </li>
                        <li><a class="link" href="#Galeria">Galería</a>
                        </li>
                        <li><a class="link" href="#Contacto">Contacto</a>
                        </li>
                        
                        <!--Boton de donación-->
                        <!--
                        <div class="donate">
                            <button>  
                                <svg xmlns="http://www.w3.org/2000/svg" id="prefix___001-leafs" width="15" height="37.926" data-name="001-leafs" viewBox="0 0 30.12 37.926">
                                    <path id="prefix__Tracé_148" d="M183.076.409a1.186 1.186 0 0 0-1.136-.385 19.768 19.768 0 0 0-15.632 17.885c-.838 10.6 12.99 15.219 18.582 6.324A20.1 20.1 0 0 0 183.076.409z" data-name="Tracé 148" transform="translate(-157.845)" style="fill:#9bd75e"/>
                                    <path id="prefix__Tracé_149" d="M74.309 17.91A19.767 19.767 0 0 0 58.677.025a1.187 1.187 0 0 0-1.136.385 20.1 20.1 0 0 0-1.814 23.824c5.599 8.906 19.418 4.245 18.582-6.324z" data-name="Tracé 149" transform="translate(-52.65)" style="fill:#c8f39c"/>
                                    <path id="prefix__Tracé_151" d="M69.092 5.934A19.577 19.577 0 0 0 58.667.025 1.187 1.187 0 0 0 57.53.41a20.078 20.078 0 0 0-4.89 13.306 10.921 10.921 0 0 0 6.109-3.231 18.253 18.253 0 0 1 10.343-4.551z" data-name="Tracé 151" transform="translate(-52.64)" style="fill:#c8f29c"/>
                                    <path id="prefix__Tracé_152" d="M338.472 23.948a20.1 20.1 0 0 0-1.99-23.539 1.186 1.186 0 0 0-1.136-.385 19.418 19.418 0 0 0-3.383 1.028c1.783 1.6 4.522 5.086 3.944 11.118a18.953 18.953 0 0 0 2.565 11.778z" data-name="Tracé 152" transform="translate(-311.252)" style="fill:#9bd65e"/>
                                    <path id="prefix__Tracé_153" d="M148.566 109.487l1.352-3.825a1.186 1.186 0 0 0-2.237-.79l-.468 1.325q-1.025-2.3-2.269-4.614a1.186 1.186 0 0 0-2.089 1.125 60.4 60.4 0 0 1 4.6 10.85l-2.494-.861a1.186 1.186 0 0 0-.775 2.243l4.035 1.394a43.343 43.343 0 0 1 1.169 13.784 1.186 1.186 0 0 0 2.365.19 47.724 47.724 0 0 0-3.189-20.821z" data-name="Tracé 153" transform="translate(-136.033 -93.473)" style="fill:#77a042"/>
                                </svg>
                                <span>
                                Donación
                                </span>
                            </button>
                        </div>
                        -->
                        <!--Boton de donación-->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="hero">
       <div class="wrapper-container-img" >
            <div class="contenedor">
                <h1>Propagamos la concientización ambiental para generar una perspectiva colectiva</h1>
                <div class="botones">
                  <a href="#Contacto" class="btn cambiar-mundo"> Comienza a cambiar el mundo</a>
                  <a href="#Ejes" class="btn hechos"> ¿Qué hemos hecho?</a>
                </div>
            </div>
            <div class="cont-img">
               <img class="hero-image" src="./images/circa-header.png" alt="image" width="500" height="350">
            </div>
        </div>
    </section>
    <section class="event-Container">
       <div class="flexbox">
           <div class="box">
               <figure class="icon-principal"><img src="images/acciones.jpg" width="70" alt=""></figure>
               <p class="text-bullet">Acciones integrales</p>
           </div>
           <div class="box">
               <figure class="icon-principal"><img src="images/crecimiento.jpg" width="70" alt=""></figure>
               <p class="text-bullet" >Creación de conocimiento</p>
           </div>
           <div class="box">
               <figure class="icon-principal"><img src="images/trabajo.jpg" width="70" alt=""></figure>
               <p class="text-bullet" >Trabajo en comunidad</p>
           </div>
        </div>
    </section>

    <section id="QuienesSomos" class="about">
       <div class="wrapper-container">
           <article class="quienessomos-box">
               <div class="quienesomos-details">
                    <h2 class="quienessomos-title" >Quiénes Somos</h2>
                    <p class="quienessomos-text">El Centro Integral de Reciclaje y Conciencia Ambienta A.C.   fue fundado por un grupo de jóvenes quienes preocupados por la actual problemática del medio ambiente y la indiferencia que predomina en la sociedad actual,  veían como cada vez los daños y las consecuencias de la contaminación iban a llegar a un punto sin retorno.</p>
                    <h3 class="valores">Valores</h3>
                     <div class="flexbox2">
                               <span class="box2">Responsabilidad</span>
                               <span class="box2">Liderazgo</span>
                               <span class="box2">Competitividad</span>
                               <span class="box2">Innovación</span>
                               <span class="box2">Compañerismo</span>
                               <span class="box2">Empatía</span>
                               <span class="box2">Solidaridad</span>
                               <span class="box2">Honestidad</span>
                               <span class="box2">Cooperación</span>
                               <span class="box2">Autenticidad</span>
                               <span class="box2">Compromiso</span>
                               <span class="box2">Gratitud </span>
                               <span class="box2">Respeto</span>
                     </div>
                </div> 
            </article>
        </div>
    </section>
    <section id="Equipo" class="event-Container">
          <h2 class="equipo-title" >Equipo</h2>
           <div class="flexbox4">
               <div class="box4">
                   <figure><img src="images/acciones.jpg" width="60" alt=""></figure>
                   <p class="name">C. Erika Itzel Santiago Cabrera</p>
                   <p class="post-1">Presidente</p>
                   <p class="post-2">Consejo Directivo</p>
               </div>
               <div class="box4">
                   <figure><img src="images/acciones.jpg" width="60" alt=""></figure>
                   <p class="name">Ángeles Cabrera Cruz</p>
                   <p class="post-1">Tesorera</p>
                   <p class="post-2">Consejo Directivo</p>
               </div>
               <div class="box4">
                   <figure><img src="images/acciones.jpg" width="60" alt=""></figure>
                   <p class="name">Víctor Méndez Millán</p>
                   <p class="post-1">Secretario</p>
                   <p class="post-2">Consejo Directivo</p>
               </div>
               <div class="box4">
                   <figure><img src="images/acciones.jpg" width="60" alt=""></figure>
                   <p class="name">Lic. Félix Andrés Villalobos Cabrera</p>
                   <p class="post-1">Coordinador general</p>
                   <p class="post-2">Consejo Directivo</p>
               </div>
            </div>
    </section>
   <section id="MisionVision" class="mision">
      <div class="wrapper-container">
         <article class="mision-box">
               <div class="mision-details">
                  <h2 class="mision-title" >Misión</h2>
                  <p class="mision-text">“Por medio de diversos programas innovadores llevar a cabo una concientización íntegral de la conservación del medio ambiente dentro de la sociedad, atendiendo la problemática ambiental actual”.
                  </p>
               </div> 
            </article>
      </div>
   </section>
    <section class="vision">
       <div class="wrapper-container">
           <article class="vision-box">
               <div class="vision-details">
                    <h2 class="vision-title" >Visión</h2>
                    <p class="vision-text">“Ser una asociación que marque la diferencia en torno al medio ambiente con potencial a expandir la misión a todo el estado de Oaxaca, México y el mundo”.
                    </p>
                </div> 
            </article>
        </div>
    </section>
    <section id="Ejes" class="ejes">
       <div class="wrapper-container">
           <article class="ejes-box">
               <div class="ejes-details">
                    <h2 class="ejes-title" >Ejes de acción</h2>
                    <p class="ejes-text">“El Cambio Climático es el mayor desafío que la humanidad deberá enfrentar durante el siglo XXI y de no hacerlo, tendrá consecuencias profundas, no sólo ambientales y económicas, sino también políticas y de seguridad. Es por ello, que el Centro Integral de Reciclaje y Conciencia Ambiental A.C. después de una análisis planteó  6 dimesiones de acción para poder abarcar la mayor catidad de temas posibles para combatir las consecuencias directas de esta problemática:”
                    </p>
                </div> 
            </article>
        </div>
    </section>
    <section class="ejesIcon-Container">
       <div class="ejesIcon-flexbox">
           <div class="ejesIcon-box">
               <figure class="ejesIcon-image"><img src="images/icon-ejes.jpg" width="60" alt=""></figure>
               <p class="ejesIcon-concept">EDUCACIÓN AMBIENTAL</p>
           </div>
           <div class="ejesIcon-box">
               <figure class="ejesIcon-image"><img src="images/icon-ejes.jpg" width="60" alt=""></figure>
               <p class="ejesIcon-concept">RESCATE Y DIGNIFICACIÓN <br> DE FAUNA URBANA</p>
           </div>
           <div class="ejesIcon-box">
               <figure class="ejesIcon-image"><img src="images/icon-ejes.jpg" width="60" alt=""></figure>
               <p class="ejesIcon-concept">FOMENTO Y DESARROLLO <br>DE TECNOLOGÍAS ALTERNATIVAS</p>
           </div>
           <div class="ejesIcon-box">
               <figure class="ejesIcon-image"><img src="images/icon-ejes.jpg" width="60" alt=""></figure>
               <p class="ejesIcon-concept">REFORESTACIÓN INTEGRAL</p>
           </div>
           <div class="ejesIcon-box">
               <figure class="ejesIcon-image"><img src="images/icon-ejes.jpg" width="60" alt=""></figure>
               <p class="ejesIcon-concept">HUERTOS URBANOS Y PERMACULTURA</p>
           </div>
           <div class="ejesIcon-box">
               <figure class="ejesIcon-image"><img src="images/icon-ejes.jpg" width="60" alt=""></figure>
               <p class="ejesIcon-concept">ARQUITECTURA SUSTENTABLE</p>
           </div>
        </div>
    </section>
    
    <div class="container" id="Galeria">
        <div class="row">
           <div class="col-lg-12 text-center my-2">
              <h4 class=" border-dark p-2">Galería</h4>
           </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4">
           <ul>
              <!-- <li class="btn btn-outline-dark active" data-filter="*">Todos los años</li> -->
              <li class="btn btn-outline-dark active" data-filter=".2019">2019</li>
              <li class="btn btn-outline-dark" data-filter=".2018">2018</li>
              <li class="btn btn-outline-dark text" data-filter=".2017">2017</li>
              <li class="btn btn-outline-dark text" data-filter=".2016">2016</li>
              <li class="btn btn-outline-dark text" data-filter=".2013">2013</li>
           </ul>
        </div>
        <div class="portfolio-item row">
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-01.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-01.jpg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-02.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-02.jpeg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-03.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-03.jpeg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-04.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-04.jpg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-05.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-05.jpeg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-06.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-06.jpeg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-07.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-07.jpeg" alt="">
              </a>
            </div>
            <div class="item 2019 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2019-72/circa-2019-08.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2019-72/circa-2019-08.jpg" alt="">
              </a>
            </div>
            



            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-01.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-01.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-02.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-02.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-03.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-03.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-04.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-04.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-05.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-05.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-06.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-06.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-07.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-07.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-08.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-08.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-09.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-09.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-10.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-10.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-11.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-11.jpeg" alt="">
              </a>
            </div>
            <div class="item 2018 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2018-72/circa-2018-12.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2018-72/circa-2018-12.jpg" alt="">
              </a>
            </div>



            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-01.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-01.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-02.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-02.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-03.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-03.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-04.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-04.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-05.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-05.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-06.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-06.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-07.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-07.jpg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-08.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-08.jpeg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-09.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-09.jpeg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-10.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-10.jpeg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-11.jpeg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-11.jpeg" alt="">
              </a>
            </div>
            <div class="item 2017 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2017-72/circa-2017-12.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2017-72/circa-2017-12.jpg" alt="">
              </a>
            </div>
            




            <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-01.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-01.jpg" alt="">
              </a>
            </div>
             <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-02.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-02.jpg" alt="">
              </a>
            </div>
             <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-03.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-03.jpg" alt="">
              </a>
            </div>
             <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-04.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-04.jpg" alt="">
              </a>
            </div>
            <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-06.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-06.jpg" alt="">
              </a>
            </div>
             <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-07.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-07.jpg" alt="">
              </a>
            </div>
             <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-08.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-08.jpg" alt="">
              </a>
            </div>
             <div class="item 2016 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2016-72/circa-2016-09.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2016-72/circa-2016-09.jpg" alt="">
              </a>
            </div>
           
            


            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-01.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-01.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-02.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-02.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-03.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-03.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-04.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-04.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-05.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-05.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-06.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-06.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-07.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-07.JPG" alt="">
              </a>
            </div>
            <div class="item 2013 col-lg-3 col-md-4 col-6 col-sm">
               <a href="./images/2013-72/2013-08.JPG" class="fancylight popup-btn" data-fancybox-group="light"> 
                  <img class="img-fluid" src="./images/2013-72/circa-2013-08.JPG" alt="">
              </a>
            </div>
           
        </div>
   </div>
    <section id="Contacto" class="contact">
       <div class="wrapper-container">
           <article class="contact-box">
               <div class="contact-details">
                  <form  method="post" id="contactform"  enctype="multipart/form-data">
                     <h2 class="contact-title" >Contacto</h2>
                       <div class="container-form">
                             <input class="form-input"  type="text" placeholder="Nombre*"    name="name" required>
                             <input  class="form-input"  type="email" placeholder="Correo electrónico*" name="email" required>
                             <select  class="form-input" name="option" required>
                                <option value="" selected disabled="disabled">Escoge tu tipo de colaboración</option>
                                <option value="Voluntario">Voluntario</option>
                                <option value="Colaborador">Colaborador</option>
                                <option value="Afiliación">Afiliación</option>
                             </select>
                             <input class="form-input"  type="tel"  maxlength="10" name="phone" placeholder="Teléfono" required>
                       </div>
                       <div class="container-button">
                             <!-- <button class="contact--button" >Enviar</button> -->
                             <input name="submit" type="submit" value="Enviar" class="submit-btn btn btn-success" >
                        </div>

                       
                  </form>
                  <h2 class="contact-title thanks" >¡Gracias! Nos pondremos en contacto contigo lo antes posible. </h2> <p class="contact-p thanks">No olvides revisar tu correo no deseado</p>
                </div> 
            </article>
        </div>
    </section>
    <footer class="footer">
       <div class="footer-container">
       <div class="box--footer-container">
           <h4>CIRCA</h4>
           <p>El Centro Integral de Reciclaje y Conciencia Ambienta A.C.   fue fundado por un grupo de jóvenes quienes preocupados por la actual problemática del medio ambiente y la indiferencia que predomina en la sociedad actual,  veían como cada vez los daños y las consecuencias de la contaminación iban a llegar a un punto sin retorno.</p>
       </div>
        <div class="box--footer-container">
           <div>
               <h4>Colaboradores</h4>
           </div>
           <div class="footer-images"> 
               <img class="box--footer-colab" src="images/climate-reality-logo.png" alt="" width="auto" height="auto">
               <img class="box--footer-colab" src="images/alianza-mexico-logo.png" alt="" width="auto" height="auto">
               <img class="box--footer-colab" src="images/hijos-madre-tierra-logo.png" alt="" width="auto" height="auto">
           </div>
        </div>
       <div class="box--footer-container" >
              
               <h4>Contacto</h4>
               <div class="columns">
                   <div class="columns-1">
                       <h5>Teléfonos</h5>
                       <p><a href="tel:951 548 31 12">951 548 31 12</a><br><a href="tel:951 197 37 31">951 197 37 31</a></p>
                       <h5>Correo electrónico</h5>
                       <p><a target="_blank"href="mailto:contacto.circa@gmail.com">contacto.circa@gmail.com</a></p>
                   </div>
                   <div class="columns-2">
                       <h5>Dirección </h5>
                       <p>Calle Laureles Nº 120 Fraccionamiento Trinidad de las Huertas, Oaxaca de Juárez, Oax</p>
                       <div class="redes-sociales">
                           <a target="_blank" href="https://www.facebook.com/CIRCA-AC-383435755148716" class="facebook">
                           </a>
                           <a target="_blank" href="https://twitter.com/CIRCA_AC" class="twitter">
                           </a>
                       </div>
                   </div>
           </div>
        </div>
<!--
            <form action="/suscripcion/" class="form-email">
               
               <h3>¿Creamos algo juntos?</h3>
                <input type="text" placeholder="déjame tu e-mail" value="@gmail.com" id="email">
                
                <button>Enviar</button>
            </form>
            <div class="social">
            <a href="#" class="social-link 1" ></a>
            <a href="#" class="social-link 2" ></a>
            <a href="#" class="social-link 3" ></a>
            <a href="#" class="social-link 4" ></a>
            </div>
-->
        </div>
    </footer>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    
    
    <script>
        $(document).ready(function(){

        
        const ipad = window.matchMedia('screen and (max-width: 767px)')
        const menu = document.querySelector('.menu');
        const burgerButton = document.querySelector('#burger-menu');

        // const menu_cerrar = document.querySelector('.menu-cerrar-mobile figure');

        $('.menu-cerrar-mobile figure').click( function(){
            menu.classList.remove('is-active');
            $('.menu-mobile').css('visibility','visible')
            $('body').css({"height": "100vh", "overflow": "scroll"});
        })
        
        ipad.addListener(validation)
        
        function validation (event) {
            if (event.matches) {
                burgerButton.addEventListener('click', hideShow)
            } else {
                burgerButton.removeEventListener('click', hideShow)
            }
        }
        validation(ipad);
        
        function hideShow() {
            if (menu.classList.contains('is-active')){
                menu.classList.remove('is-active');
                  $('body').css({"height": "100vh", "overflow": "scroll"});

            } else{
                menu.classList.add('is-active');
                $('.menu-mobile').css('visibility','hidden')
                $('body').css({"height": "100vh", "overflow": "hidden"});
            }
        }

        $('.menu .div-uls-menu ul li a.link').click(function(){
            menu.classList.remove('is-active');
            $('body').css({"height": "100vh", "overflow": "scroll"});
            $('.menu-mobile').css('visibility','visible')
        })


    })
    </script>
    <script type="text/javascript">
        $(window).load(function(){ 
            $('.portfolio-item').isotope({
                 itemSelector: '.item',
                 layoutMode: 'fitRows',
                 filter: '.2019',
                 masonry: {
                    columnWidth: 110
                }
             });
             $('.portfolio-menu ul li').click(function(){
                 $('.portfolio-menu ul li').removeClass('active');
                 $(this).addClass('active');
                 
                 var selector = $(this).attr('data-filter');
                 $('.portfolio-item').isotope({
                     filter:selector
                 });
                 return  false;
             });
             $(document).ready(function() {
             var popup_btn = $('.popup-btn');
             popup_btn.magnificPopup({
             type : 'image',
             gallery : {
                 enabled : true
             }
             });
             });
            });
        </script>
    <script src="js/registro.js"></script>
</body>
</html>