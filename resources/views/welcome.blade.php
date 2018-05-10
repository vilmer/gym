@extends('layouts.app')

@section('content')
        <!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-1">     
            <div id="home-slider">
                <!-- Item 1 -->
                <div class="item active">
                    <img src="images/slider/home2/slide1.jpg" alt="Slide1" />
                    <div class="slide-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Bienvenidos a<br> SPARTA GYM </h1>
                                    <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                        SPARTA GYM ES Un gimnasio es un lugar que permite practicar deportes o hacer ejercicio en un recinto cerrado con varias máquinas y artículos deportivos a disposición de quienes lo visiten.
                                    </p>  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="item">
                    <img src="images/slider/home2/slide2.jpg" alt="Slide2" />
                    <div class="slide-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ESTÁS LISTO PARA APLICARTE?</h1>
                                    <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                        En SPARTA GYM puedes entrenar tú solo o puedes tener un entrenador personal pero tienes que pagar más. También puedes entrar a clases dirigidas por profesionales. Algunos ejemplos son zumba, body combat o yoga.
                                    </p>  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="item">
                    <img src="images/slider/home2/slide3.jpg" alt="Slide3" />
                    <div class="slide-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">BENEFECIOS DE EJERCITARTE</h1>
                                    <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                        Ir al gimnasio todos los días te pone en contacto con personas regularmente, mejorará tu vida social y cómo te sientes sobre ti mismo. Puedes dormir mejor si te ejercitas todos los días, y más sueño significa más energía y un mejor humor
                                    </p>  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>         
        </div>
        <!-- Slider Area End -->
        
        <!-- Search Courses Start -->
        <div class="rs-search-courses">
            <div class="container">
                <form class="row search-form">
                    <div class="col-md-3">
                        <div class="categories">
                            <select>
                                <option>CATEGORIAS</option>
                                <option>Computer Engineering</option>
                                <option>Electrical Engineering</option>
                                <option>Electronics Engineering</option>
                                <option>Civil Engineering</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="level">
                            <select>
                                <option>HORARIOS</option>
                                <option>B.Sc in EEE</option>
                                <option>B.Sc in CSE</option>
                                <option>BSS (Hons)</option>
                                <option>LL.B (Hons)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="keyword">
                            <input type="text" placeholder="BUSCAR OPORTUNIDAD...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search-btn">
                            <button type="submit">BUSCAR CURSO</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search Courses End -->

        <!-- Courses Start -->
        <div id="rs-courses-2" class="rs-courses-2 sec-spacer">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>NUESTRO SERVISOS DE SPARTA GYM</h2>      
                    <p>
                        Ejercicios y Rutinas para gimnasio clasificados por parte del cuerpo
                    </p>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item">
                            <div class="cource-img">
                                <a href="#"><img src="{{asset('images/courses/4.jpg')}}" alt="" /></a>
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="course-body">
                                <a href="#" class="course-category">EJERCICIOS</a>
                                <h4 class="course-title"><a href="courses-details.html">titulo</a></h4>
                                <div class="course-desc">
                                    <p>
                                        detalle de servicios
                                    </p>
                                </div>
                                
                            </div>
                        </div>                      
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item">
                            <div class="cource-img">
                                <img src="{{asset('images/courses/5.jpg')}}" alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="course-body">
                                <a href="#" class="course-category">RUTINAS</a>
                                <h4 class="course-title"><a href="courses-details.html">titulo</a></h4>
                                <div class="course-desc">
                                    <p>
                                        detalle de servicios
                                    </p>
                                </div>
                                
                            </div>
                        </div>                      
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item">
                            <div class="cource-img">
                                <img src="{{asset('images/courses/6.jpg')}}" alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="course-body">
                                <a href="#" class="course-category">DIETAS</a>
                                <h4 class="course-title"><a href="#">titulo</a></h4>
                                <div class="course-desc">
                                    <p>
                                        detalle de servicios
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item">
                            <div class="cource-img">
                                <img src="{{asset('images/courses/7.jpg')}}" alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="course-body">
                                <a href="#" class="course-category">SUPLEMENTOS</a>
                                <h4 class="course-title"><a href="#">Mtitulo</a></h4>
                                <div class="course-desc">
                                    <p>
                                        detalle de servicios
                                    </p>
                                </div>
                                
                            </div>
                        </div>                      
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item">
                            <div class="cource-img">
                                <img src="{{asset('images/courses/8.jpg')}}" alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="course-body">
                                <a href="#" class="course-category">PRODUCTOS</a>
                                <h4 class="course-title"><a href="#">titulo</a></h4>
                                <div class="course-desc">
                                    <p>
                                        detalle de servicios
                                    </p>
                                </div>
                                
                            </div>
                        </div>                      
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cource-item">
                            <div class="cource-img">
                                <img src="{{asset('images/courses/9.jpg')}}" alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="course-body">
                                <a href="#" class="course-category">CIENCIA</a>
                                <h4 class="course-title"><a href="#">titulo</a></h4>
                                <div class="course-desc">
                                    <p>
                                        detalle de servicios
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->
        
        <!-- Counter Up Section Start-->
        <div class="rs-counter pt-100 pb-70 bg3">
            <div class="container">
                <div class="sec-title white-text mb-50 text-center">
                    <h2>LOGROS</h2>      
                    <p>
                        En nuetsras GYM, encontraras todo lo que necesitas
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">10</h2>                  
                            <h4 class="counter-desc">ENTRENADORES</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">40</h2>
                            <h4 class="counter-desc">EJERCICOS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">900</h2>                  
                            <h4 class="counter-desc">RUTINAS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">36</h2>
                            <h4 class="counter-desc">SUPLEMENTOS</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Up Section End -->

        <!-- Why Choose Us Start-->
        <div class="rs-why-choose sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="sec-title mb-40">
                            <h2>POR QUÉ ELEGIRNOS ?</h2>      
                            <p>
                                
                            </p>
                        </div>
                        <div class="choose-desc">
                            <p>
                                Somos un Gimnasio completamente equipado que incorpora un ambiente familiar de cercanía con nuestros clientes e intentamos entregar un servicio integral complementando los ejercicios cardiovasculares, los ejercicios con cargas, las clases y consejos nutricionales.
                            </p>
                        </div>
                        <div class="row choose-list mt-50">
                            <div class="col-md-4">
                                <div class="choose-item rs-animation-hover">
                                    <i class="flaticon-book-1 rs-animation-scale-up"></i>
                                    <h3 class="choose-title">Programas de Entrenamientos Personalizado</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="choose-item rs-animation-hover">
                                    <i class="flaticon-tool-1 rs-animation-scale-up"></i>
                                    <h3 class="choose-title">Sugerencias y Orientación Nutricional</h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="choose-item rs-animation-hover">
                                    <i class="flaticon-document rs-animation-scale-up"></i>
                                    <h3 class="choose-title">Seguimientos personalizado</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="choose-img">
                            <img src="images/choose-us/1.png" alt="Why Choose Us">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us End -->

        <!-- Team Start -->
        <div id="rs-team" class="rs-team sec-color sec-spacer">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>Profesores de Educación Física especializados y certificados</h2>      
                    <p>
                        Contamos con el mejor equipo profesional, disponible en todo momento para ofrecer soluciones y ayudar a nuestros usuarios a alcanzar sus retos no solo deportivos, sino también de salud y bienestar.
                    </p>
                  
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">


                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('images/team/1.jpg')}}" alt="team Image" />
                            <div class="normal-text">
                                <h3 class="team-name">ALEX CEVALLOS</h3>
                                <span class="subtitle">PROFESOR</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.htmll">ABD Rashid Khan</a></h3>
                                    <span class="team-title">Vice Chancellor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                    <div class="team-social">
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('images/team/2.jpg')}}" alt="team Image" />
                            <div class="normal-text">
                                <h3 class="team-name">ALEX CEVALLOS</h3>
                                <span class="subtitle">PROFESOR</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                    <span class="team-title">A. Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                    <div class="team-social">
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('images/team/3.jpg')}}" alt="team Image" />
                            <div class="normal-text">
                                <h3 class="team-name">ALEX CEVALLOS</h3>
                                <span class="subtitle">PROFESOR</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.htmll">Mr. Mahabub Alam</a></h3>
                                    <span class="team-title">Assistant Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                    <div class="team-social">
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">
                            ¡Espero verte pronto en SPARTA GYM!
                        </h2>      
                        <p class="white-color">
                            Programas Especiales: Gimnasia y Acondicionamiento Físico para niños, Obesidad, Tercera Edad, otros
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Calltoaction End -->

        <!-- Pricing Plan Start -->
        <div id="rs-pricing" class="rs-pricing pt-100 pb-70">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>NUESTRO MEJOR PRECIO</h2>      
                    <p>
                        Ofrecemos 3 paquetes de pago mensual, para que no te quedes sin hacer ejercicio.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="pricing-plan">
                            <div class="pricing-head">
                                <div class="name">
                                    Básico
                                </div>
                                <div class="price">
                                    <sup> $ </sup>
                                    <span class="value">30</span>
                                    <span class="duration"> / mensual</span>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Bebidas</li>
                                    <li>10 maquinas</li>
                                    <li>1 piscina</li>
                                    <li>1 programa de nútricional</li>
                                    <li>detallar</li>
                                    <li>2 horas al día</li>                                            
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-plan featured">
                            <div class="pricing-head">
                                <div class="name">
                                    Popular
                                </div>
                                <div class="price">
                                    <sup> $ </sup>
                                    <span class="value">60</span>
                                    <span class="duration"> / mensual</span>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Bebidas MÁS alimentación</li>
                                    <li>25 maquinas</li>
                                    <li>3 piscina</li>
                                    <li>5 programa de nútricional</li>
                                    <li>detallar</li>
                                    <li>5 horas al día</li>                                            
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-plan">
                            <div class="pricing-head">
                                <div class="name">
                                    Medalla
                                </div>
                                <div class="price">
                                    <sup> $ </sup>
                                    <span class="value">90</span>
                                    <span class="duration"> / mensual</span>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Bebidas</li>
                                    <li>maquinas todos</li>
                                    <li>piscina todos</li>
                                    <li>programa de nútricional todos</li>
                                    <li>detallar</li>
                                    <li>8 horas al día</li>                                            
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Plan End -->

      

        <!-- Video Start -->
        <div id="rs-video" class="rs-video bg6">
            <div class="container">
                <div class="video-content">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
                        <i class="fa fa-play"></i>
                    </a>
                    <span>VER NUESTRO VIDEO</span>
                </div>
            </div>
        </div>
        <!-- Video End -->

        <!-- Testimonial Start -->
        <div id="rs-testimonial-2" class="rs-testimonial-2 pt-100 pb-70 sec-color">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>LO QUE DICEN NUESTROS CLIENTES</h2>      
                    <p>
                        Estamos orgullosos de contar con referencias sinceras de nuestros clientes, que han asistido a ser parte de nuestro cartera de personas que han logrado cambiar su vidas y mejorar su salud.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-md-device="2" data-md-device-nav="true" data-md-device-dots="false">
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img src="{{asset('images/testimonial/1.jpg')}}" alt="Jhon Smith">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Luis Gomes</h4>
                                    <p>
                                        Lo más importante a la hora de ir al gimnasio es tener bien claros y definidos tus objetivos. Si no sabes bien qué hacer, puedes probar un poco todas las actividades que puedes realizar (para adelgazar, tonificar, fortalecer...) y, a partir de ahí, establecerte objetivos a conseguir. Esto no quiere decir que sea malo no establecerlos, sino que tardarás más en notar los resultados.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img src="{{asset('images/testimonial/2.jpg')}}" alt="Jhon Smith">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Liliana Monte</h4>
                                    <p>
                                        Es esencial realizar un cuaderno de entrenamiento que refleje los datos más interesantes sobre tu rutina de ejercicios en el gym. Para ello, anota los consejos para hacer un diario de entrenamiento con éxito y no morir en el intento.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img src="{{asset('images/testimonial/3.jpg')}}" alt="Jhon Smith">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">José Prealta</h4>
                                    <p>
                                        Es importante que, el día que vayas a ir al gimnasio, acudas preparado. Con esto hablamos tanto de la alimentación previa como de la equipación necesaria para hacer ejercicio correctamente.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img src="{{asset('images/testimonial/4.jpg')}}" alt="Jhon Smith">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Jefersón Arias</h4>
                                    <p>
                                        Respecto a la equipación, lo que queremos decir es que, si de verdad quieres establecer una buena rutina deportiva, debes utilizar material deportivo completo y de calidad. En función de los ejercicios que realices en el gimnasio serán unos u otro.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img src="{{asset('images/testimonial/5.jpg')}}" alt="Jhon Smith">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Mauricio Tonato</h4>
                                    <p>
                                       Es muy normal sentirse algo perdido al principio de empezar a hacer ejercicio. No te preocupes, porque no hace falta mucha preparación para ir al gimnasio, con seguir estos sencillos consejos, sumado a un poquito de fuerza de voluntad, notarás los resultados pronto y te sentirás más en forma que nunca.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        <!-- Partner Start -->
        <div id="rs-partner" class="rs-partner pt-70 pb-70">
            <div class="container">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('images/partner/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('images/partner/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('images/partner/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('images/partner/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('images/partner/6.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->
@endsection
