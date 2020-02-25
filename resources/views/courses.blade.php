<!DOCTYPE html>
<html lang="en">

<head>
    <link  rel="icon"   href="images/logo/icono_eg2.png" type="image/png" />
    <title>English on the Go</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{  asset('css3/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{  asset('css3/animate.css')}}">

    <link rel="stylesheet" href="{{  asset('css3/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{  asset('css3/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{  asset('css3/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{  asset('css3/aos.css')}}">

    <link rel="stylesheet" href="{{  asset('css3/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{  asset('css3/flaticon.css')}}">
    <link rel="stylesheet" href="{{  asset('css3/icomoon.css')}}">
    <link rel="stylesheet" href="{{  asset('css3/style.css')}}">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
    /*3--INICIO script para traduccion de Ingles - PRESENTACION*/        
        $("#pr_course").mouseleave(function(){
            $('#pr_course_cont').show();
            $("#pr_course_cont").load('{{url('curso_pr_mx')}}');
        });
        $("#pr_course").mouseenter(function(){
            $("#pr_course_cont").show();
            $("#pr_course_cont").load('{{url('curso_pr_us')}}');
        });
    /*3--FIN script para info de cursos*/
    /*4--INICIO script para info de cursos*/
        $("#ib").mouseenter(function(){
            $("#inglesb").show();
            $("#inglesb").load('{{url('basico')}}');
        });
        $("#ib").mouseleave(function(){
            $('#inglesb').hide();
        });

        $("#ii").mouseenter(function(){
            $("#inglesi").show();
            $("#inglesi").load('{{url('intermedio')}}');
        }); 
        $("#ii").mouseleave(function(){
            $('#inglesi').hide();
        });

        $("#ia").mouseenter(function(){
            $("#inglesa").show();
            $("#inglesa").load('{{url('avanzado')}}');
        }); 
        $("#ia").mouseleave(function(){
            $('#inglesa').hide();
        });
    /*4--FIN script para info de cursos*/

});
</script>

