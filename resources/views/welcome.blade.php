<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/style.css">
    <link rel="icon" href="/admin/img/ico.png" type="image/png" />

</head>

<body class="antialiased" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    @if (Route::has('login'))
    <div class="fixed hidden top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <!--banner-->
    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="/admin/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#banner">Inicio</a></li>
                                <li class=""><a href="#service">Servicios</a></li>
                                <li class=""><a href="#about">Acerca</a></li>
                                <!-- <li class=""><a href="#testimonial">Testimonial</a></li>-->
                                <li class=""><a href="#contact">Contacto</a></li>
                                <li class=""><a href="{{ route('login') }}">INICIAR SESION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="banner-info">
                        <!--  <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive">
            </div>-->
                        <br>
                        <br>
                        <br>
                        <div class="banner-text text-center">
                            <h1 class="white" style="color: black">Bienvenido a Medicasist</h1>
                            <p>La plataforma facil, intuitiva y accesible para la gestión de clinicas de salud privada</p>
                            <p>desarrollada para ti.</p>

                            <!--  <a href="#contact" class="btn btn-appoint">Make an Appointment.</a>-->
                        </div>
                        <div class="overlay-detail text-center">
                            <a href="#service"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->
    <!--service-->
    <section id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h2 class="ser-title">¿Qué es Medicasist?</h2>
                    <hr class="botm-line">
                    <p>Medicasist es una plataforma web que ayuda a la gestión de una clínica de salud del sector privado, la cual permite el registro de empleados, pacientes, consultas y citas.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-stethoscope" style="color: #1B5E20"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Personalizar servicios</h4>
                            <p>La plataforma permite agregar los servicios que tu clinica de salud ofrece al publico.</p>
                        </div>
                    </div>
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-ambulance" style="color: #1B5E20"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Gestionar pacientes</h4>
                            <p>La plataforma permite la gestion completa de los datos de los pacientes, almacenandolos de manera segura.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-user-md" style="color: #1B5E20"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Gestión del personal</h4>
                            <p>Puedes gestionar al personal de tu clinica, desde registrar, modificar o dar de baja.</p>
                        </div>
                    </div>
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-medkit" style="color: #1B5E20"></i>
                        </div>
                        <div class="icon-info">
                            <h4>Gestión de historial médico</h4>
                            <p>La plataforma permite la creación de un historial médico util y eficaz para las citas medicas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ service-->
    <!--cta-->
    <section id="cta-1" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="schedule-tab" style="background: #1B5E20">
                    <div class="col-md-4 col-sm-4 bor-left" style="background: #1B5E20">
                        <div class="mt-boxy-color" style="background: #1B5E20"></div>
                        <div class="medi-info" style="background: #1B5E20">
                            <h3>Totalmente personalizable</h3>
                            <p>La plataforma se adapta a las necesidades de tu clinica. </p>
                            <!--  <a href="#" class="medi-info-btn">READ MORE</a>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" style="background: #1B5E20">
                        <div class="medi-info" style="background: #1B5E20">
                            <h3>Accesible 24/7</h3>
                            <p>Disponible 24 horas 7 dias a la semana, disponible en cualquier dispositivo con conexión a Internet </p>
                            <!--  <a href="#" class="medi-info-btn">READ MORE</a>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 mt-boxy-3" style="background: #1B5E20">
                        <div class="mt-boxy-color" style="background: #1B5E20"></div>
                        <div class="time-info" style="background: #1B5E20">
                            <h3>Futuras caracteristicas</h3>
                            <!-- <table style="margin: 8px 0px 0px;" border="1" >
                <tbody>
                  <tr>
                    <td>Monday - Friday</td>
                    <td>8.00 - 17.00</td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>9.30 - 17.30</td>
                  </tr>
                  <tr>
                    <td>Sunday</td>
                    <td>9.30 - 15.00</td>
                  </tr>
                </tbody>
              </table>-->
                            <p>Conforme el sistema se desarrolla se agregarán nuevas e interesantes caracteristicas </p>
                            <p> ¡Mantente en contacto con nosotros! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="section-title">
                        <h2 class="head-title lg-line">Nuestra <br>Plataforma</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Permite acelerar la productividad de tu clinica de salud, puesto que está hecha a la medida.</p>
                        <a href="" style="color: black; padding-top:10px;"> </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div style="visibility: visible;" class="col-sm-9 more-features-box">
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                            <div class="more-features-box-text-description">
                                <h3>Satisfacción real</h3>
                                <p>Medicasist es la plataforma que busca que el cliente obtenga una solución efectiva y rentable en el aspecto costo beneficio.</p>
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                            <div class="more-features-box-text-description">
                                <h3>Eficacia real.</h3>
                                <p>Buscamos mitigar malas experiencias de otras plataformas en el mercado que tienen una deficiente administración de consultas médicas y falta de procedimientos eficaces</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ about-->

    <!--doctor team-->
    <!--
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Doctors!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jessica Wally</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Iai Donas</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Amanda Denyl</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jason Davis</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  -->

    <!--/ doctor team-->



    <!--cta 2-->
    <section id="cta-2" class="section-padding" style="background: #1B5E20">
        <div class="container">
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="text-right-md col-md-4 col-sm-4">
                    <h2 class="section-title white lg-line">« Nuestra<br> misión »</h2>
                </div>
                <div class="col-md-4 col-sm-5" style="color: white">
                    Proporcionar la resolución de distintas problemáticas con respecto a software, así como asistencia y capacitación, ofreciendo los servicios informáticos más requeridos hoy en día a distintos tipos de organizaciones o empresas.
                    <p class="text-right text-primary" style="color: white"><i>— Insight</i></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title">Contacto</h2>
                    <hr class="botm-line">
                </div>
                <div class="col-md-4 col-sm-4">
                    <h3> Información de Contacto</h3>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Tecámac<br> Estado de México </p>
                    <div class="space"></div>
                    <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>desarrollo@insight.com</p>
                    <div class="space"></div>
                    <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+52 123 1234</p>
                </div>
                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                        <h3 class="cnt-ttl">¿Te ha interesado la propuesta? ¡Envianos un correo!</h3>
                        <div class="space"></div>
                        <div id="sendmessage">¡Gracias!, nos pondremos en contacto contigo</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingresa al menos 4 letras" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Tu email" data-rule="email" data-msg="Ingresa un correo valido" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingresa al menos 8 letras" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Escribe algo para nosostros" placeholder="Mensaje"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="form-action">
                                <button type="submit" class="btn btn-form">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ contact-->
    <!--footer-->
    <footer id="footer" style="background: #1B5E20">
        <div class="top-footer" style="color: #1B5E20">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Acerca de nosotros</h4>
                        </div>
                        <div class="info-sec">
                            <p>La consultora Insight es reconocida por el desarrollo de plataformas web, creadas con eficacia, seguridad.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Enlaces rapidos</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li><a href="index.html"><i class="fa fa-circle"></i>Inicio</a></li>
                                <li><a href="#service"><i class="fa fa-circle"></i>Nuestros servicios</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">¡Siguenos!</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="bgdark-blue"><i class="fa fa-facebook"></i></li>
                                <!--  <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>-->
                                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Insight 2020

                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!--/ footer-->

    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/jquery.easing.min.js"></script>
    <script src="/admin/js/bootstrap.js"></script>
    <script src="/admin/js/custom.js"></script>
    <script src="/admin/contactform/contactform.js"></script>
</body>

</html>