<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>THE GYM</title>
</head>

<body>
    <!-- MENU -->
    <div class="contenedor-header">
        <header>
            <h1>THE <span class="txtRojo">GYM</span></h1>
            <nav id="nav">
                <a href="#inicio" onclick="seleccionar()">inicio</a>
                <a href="#nosotros" onclick="seleccionar()">Nosotros</a>
                <a href="#servicios" onclick="seleccionar()">Servicios</a>
                <a href="#comodidades" onclick="seleccionar()">Comodidades</a>
                <a href="#galeria" onclick="seleccionar()">Galería</a>
                <a href="#equipo" onclick="seleccionar()">Equipo</a>
            </nav>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
            <!-- Icono del menu responsive -->
            <div id="icono-nav" class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-seccion">
            <div class="info">
                <h2>HAZ QUE <span class="txtRojo">OCURRA</span></h2>
                <p>Triunfar es más facil de lo que piensas!</p>
                <a href="#nosotros" class="btn-mas">
                    <i class="fa-solid fa-circle-chevron-down"></i>
                </a>
            </div>
            <div class="opciones">
                <div class="opcion">
                    01.FITNESS
                </div>
                <div class="opcion">
                    02.CROSSFIT
                </div>
                <div class="opcion">
                    03.BOXING
                </div>
                <div class="opcion">
                    04.ENDURANCE
                </div>
                <div class="opcion">
                    05.YOGA
                </div>
                <div class="opcion">
                    06.CARDIO
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION NOSOTROS -->
    <section id="nosotros" class="nosotros">
        <div class="fila">
            <div class="col">
                <img src="img/7.jpeg" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        01
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>NOSOTROS</h2>
                    </div>
                </div>
                <p class="p-especial">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus quod provident libero, nam corrupti, adipisci ea inventore cum aliquid asperiores pariatur harum sunt. Tempore expedita atque quos ipsum nisi.</p>
            </div>
        </div>
        <hr>
        <div class="fila-nosotros">
            <div class="col1">
                <span class="frase">
                    <span class="txtRojo">ENTRENA</span> DIFERENTE
                </span>
                <h2>ENTRENA <span class="txtRojo">GRATIS</span> HOY!</h2>
            </div>
            <div class="col2">
                <button>PASE LIBRE</button>
            </div>
        </div>
    </section>

    <!-- SECCION SERVICIOS -->
    <section class="servicios" id="servicios">
        <div class="contenido-seccion">
            <div class="fila">
                <div class="col">
                    <div class="contenedor-titulo">
                        <div class="numero">
                            02
                        </div>
                        <div class="info">
                            <span class="frase">LA MEJOR EXPERIENCIA</span>
                            <h2>SERVICIOS</h2>
                        </div>
                    </div>
                    <p class="p-especial">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus quod provident libero, nam corrupti, adipisci ea inventore cum aliquid asperiores pariatur harum sunt. Tempore expedita atque quos ipsum nisi.</p>
                </div>
                <div class="col">
                    <img src="img/servicios.png" alt="">
                </div>
            </div>
        </div>
        <div class="info-servicios">
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-person-walking"></i>
                        <h3><span class="txtRojo">Clases </span> de Fitness</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-dumbbell"></i>
                        <h3><span class="txtRojo">Clases </span> de Crossfit</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-mitten"></i>
                        <h3><span class="txtRojo">Clases </span> de Boxeo</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-clock"></i>
                        <h3><span class="txtRojo">Clases </span> de Enduro</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-heart-circle-bolt"></i>
                        <h3><span class="txtRojo">Clases </span> de Cardio</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-bicycle"></i>
                        <h3><span class="txtRojo">Clases </span> de Ciclismo</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis.</p>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <!-- SECCION COMODIDADES -->
    <section id="comodidades" class="comodidades">
        <div class="fila">
            <div class="col">
                <img src="img/11.jpg" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        03
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>COMODIDADES</h2>
                    </div>
                </div>
                <p class="p-especial">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <ul>
                    <li><span>PILETA</span> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tenetur, nam cumque adipisci ratione obcaecati impedit inventore eligendi</li>
                    <li><span>WIFI GRATIS</span> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tenetur, nam cumque adipisci ratione obcaecati impedit inventore</li>
                    <li><span>ESTACIONAMIENTO GRATIS</span> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tenetur, nam cumque adipisci ratione obcaecati impedit?</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SECCION GALERIA -->
    <section class="galeria" id="galeria">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="numero">
                    04
                </div>
                <div class="info">
                    <span class="frase">LA MEJOR EXPERIENCIA</span>
                    <h2>GALERIA</h2>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="img/G1.webp" alt="">
                </div>
                <div class="col">
                    <img src="img/G2.jpeg" alt="">
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="img/G4.webp" alt="">
                </div>
                <div class="col">
                    <img src="img/G5.webp" alt="">
                </div>
                <div class="col">
                    <img src="img/g6.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION EQUIPO -->
    <section class="equipo" id="equipo">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="numero">
                    05
                </div>
                <div class="info">
                    <span class="frase">LA MEJOR EXPERIENCIA</span>
                    <h2>EQUIPO</h2>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="img/15.webp" alt="">
                    <div class="info">
                        <h2>MARCOS</h2>
                        <p>Fitness - Pilates - Yoga</p>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <img src="img/8.webp" alt="">
                    <div class="info">
                        <h2>PATRICIA</h2>
                        <p>Fitness - Pilates - Yoga</p>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <img src="img/G3.jpeg" alt="">
                    <div class="info">
                        <h2>JUAN</h2>
                        <p>Fitness - Pilates - Yoga</p>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="info">
            <p>2023 - <span class="txtRojo">THE GYM</span> Todos los derechos reservados</p>
            <div class="redes">
                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="app.js"></script>
    <script>
  window.watsonAssistantChatOptions = {
    integrationID: "3a22309e-8007-4abc-b91e-64263010e7d6", // The ID of this integration.
    region: "us-south", // The region your integration is hosted in.
    serviceInstanceID: "64936302-0198-4bfa-9ed7-587a34715b22", // The ID of your service instance.
    onLoad: async (instance) => { await instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>
</body>

</html>