<body>
    <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">

                    <div class="contenedor2"  > <img src="images/logo/logo_englisonthego_sf.png">
                    </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span>contacto@schoolenglishonthego.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Telefono</span>
                                <span>722 5408 971</span>
                            </div>
                        </div>
                        <div class="col-md topper d-flex align-items-center justify-content-end">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Celular</span>
                                <span>722 7645 437</span>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item "><a href="index" class="nav-link pl-0">Inicio</a></li>
                                <li class="nav-item"><a href="about" class="nav-link">Conocenos</a></li>
                                <li class="nav-item active"><a href="courses" class="nav-link">Cursos</a></li>
                                <!--<li class="nav-item"><a href="teacher" class="nav-link">Instructores</a></li>-->
                                <li class="nav-item"><a href="contact" class="nav-link">Contacto</a></li>
                                <!--<li class="nav-item"><a href="blogsingle" class="nav-link">Testimonios</a></li>-->
                                <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
                            </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/IMG-20191028-WA0013.jpg');">
        <div class="overlay">

        </div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Cursos</h1>
                    <p class="breadcrumbs"><span class="mr-2"><!--<a href="index.html">Online<i class="ion-ios-arrow-forward"></i></a></span> <span>presenciales <i class="ion-ios-arrow-forward"></i></span></p>-->
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                        <div class="img" style="background-image: url(images/45.jpg);">
                        </div>
                    </div>
                    <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                        <h3><a id="pr_course">Traducir</a></h3>
                        <div id="pr_course_cont">
                            <h2 class="mb-4">Presentation</h2>
                                <p>This course is designed for foreigners to learn English at the ABC and elementary levels to acquire and develop English language knowledge and skills. The course is defined within the Common European Framework of Reference and corresponds to the classical division in Pre-Intermediate and Intermediate.</p>
                                <p>The methodology we use has been bearing fruit for many years, which is why our English courses are focused on the communicative - conversational method. At the end of the English course, the student will have the ability to understand, write and read correctly in this language. </p>
                                <p>Therefore, the student can take an International exam with the University of Cambridge (K.E.T. P.E.T. First Certificate C.A.E.)</p>                           
                            <h4 class="mb-4">
                                Course materials:</h4>
                                <p> Adapted materials will be used in class, linked to the thematic areas studied. Auto-access resources based on themes (authentic printing, audio and video), dictionaries and grammars are also available.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--aqui empeiza el video -->
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/IMG-20191028-WA0011.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center" style="background-image: url(images/IMG-20190925-WA0007.jpg);">
                        <div class="video justify-content-center">
                            <a href="images/english.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                <span class="ion-ios-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <h2 class="mb-4"></h2>
                    <p>La metodología que utilizamos está dando frutos desde hace muchos años, es por eso que nuestros cursos de ingles están enfocados en el método comunicativo – conversacional. Al finalizar el curso de ingles, el estudiante tendrá la capacidad de entender, escribir y leer correctamente en este idioma. </p>
                    <p>Por lo cual el alumno podrá presentar un examen Internacional con la Universidad de Cambridge  ( K.E.T. P.E.T. First Certificate C.A.E.)  </p>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="4">0</strong>
                                    <span>Maestros Certificados</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="150">0</strong>
                                    <span>Estudiantes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="30">3</strong>
                                    <span>Cursos</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Aqui termina la seccion de video-->
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
            <div class="container">
                <div class="row d-flex">
                    <h2 class="mb-4">Conociendo el Curso</h2>
                    <br>
                    <div>
                        <p>Este curso está diseñado para que los extranjeros aprendan inglés en los niveles ABC y elemental para adquirir y desarrollar el conocimiento y las habilidades del idioma inglés. El curso se define dentro del Marco Europeo de referencia común y corresponde a la división clásica en Pre-Intermedio e Intermedio.</p>
                        <p><h4>El curso de Usuario Básico incorpora 3 componentes básicos:</h4></p>
                        <p><li>1.Inglés general.</li></p>
                        <p><li>2.Inglés de negocios.</li></p>
                        <p><li>3.Inglés profesional (inglés para fines específicos).</li></p>
                        <p><h5>El curso tiene como objetivo desarrollar una amplia gama de habilidades:</h5></p>
                        <p><li>Desarrollo del lenguaje, que implica la gramática y el aprendizaje extensivo de vocabulario.</li></p>
                        <p><li>Habilidades de escritura, que tienen un enfoque específico en alfabetización y ensayos cortos, memorandos y notas.</li></p>
                        <p><li>Lectura, que implica el estudio de textos instructivos relacionados con negocios de relevancia temática.</li></p>
                        <p><li>Escuchar, que incluye la comprensión de lo esencial y la información detallada.</li></p>
                        <p><li>Habilidades de comunicación, que cubren situaciones de comunicación (en el marco del nivel de avance).</li></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-4 course ftco-animate">
                    <div class="img" style="background-image: url(images/7.jpg);"></div>
                        <div class="text pt-4">
                            <h3><a id="ib">Ingles Basico</a></h3>
                            <div id="inglesb"></div>
                        <!--<p><a href="#" class="btn btn-primary">Apply now</a></p>-->
                    </div>
                </div>
                <div class="col-md-4 course ftco-animate">
                    <div class="img" style="background-image: url(images/6.jpg);"></div>
                    <div class="text pt-4">
                        <h3><a  id="ii">Ingles Intermedio</a></h3>
                        <div id="inglesi"></div>
                        
                        <!--<p><a href="#" class="btn btn-primary">Apply now</a></p>-->
                    </div>
                </div>
                <div class="col-md-4 course ftco-animate">
                    <div class="img" style="background-image: url(images/5.jpg);"></div>
                    <div class="text pt-4">
                        <h3><a  id="ia">Ingles Avanzado</a></h3>
                        <div id="inglesa"></div>
                        
                        <!--<p><a href="#" class="btn btn-primary">Apply now</a></p>-->
                    </div>
                </div>
                <!-- *************************
                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-4.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                            <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                            <span><i class="icon-table mr-2"></i>10 seats</span>
                            <span><i class="icon-calendar mr-2"></i>4 Years</span>
                        </p>
                        <h3><a href="#">Electric Engineering</a></h3>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        <p><a href="#" class="btn btn-primary">Apply now</a></p>
                    </div>
                </div>
                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-5.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                            <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                            <span><i class="icon-table mr-2"></i>10 seats</span>
                            <span><i class="icon-calendar mr-2"></i>4 Years</span>
                        </p>
                        <h3><a href="#">Electric Engineering</a></h3>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        <p><a href="#" class="btn btn-primary">Apply now</a></p>
                    </div>
                </div>
                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-6.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                            <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                            <span><i class="icon-table mr-2"></i>10 seats</span>
                            <span><i class="icon-calendar mr-2"></i>4 Years</span>
                        </p>
                        <h3><a href="#">Electric Engineering</a></h3>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        <p><a href="#" class="btn btn-primary">Apply now</a></p>
                    </div>
                </div>
                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-7.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                            <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                            <span><i class="icon-table mr-2"></i>10 seats</span>
                            <span><i class="icon-calendar mr-2"></i>4 Years</span>
                        </p>
                        <h3><a href="#">Electric Engineering</a></h3>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        <p><a href="#" class="btn btn-primary">Apply now</a></p>
                    </div>
                </div>
                <div class="col-md-3 course ftco-animate">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                    <div class="text pt-4">
                        <p class="meta d-flex">
                            <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                            <span><i class="icon-table mr-2"></i>10 seats</span>
                            <span><i class="icon-calendar mr-2"></i>4 Years</span>
                        </p>
                        <h3><a href="#">Electric Engineering</a></h3>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                        <p><a href="#" class="btn btn-primary">Apply now</a></p>
                    </div>
                </div>
                 *************************+ -->
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
            <div class="container">
                <div class="row d-flex">
                    <h2 class="mb-4">Objetivos del Curso</h2>
                    <br>
                    <p></p>
                    <p><li>Proporcionar material para que los estudiantes aprendan la pronunciación de los sonidos en inglés, para aprender a leer, escribir y conocer los fundamentos de la gramática y el vocabulario en inglés.</li></p>
                    <p><li>Desarrollar las habilidades de lectura de los estudiantes para que puedan leer un texto adaptado para la idea principal, escanear un texto adaptado para obtener información específica, interpretar un texto adaptado para inferencias.</li></p>
                    <p><li>Desarrollar las habilidades de escritura de los estudiantes para que puedan responder a la entrada aplicando información a una tarea específica, para obtener, seleccionar, resumir información en ensayos (140-160 palabras).</li></p>
                    <p><li>Desarrollar las habilidades de escucha de los estudiantes para que puedan comprender y aplicar información específica de la entrada (en el marco del nivel de avance)</li></p>
                    <p><li>Desarrollar las habilidades de habla de los estudiantes para que puedan usar un lenguaje general, social y profesional (en el marco del nivel de avance).</li></p>
                    <p><li>Desarrollar la capacidad general de los estudiantes a un nivel que les permita utilizar el inglés en su entorno profesional y académico (en el marco del nivel de avance).</li></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
            <div class="container">
                <div class="row d-flex">
                    <h2 class="mb-4">Métodos de evaluación:</h2>
                    <br>
                    <div>
                        <p><h4>La evaluación es por cursos (40%), que integra lo siguiente:</h4></p>
                        <p><li>Presentaciones orales individuales y grupales.</li></p>
                        <p><li>Interacciones orales (incluido el trabajo en pareja).</li></p>
                        <p><li>Pruebas escritas y tareas de diversa duración (memorandos, notas).</li></p>
                        <p><li>Ensayos.</li></p>
                        <p><li>Escuchar / ver.</li></p>
                        <p><li>Comunicar la esencia de pasajes de lectura simples.</li></p>
                        <p><li>Traducción de textos sencillos sobre economía.</li></p></li></p>
                        <p>Una medida de participación en el aula, progreso y motivación representa el 20% de la evaluación general.
                            Un examen final que comprende la comprensión auditiva KET, un extracto para traducir al inglés y un tema oral 
                            representa el 40% del crédito total.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">¿Dudas?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Miguel Alemán 14, Reforma, 52100 San Mateo Atenco, Méx</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">722 7645 437</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contacto@schoolenglishonthego.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2"></h2>
                        <div class="block-21 mb-4 d-flex">
                            <!--<a class="blog-img mr-4" style=""></a>-->
                            <div class="text">

                            </div>
                        </div>
                        <div class="block-21 mb-5 d-flex">
                            <!--<a class="blog-img mr-4" style=""></a>-->
                            <div class="text">
                                <h3 class="heading">
                                    <a href="#"></a>
                                </h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                                <li><a href="index"><span class="ion-ios-arrow-round-forward mr-2"></span>Inicio</a></li>
                                <li><a href="about"><span class="ion-ios-arrow-round-forward mr-2"></span>Conocenos</a></li>
                                <li><a href="courses"><span class="ion-ios-arrow-round-forward mr-2"></span>Cursos </a></li>
                                <li><a href="contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contacto</a></li>
                                <li><a href="login"><span class="ion-ios-arrow-round-forward mr-2"></span>Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">

                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Nustras Redes Sociales</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                                <li class="ftco-animate"><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{  asset('js3/jquery.min.js')}}"></script>
    <script src="{{  asset('js3/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{  asset('js3/popper.min.js')}}"></script>
    <script src="{{  asset('js3/bootstrap.min.js')}}"></script>
    <script src="{{  asset('js3/jquery.easing.1.3.js')}}"></script>
    <script src="{{  asset('js3/jquery.waypoints.min.js')}}"></script>
    <script src="{{  asset('js3/jquery.stellar.min.js')}}"></script>
    <script src="{{  asset('js3/owl.carousel.min.js')}}"></script>
    <script src="{{  asset('js3/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{  asset('js3/aos.js')}}"></script>
    <script src="{{  asset('js3/jquery.animateNumber.min.js')}}"></script>
    <script src="{{  asset('js3/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{  asset('js3/google-map.js')}}"></script>
    <script src="{{  asset('js3/main.js')}}"></script>

</body>

</html>