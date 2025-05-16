<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Inicio - Zoológico Natural',
        'titulo_header' => 'Bienvenidos al Zoológico Natural de Mataró',
        'bienvenido_visitante' => 'Bienvenido visitante!',
        'bienvenido_usuario' => 'Bienvenido',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_entradas' => 'Entradas y Precios',
        'nav_sobrenosotros' => 'Sobre nosotros',
        'iniciar_sesion' => 'Iniciar Sesión',
        'cerrar_sesion' => 'Cerrar Sesión',
        
        // Secciones principales
        'inicio_titulo' => 'Descubre nuestro zoológico',
        'inicio_p1' => 'El Zoológico Natural de Mataró es un espacio único donde podrás conocer y aprender sobre diversas especies de animales en un entorno que replica sus hábitats naturales. Nuestro compromiso con la conservación y el bienestar animal nos convierte en un referente en la región.',
        'inicio_p2' => 'Ofrecemos experiencias educativas y divertidas para toda la familia, con actividades interactivas que permiten un contacto respetuoso con la naturaleza.',
        
        'animales_titulo' => 'Nuestros Animales',
        'animales_p1' => 'Descubre nuestra increíble variedad de especies, desde majestuosos felinos hasta coloridas aves exóticas. Cada área del zoológico está diseñada para proporcionar el máximo bienestar a nuestros animales mientras los visitantes disfrutan de una experiencia educativa.',
        'animales_p2' => 'Nuestro equipo de expertos cuida diariamente de más de 200 especies diferentes, muchas de ellas en programas de conservación para especies amenazadas.',
        
        'servicios_titulo' => 'Servicios Especiales',
        'servicios_p1' => 'Ofrecemos visitas guiadas, talleres educativos y eventos especiales durante todo el año. Nuestros programas están diseñados para diferentes edades e intereses, desde escolares hasta adultos mayores.',
        'servicios_p2' => 'También contamos con áreas de descanso, restaurantes con opciones saludables y tiendas de recuerdos con productos ecológicos.',
        
        // Reseñas
        'resenas_titulo' => 'Lo que dicen nuestros visitantes',
        'resena1_autor' => 'Juan Pérez',
        'resena1_texto' => 'Una experiencia inolvidable, los animales están bien cuidados y el personal es muy amable. ¡Volveremos pronto!',
        'resena2_autor' => 'María López',
        'resena2_texto' => 'Me encantó especialmente la zona de los primates. Las explicaciones de los cuidadores fueron fascinantes.',
        'resena3_autor' => 'Carlos García',
        'resena3_texto' => 'Un lugar maravilloso para aprender sobre la vida salvaje. Mis hijos no querían irse.',
        
        // Contacto
        'contacto_titulo' => 'Contacta con nosotros',
        'contacto_p' => '¿Tienes preguntas o quieres más información? Estaremos encantados de ayudarte.',
        'nombre' => 'Tu Nombre',
        'correo' => 'Tu Correo Electrónico',
        'mensaje' => 'Tu Mensaje',
        'enviar' => 'Enviar Mensaje',
        
        // Noticias
        'noticias_titulo' => 'Últimas Noticias',
        'noticia1_titulo' => '¡Nuevo hábitat para los osos pardos!',
        'noticia1_texto' => 'Hemos inaugurado un espacio ampliado para nuestros osos pardos, con más vegetación y áreas de enriquecimiento ambiental.',
        'noticia2_titulo' => 'Taller de conservación para niños',
        'noticia2_texto' => 'Este fin de semana realizaremos un taller especial donde los más pequeños aprenderán sobre la importancia de proteger la biodiversidad.',
        'noticia3_titulo' => 'Nacimiento de cebra',
        'noticia3_texto' => 'Celebramos el nacimiento de una cría de cebra en nuestras instalaciones, parte de un programa europeo de conservación.',
        'fecha' => 'Fecha',
        
        // Footer
        'footer_conecta' => 'Conéctate con Nosotros',
        'footer_siguenos' => '¡Síguenos en nuestras redes sociales y mantente al tanto de nuestras novedades!',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Inici - Zoològic Natural',
        'titulo_header' => 'Benvinguts al Zoològic Natural de Mataró',
        'bienvenido_visitante' => 'Benvingut visitant!',
        'bienvenido_usuario' => 'Benvingut',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_entradas' => 'Entrades i Preus',
        'nav_sobrenosotros' => 'Sobre nosaltres',
        'iniciar_sesion' => 'Iniciar Sessió',
        'cerrar_sesion' => 'Tancar Sessió',
        
        // Seccions principals
        'inicio_titulo' => 'Descobreix el nostre zoològic',
        'inicio_p1' => 'El Zoològic Natural de Mataró és un espai únic on podràs conèixer i aprendre sobre diverses espècies d\'animals en un entorn que replica els seus hàbitats naturals. El nostre compromís amb la conservació i el benestar animal ens converteix en un referent a la regió.',
        'inicio_p2' => 'Oferim experiències educatives i divertides per a tota la família, amb activitats interactives que permeten un contacte respectuós amb la natura.',
        
        'animales_titulo' => 'Els nostres Animals',
        'animales_p1' => 'Descobreix la nostra increïble varietat d\'espècies, des de majestuosos felins fins a ocells exòtics de colors. Cada àrea del zoològic està dissenyada per proporcionar el màxim benestar als nostres animals mentre els visitants gaudeixen d\'una experiència educativa.',
        'animales_p2' => 'El nostre equip d\'experts cura diàriament de més de 200 espècies diferents, moltes d\'elles en programes de conservació per a espècies amenaçades.',
        
        'servicios_titulo' => 'Serveis Especials',
        'servicios_p1' => 'Oferim visites guiades, tallers educatius i esdeveniments especials durant tot l\'any. Els nostres programes estan dissenyats per a diferents edats i interessos, des d\'escolars fins a gent gran.',
        'servicios_p2' => 'També comptem amb àrees de descans, restaurants amb opcions saludables i botigues de records amb productes ecològics.',
        
        // Ressenyes
        'resenas_titulo' => 'El que diuen els nostres visitants',
        'resena1_autor' => 'Joan Pérez',
        'resena1_texto' => 'Una experiència inoblidable, els animals estan ben cuidats i el personal és molt amable. Tornarem aviat!',
        'resena2_autor' => 'Maria López',
        'resena2_texto' => 'M\'ha encantat especialment la zona dels primats. Les explicacions dels cuidadors van ser fascinants.',
        'resena3_autor' => 'Carles Garcia',
        'resena3_texto' => 'Un lloc meravellós per aprendre sobre la vida salvatge. Els meus fills no volien marxar.',
        
        // Contacte
        'contacto_titulo' => 'Contacta amb nosaltres',
        'contacto_p' => 'Tens preguntes o vols més informació? Estarem encantats d\'ajudar-te.',
        'nombre' => 'El teu Nom',
        'correo' => 'El teu Correu Electrònic',
        'mensaje' => 'El teu Missatge',
        'enviar' => 'Enviar Missatge',
        
        // Notícies
        'noticias_titulo' => 'Últimes Notícies',
        'noticia1_titulo' => 'Nou hàbitat per als óssos bruns!',
        'noticia1_texto' => 'Hem inaugurat un espai ampliat per als nostres óssos bruns, amb més vegetació i àrees d\'enriquiment ambiental.',
        'noticia2_titulo' => 'Taller de conservació per a nens',
        'noticia2_texto' => 'Aquest cap de setmana farem un taller especial on els més petits aprendran sobre la importància de protegir la biodiversitat.',
        'noticia3_titulo' => 'Naixement de zebra',
        'noticia3_texto' => 'Celebrem el naixement d\'una cria de zebra a les nostres instal·lacions, part d\'un programa europeu de conservació.',
        'fecha' => 'Data',
        
        // Footer
        'footer_conecta' => 'Connecta amb Nosaltres',
        'footer_siguenos' => 'Segueix-nos a les nostres xarxes socials i mantingues-te al dia de les nostres novetats!',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'Home - Natural Zoo',
        'titulo_header' => 'Welcome to the Natural Zoo of Mataró',
        'bienvenido_visitante' => 'Welcome visitor!',
        'bienvenido_usuario' => 'Welcome',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_entradas' => 'Tickets and Prices',
        'nav_sobrenosotros' => 'About Us',
        'iniciar_sesion' => 'Log In',
        'cerrar_sesion' => 'Log Out',
        
        // Main sections
        'inicio_titulo' => 'Discover our zoo',
        'inicio_p1' => 'The Natural Zoo of Mataró is a unique space where you can learn about diverse animal species in environments that replicate their natural habitats. Our commitment to conservation and animal welfare makes us a regional reference.',
        'inicio_p2' => 'We offer educational and fun experiences for the whole family, with interactive activities that allow respectful contact with nature.',
        
        'animales_titulo' => 'Our Animals',
        'animales_p1' => 'Discover our incredible variety of species, from majestic felines to colorful exotic birds. Each zoo area is designed to provide maximum welfare to our animals while visitors enjoy an educational experience.',
        'animales_p2' => 'Our team of experts cares daily for more than 200 different species, many of them in conservation programs for threatened species.',
        
        'servicios_titulo' => 'Special Services',
        'servicios_p1' => 'We offer guided tours, educational workshops and special events throughout the year. Our programs are designed for different ages and interests, from school children to seniors.',
        'servicios_p2' => 'We also have rest areas, restaurants with healthy options and souvenir shops with eco-friendly products.',
        
        // Reviews
        'resenas_titulo' => 'What our visitors say',
        'resena1_autor' => 'John Pérez',
        'resena1_texto' => 'An unforgettable experience, the animals are well cared for and the staff is very friendly. We will be back soon!',
        'resena2_autor' => 'Mary López',
        'resena2_texto' => 'I especially loved the primate area. The keepers\' explanations were fascinating.',
        'resena3_autor' => 'Charles García',
        'resena3_texto' => 'A wonderful place to learn about wildlife. My children didn\'t want to leave.',
        
        // Contact
        'contacto_titulo' => 'Contact Us',
        'contacto_p' => 'Do you have questions or need more information? We\'ll be happy to help you.',
        'nombre' => 'Your Name',
        'correo' => 'Your Email',
        'mensaje' => 'Your Message',
        'enviar' => 'Send Message',
        
        // News
        'noticias_titulo' => 'Latest News',
        'noticia1_titulo' => 'New habitat for brown bears!',
        'noticia1_texto' => 'We have inaugurated an expanded space for our brown bears, with more vegetation and environmental enrichment areas.',
        'noticia2_titulo' => 'Conservation workshop for children',
        'noticia2_texto' => 'This weekend we will hold a special workshop where the little ones will learn about the importance of protecting biodiversity.',
        'noticia3_titulo' => 'Zebra birth',
        'noticia3_texto' => 'We celebrate the birth of a zebra foal in our facilities, part of a European conservation program.',
        'fecha' => 'Date',
        
        // Footer
        'footer_conecta' => 'Connect with Us',
        'footer_siguenos' => 'Follow us on our social networks and stay updated with our news!',
        'footer_derechos' => 'All rights reserved.',
        'select_language' => 'Select a language:'
    ]
];

$idioma = isset($_GET['lang']) ? $_GET['lang'] : 'es';
if (!array_key_exists($idioma, $traducciones)) {
    $idioma = 'es';
}

function traducir($clave) {
    global $traducciones, $idioma;
    return isset($traducciones[$idioma][$clave]) ? $traducciones[$idioma][$clave] : "[$clave]";
}

// Manejo del cierre de sesión
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: home.php?lang=$idioma");
    exit();
}

// Mensaje de bienvenida
if (isset($_SESSION['nombre'])) {
    $bienvenida = traducir('bienvenido_usuario') . " " . htmlspecialchars($_SESSION['nombre']) . "!";
} else {
    $bienvenida = traducir('bienvenido_visitante');
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo traducir('titulo_pagina'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.allforpets.ca/wp-content/uploads/favicon.png" type="image/png">
    <style>
        /* RESET Y ESTILOS BASE */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9;
            color: #333;
            line-height: 1.6;
        }
        
        /* SELECTOR DE IDIOMA */
        .language-selector {
            background-color: #1b5e20;
            padding: 12px;
            text-align: center;
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .language-selector span {
            margin-right: 15px;
            font-weight: 500;
        }
        
        .language-selector a {
            color: white;
            text-decoration: none;
            margin: 0 8px;
            padding: 6px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
            font-size: 14px;
            background-color: rgba(255,255,255,0.1);
        }
        
        .language-selector a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        
        .language-selector a.active {
            background-color: #4CAF50;
            font-weight: 600;
        }
        
        /* HEADER */
        header {
            background: url('https://www.leonvet.es/update/04-oct-importancia-animales-ecosistema.jpg') no-repeat center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
            margin-top: 44px;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        header h1 {
            font-size: 2rem;
            max-width: 900px;
            margin: 0 auto;
        }
        
        header h2 {
            font-size: 1.5rem;
            margin-top: 15px;
            font-weight: 400;
        }
        
        /* NAVEGACIÓN */
        nav {
            background-color: #2E7D32;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 44px;
            z-index: 999;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        nav a {
            color: white;
            margin: 0 20px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            font-size: 16px;
            padding: 5px 0;
            position: relative;
        }
        
        nav a:hover {
            color: #c8e6c9;
        }
        
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #c8e6c9;
            transition: width 0.3s;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        .user-section {
            display: inline-block;
            margin-left: 20px;
        }
        
        .user-section a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: rgba(255,255,255,0.1);
        }
        
        .user-section a:hover {
            background-color: rgba(255,255,255,0.2);
            color: #c8e6c9;
        }
        
        /* CONTENIDO PRINCIPAL */
        .container {
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
            max-width: 1200px;
            margin: 20px auto;
            width: 100%;
        }
        
        .main-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .left-section {
            flex: 2;
            min-width: 300px;
        }
        
        .right-section {
            flex: 1;
            min-width: 300px;
        }
        
        .section {
            background-color: white;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        
        .section:hover {
            transform: scale(1.02);
        }
        
        .section h2 {
            color: #2E7D32;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .section p {
            margin-bottom: 15px;
            font-size: 15px;
            line-height: 1.7;
        }
        
        .section img {
            width: 100%;
            max-width: 350px;
            height: auto;
            border-radius: 10px;
            margin: 15px auto; /* Cambiado para centrar */
            display: block; /* Añadido para centrar correctamente */
       }
        
        /* TESTIMONIOS */
        .testimonials {
            background-color: #f1f8e9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .testimonials p {
            margin-bottom: 5px;
        }
        
        .testimonials strong {
            color: #1b5e20;
        }
        
        /* FORMULARIO DE CONTACTO */
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Poppins', sans-serif;
        }
        
        .contact-form textarea {
            height: 120px;
            resize: vertical;
        }
        
        .contact-form button {
            background-color: #2E7D32;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        
        .contact-form button:hover {
            background-color: #1b5e20;
        }
        
        /* NOTICIAS */
        .news-section {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .news-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }
        
        .news-item {
            flex: 1 1 300px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .news-item h3 {
            color: #2E7D32;
            margin-bottom: 10px;
        }
        
        .news-item p {
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .news-item .date {
            font-size: 13px;
            color: #666;
        }
        
        /* FOOTER */
        footer {
            text-align: center;
            padding: 25px;
            background-color: #2E7D32;
            color: white;
        }
        
        .contact-info h2 {
            color: white;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .social-media {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px 0;
        }
        
        .social-media a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            margin: 0 15px;
            transition: transform 0.3s;
        }
        
        .social-media a:hover {
            transform: translateY(-3px);
        }
        
        .social-media img {
            width: 40px;
            height: 40px;
            border-radius: 30%;
            background-color: white;
            padding: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        footer p {
            margin-top: 15px;
            font-size: 14px;
        }
        
        /* RESPONSIVE DESIGN */
        @media (max-width: 1200px) {
            .section img {
                max-width: 300px;
            }
        }
        
        @media (max-width: 992px) {
            header {
                padding: 80px 20px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            header h2 {
                font-size: 1.3rem;
            }
            
            nav a {
                margin: 0 15px;
                font-size: 15px;
            }
            
            .section {
                padding: 25px;
            }
            
            .section img {
                max-width: 280px;
            }
        }
        
        @media (max-width: 768px) {
            header {
                padding: 70px 15px;
            }
            
            header h1 {
                font-size: 1.5rem;
            }
            
            header h2 {
                font-size: 1.1rem;
            }
            
            nav {
                padding: 10px;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav a {
                margin: 0 10px 5px;
                font-size: 14px;
            }
            
            .user-section {
                margin-left: 0;
                width: 100%;
                margin-top: 5px;
            }
            
            .main-content {
                flex-direction: column;
            }
            
            .section {
                padding: 20px;
            }
            
            .section img {
                max-width: 100%;
                margin: 20px auto;
            }
        }
        
        @media (max-width: 576px) {
            header {
                padding: 60px 10px;
            }
            
            header h1 {
                font-size: 1.3rem;
            }
            
            .language-selector span {
                display: block;
                margin-bottom: 8px;
                margin-right: 0;
            }
            
            .section {
                padding: 15px;
            }
            
            .section h2 {
                font-size: 1.3rem;
            }
            
            .social-media {
                flex-direction: column;
                align-items: center;
            }
            
            .social-media a {
                margin: 5px 0;
            }
            
            .news-item {
                flex: 1 1 100%;
            }
        }
        
        @media (max-width: 400px) {
            header h1 {
                font-size: 1.1rem;
            }
            
            nav a {
                font-size: 12px;
                margin: 0 5px 3px;
            }
            
            .section h2 {
                font-size: 1.2rem;
            }
            
            footer h2 {
                font-size: 1.2rem;
            }
            
            footer p {
                font-size: 12px;
            }
            
            .social-media img {
                width: 25px;
                height: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Selector de idioma -->
    <div class="language-selector">
        <span><?php echo traducir('select_language'); ?></span>
        <a href="?lang=es" <?php echo $idioma == 'es' ? 'class="active"' : ''; ?>>Español</a>
        <a href="?lang=ca" <?php echo $idioma == 'ca' ? 'class="active"' : ''; ?>>Català</a>
        <a href="?lang=en" <?php echo $idioma == 'en' ? 'class="active"' : ''; ?>>English</a>
    </div>
    
    <header>
        <h1><?php echo traducir('titulo_header'); ?></h1>
        <h2><?php echo $bienvenida; ?></h2>
    </header>
    
    <nav>
        <a href="home.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_inicio'); ?></a>
        <a href="animales.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_animales'); ?></a>
        <a href="servicios.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_servicios'); ?></a>
        <a href="noticias.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_noticias'); ?></a>
        <a href="entradas.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_entradas'); ?></a>
        <a href="sobrenosotros.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_sobrenosotros'); ?></a>
        
        <?php if (isset($_SESSION['nombre'])) { ?>
            <div class="user-section">
                <a href="?action=logout&lang=<?php echo $idioma; ?>"><?php echo traducir('cerrar_sesion'); ?></a>
            </div>
        <?php } else { ?>
            <div class="user-section">
                <a href="login.php?lang=<?php echo $idioma; ?>"><?php echo traducir('iniciar_sesion'); ?></a>
            </div>
        <?php } ?>
    </nav>
    
    <div class="container">
        <div class="main-content">
            <div class="left-section">
                <div class="section" id="inicio">
                    <h2><?php echo traducir('inicio_titulo'); ?></h2>
                    <img src="https://quo.eldiario.es/wp-content/uploads/2019/10/fotos-naturaleza.jpg" alt="Zoológico Natural">
                    <p><?php echo traducir('inicio_p1'); ?></p>
                    <p><?php echo traducir('inicio_p2'); ?></p>
                </div>
                
                <div class="section" id="animales">
                    <h2><?php echo traducir('animales_titulo'); ?></h2>
                    <img src="https://es.homeexchange.com/es/blog/content/images/size/w1200/2020/06/donde-ver-animales-en-libertad-pinguinos.jpg" alt="Nuestros animales">
                    <p><?php echo traducir('animales_p1'); ?></p>
                    <p><?php echo traducir('animales_p2'); ?></p>
                </div>
                
                <div class="section" id="servicios">
                    <h2><?php echo traducir('servicios_titulo'); ?></h2>
                    <img src="https://s.yimg.com/ny/api/res/1.2/TRYVWZoav5d_zPQwAnkc1Q--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyNw--/https://media.zenfs.com/es/ap.org/02e111a869b892bf71402feb8dd19079" alt="Nuestros servicios">
                    <p><?php echo traducir('servicios_p1'); ?></p>
                    <p><?php echo traducir('servicios_p2'); ?></p>
                </div>
            </div>
            
            <div class="right-section">
                <div class="section" id="testimonios">
                    <h2><?php echo traducir('resenas_titulo'); ?></h2>
                    <div class="testimonials">
                        <p><strong><?php echo traducir('resena1_autor'); ?>:</strong> "<?php echo traducir('resena1_texto'); ?>"</p>
                    </div>
                    <div class="testimonials">
                        <p><strong><?php echo traducir('resena2_autor'); ?>:</strong> "<?php echo traducir('resena2_texto'); ?>"</p>
                    </div>
                    <div class="testimonials">
                        <p><strong><?php echo traducir('resena3_autor'); ?>:</strong> "<?php echo traducir('resena3_texto'); ?>"</p>
                    </div>
                </div>
                
                <div class="section" id="contacto">
                    <h2><?php echo traducir('contacto_titulo'); ?></h2>
                    <img src="https://www.zoodigital.com/wp-content/uploads/2024/01/ZOO-digital-audio-post-2.png" alt="Contacto">
                    <p><?php echo traducir('contacto_p'); ?></p>
                    <form class="contact-form" action="#" method="post">
                        <input type="text" placeholder="<?php echo traducir('nombre'); ?>" required>
                        <input type="email" placeholder="<?php echo traducir('correo'); ?>" required>
                        <textarea placeholder="<?php echo traducir('mensaje'); ?>" required></textarea>
                        <button type="submit"><?php echo traducir('enviar'); ?></button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="news-section">
            <h2><?php echo traducir('noticias_titulo'); ?></h2>
            <div class="news-container">
                <div class="news-item">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGR0bGRgYGRsaHxofGR0dIB0aHR4aHSggHxolIhsYITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lICYvLTAtLy8vLS8tLS0tLS0vLy0tLS0tLS01LS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAEBQIDBgABBwj/xAA9EAABAgQEBAUCBAUDBAMBAAABAhEAAxIhBDFBUQUiYXEGE4GRoTKxQsHR8BQjUuHxB2JyFYKSoiQzwkP/xAAaAQADAQEBAQAAAAAAAAAAAAACAwQBAAUG/8QAKxEAAgICAgAGAQQCAwAAAAAAAAECEQMhEjEEEyJBUWEyI3GBkaHBFELR/9oADAMBAAIRAxEAPwDFhISE2yUpx0OYa9ne0C4+WpJa1m9i7fb7QwlyitwKCS782u/73EA4uXyhRN2pJ0dLfoTC29DpJ0UoQSqvUXH6w9weHCEomcpSsEF7ltW6wikzKQbPtBeF4qpApyGQtk+cR5YOS9IEON3IdYBUlaSglEspJLk3Z87RPEGQpRUqaFJyARdR7vCsYcGZ5iZfnOmwJYPqVb9otklQc+SiWTa4duxgIQitp7F5JXLj/wCA3FsEVhJlSyQ+TvHmF8PzikuEpfcw04bjD5stJmBSVFlBIb9iD8RiSmYalAISbEi3brGZc0l6UUYsacbYnwPg0kOqaBe7RVxjwwUpdK6kjeGmP4qVLIl3SfxAN7RbgZM1rJC6zqcmhKz5l6m/4OcE/TFGCmJUxtA8xJGca7ieDFRLEEG4EUo4AiZdKiOhi/z41bJ5a7B/DYAQSc1WTvHnGJBUtjklvfWDMPgilVBblFm+8eTEOlibvn2h8HatBxdoVJlh+YawwwmBmFyhVKNXLR2GkBRACtLkiGyiEpABDMGhWWSqheWVaAzgWUlRW19iY0GGw9SVkJKpaUZWAJzdhlAEnAFaCoGwz9IfcNmpl4RVQUygQkpD+/SE4pRcnT6Ngn7mWllRanu2givE4ZT1VXfeJoxgFwWAv3MUTcUVKZRz10jk5WApFC5wSsJvzZn9IPw02m4YHr9+8LJUyXUrUpsOrww8ghNas1dM/wC0bKdDdpWT4bIAmg5qUv8AYgzELLLdIpNW5uOU/KTFWCUErQpmSk1X1pc572i/Hy7+UoulCCE2DqoJuR1UB7Q7C7Vm423dirEI5g/40XG9gAA/b7wGmSSCkkcwvcM4AB+Cn5hpipdIQXu6VJBa4UkFyRk5Kh6QMiVUvKzrID3TSByn97wyTpMNoEwsgcz+wDdIBOHUglKADeGc/FCWlCiGe9Lh/wDEeYvGyZgpQtllIUk5MdUk7xOm1sTbYD/ECtJZiLZW9RFcxNwUhzqD8+kDKW55i51i4lwW7gnpDKNPMZMTNaqxFhvbKFwSQWyvDSXh61MWBZwd+gizF4GliC4IBBbXX2jlJR9JiQuVKpVa6TrBM0mkVZPY7R2HmcrEBnuD+UWolCoj8BDjtBM0rTMUANUuWg3CzSopI0P7MUrwY0NjHklLiwvr6QLObLKSgqUBfcWILv7RXMnrWoqUpbk9T94by5LMoXS136loq4lw1SF0hJsA7F79G9IQpxUqCp0EYUVKUCAaVEvcs6d8veAseQJRS7kq9rBx3sqDFLULopAmJuM2bI98+kL8cpVGQaoq9Lv+UVsa3dhWEkJMuUUsVqJS3bXt+sA8TkFKucNtBPCOJCVLIKCXIFY/CHuO5jUeM0yFYKXMA/mE2tHmyyyx5UmtN0bxjKF+5mfDvCpk51S1B0Zhy5B7XhpM4DMSvmLpJsHOvQxd/pkQibMU7KKQAPv++saDxEVI/noLJSRc3cmwDbR2bJOOTil/IpwTSaYlmeGQkgFJ8xnBCsu4jzhzMEYgPzF06lte0EYfxNMvNWhK6E3J5X7Rn8fx5E/EomygUhKCC+5hP685cZrXz9lUEsaTvs0mEwUqZVMl8jGyOnWK5uJVI5iGS/aC5OBFCJkokKIe+SvSKULTMcYgMTYuGB7QjSdva/ybPf0Z3H40VmaVChQYgaQnmccUg8mXWLPEvCkySoSyopJs8Zwksxj1cOOEoJ9oilfUjQcIxapuIJOoyhxiUUqNrm0IOAy1y1BdOf2h5OUWLM+bmKkklSCj0UCSTkOncwywUgEhCy6gPbuYUYfia0lQU1OgAy6wXhcW4UokN066QnP0LyN0FFBqUlKyEJOmRjQcX4iqXhUSkyyQpLFRs2uWsLuDcL84O9vzjQcZwAmppBHIm7npE8M0FGT+DYRk9/PR89xAqAAFzYesD4sKRZgCLQ5UUighNUxKuUZD/HWKJuAmz1LLOB9RGQjo5Ve+glDQHgkJM0KPK194aTZwUClJsm6dxvC04C9ge+rwbwnDlC+cG93Mdkr8hkLqg/g+BSTWtd01Og7U2PyYt4wtQXLUl0lQe+y5q7K65DuqPakmanQE3vYDVztEMRiPOUAm6UrWn/lzFY/7QT6tpDvCtuLbNmknoU4hX4CT9NTfUwZ0pB0bmYDYRBEwpUSTUSHtuxuO4SLd4vxE1NVWTSwALXU7aHqHgSUCAnlFwlQ9BSofa27xS9oBlGOlLWKiA5ukagbGE2DlkE69I0ONlnfMZDaF0mSp3SQ2/aEQlqhTfwUzEB8ma/8AiOXlb97QfMCSlyLGKghLkM4Bz+0bYIFIxDANmMukHpWqYzmwADDSPBw4KuLW2iQwUyW6klxrGNpnOQPisE4IS27mLpagKUfiy+IKw8upJWrTMDTtFKUpClKapxGX7HbaIplqBsR06jX1ixKQogix7ZxXi0//ANEHIJJD+/8AeK5GNcBRTcAi3x++sdsG2HJdNncNGmwfEMOEsXtq7v1/t0jJyMWmm7uPqAz9PSI4nEpq5bjdmhGXAsunf8DsWVwbaQRKAAl5kEN2/ZHzFGJQaUtdwsNl+8oLkl0pCVAgAXGZf6uw09I6fLYSwDnfTZ/1i5jqFuB5SUqu+Q67xcMRMK0hSlFIsAS9tWg7iODklHITWlI5iGqOvYQEkrASCnLWJGk9iVkTVG18NScOAUpTz5vqAdzBXG8YlCaZifMQVDLRtoxPD5qwslKinJ+0P+JT3CE11BwSG/SJlhnzT7X+QpyTX2LeP+QZKy9P9NOXtnGV8PYpMueCsVJ2jSeJUyUSw8mp8uZaSDveMbKDKePQjBOLT9wYzevo+4cE49InpSlgkDPJ72FoH4rgECWZhL85AfURlcBOwctCVEKE5Sc0qJp76P0iPEOOvLSHqNwQrXrbWPOn4VxklB9sfHxHK7QyxHCHQFrIoVkDoIy2M4LLKjQpim7bxJfFsRiWkKKQlOQSGy0tBeE4XNKSqwVkxLWGsOw4skH6pCJzTehfgcU6wnQOGguakZgWA1gPB8NCZgXW7PYQdiFO5Z7RdF30bB2gJabG2cDTFFNgLQVNUAly/wCsQkTPMYBNIEZNpRtnTdIK4DiJnnISlRDqA+dY0PihMwT0kzWBDKSkN6neAfDWAP8AFS1tygk+wMNvEONQmcEqDkh3MSzl+m3E2EW+9Aknhsl01rAD76aCNFNx+HRJVKklJLXb93jMnBCesJTYn4hwnwcuUkrCna8eVOUG1zk7+B6jKOoL+RB5jZDmJLwaJLpBUzd2+YUTp5rL6GLJ8pSkio55JB+8enkguKB5P2LMXOALBTppUSw2SSWPpDDETgCCFABKXD3+lKHsGLgk/EKcFSJqUrHKHSdbEF7a9oux2LclgA48tN2tmpTexA6CKPDqo0Y9soxI5RULmYHGg5QQfY/JgWemy0JNq1FH/iSoPsS3vBuJWElSM1VgpbLIE72zLbGF0xgsqyBmgZf1N67+hh4J0yca65nZthtFMicDMOiBkBrBMmSVpXVoTbrlChSSlQcWU8TpJsU1Y5noFD2IGfVxC5IqSSmykh7a9I9xKjUQDYsWjwJUCe2nWNqkYoheAnPcWABz+0X+eK3Bdg1OkL5EhQJs/SCkTnLU65CBaAlFWVYrFgnky6a9IbSuFj+F/iAq4N0dOnWAMRhkNygi/sdYGM9YQU/EdVr0jITSWlZNdKgojJm6wtAKR7GCFT7CzGJBQULhoPaAApqiA4zfKL8Krl1ERRLdJL2iMuaU2EF2Eh6gukHSkhuoUBEFJUySVXQ3sXDHr/eLkJFILmlhY3cqNw2npvFGPmpIVSxISGItVSXb49DBlNFhqc1gWybpFypxSQxBBMLEzSsjO+ZPeLU4UnI5xE479RCoVNNjdGJKCry2DjNgfvHYDEKmTOdRYHTqDA/CsGoTCFS1LtZrWhjOWiWtNEkJIIdSy5tBcfR6Shv1epBvFfCSp8kmVOuL0qv6RjUeGVeYEKmCrYpUL6gPG5V4mMtRmCWV1WpAt0iHDMDisVigVSxLRTVzG/sPtE2PxGaCfmV/aDlHm1wX7mW4yZstAQ4CQLskJc/cwPw7CKWlJUg5/USBbo5jXeLfBOIQDNSoTBmwdx+sZzhElK0qVNAJSWH9XtFGLKskbTv5oXlg4AhxYRMPlyQCLVJVcjq1gYMncTkKTSZNCyGJJJ9Xi/ivEGdTBMuwpCQCR1hBjcUmYSUpCQ9hD3t9Cu2GYKdLCwhPvvB80CkgDMZdoz8qUa0kbw4xW+ViO8MiqHQWgRZKhYW0ipSiAKbR4p7M8RnKjZLR0ujZeCppVMCSckm3eN7L8OSZsupYBUXz9o+c+B5bzlFywll/iPOL8Ynyp5RImrMsNmSbnO5jzfEYJTxcYOt2HgyKKuQ6OF/hsRS7h7RqsRJWuSVJVplHzGZjV1hcxTq6w7R4lmrQEySRoX2iGfhclxb792UwzxSZnZxIUQRcKLxYnGUl8y0eYml1OXUbvvA8uW8eu6ktkLm70GcHSTiJZN7/AHBb5aGHkqVS5dqlPe7ykZe/z7LuBAibLzBqD+8HJUXlsFKPlqAG1kpBOjOFF4di9woaQuopTLUC7hm62Jvk94CxeGrqQzKMwmo7UpIA6i/uIMEt6E1WEsFOjF723t8QLJmELTUouUkksLE+mzfEMDCuH4SYoFZGpLZAvd221gIJCnG6iB1gxeNmpCEpdww30ZoSpmMoaEEk94kjGVtsW9rQX/Dl2MEoAB9IqVxFwLB2+d4lMmkKSsh7MW1g9tGb7KkYmpTgZWgrDygp1AgHPZ4X4GYApXKb5WyjceCAgL82eFIYFUt08qt7tCPE5Fihyo3hzdGZmlwTd/zgLFTwhDaw18Sz0oxE0JpCSXCQxswvbfaM9KmJUou9jrBYfVFS9gVHi3ErkEkh49xllCnWClLSlRb37x3IUnJwbxSFoDWWA2MGYfhilJChkYoVKqCTo7doaLxKZbIqyELySfSNVLbLHoMwIHIlik9Df3BBEVz5oKQyGFvkXHsXj0zCVTUnI0j4HxmYmqolSiQKVpPolgfgQ8cBS3KEoAyJvvHspRBPMQ0WYJIel9SB+UMcZwtMpSROJSlQ/Dct+/vE8qToVJhvDuIzFoKQohhcjWA1YdS0laZC1gFqgTDrg+ClpClSV+YhmIUySP1gLiqFyaCJhoUSaUlmiTHJxycUMlWSHJdo0nhzhSZiEJu7Al9Gzh7hzJw8xK1mynSNOYFg7+sLfCONDEpBewKlHe/vlGe/1K4RO81CpM+pKs0EgBLag/lHnRh5udwm9O/7Hyk4w5JDzxP4xV5qZMlIcE1EnO2Q94yvFuHmWPMnhSFEuGG/WNXwHg2ClSEYhZqXSN1c3Qd4Wccx6JtpwKw7ipwAHt9PsEuSekV+BioPjihSXbfv+wmcHPbf7HzjjSVqUlnVchg566d4MwnhrEqAIkqZnuGf3jXTOKIlSyUeXLDOaQAW6l29HJtEJXFUywXUamdSqlAh8hu50Da6PHq2wfLXyK8JwhXlglExKwclILe7QLiZJJLpLDo7NGtwPGZSElTzFG7gqIa+VlFzqb2ds7Q+4XxIz2INKBmSSMurX7B+8cm0Ysde58llIN+t4Iw3CZkwVkUSxnMXYdh/Ue3q0fVuIcblyeRCASNVZd2vYnIZk7R838Z8YmzVByu1gGGp2GVvuI3k3oJwVbJ8K4rJwiiWVMJDf0gffrBony8TWqVyzLtKIZ/+JZj2+8ZTD4CYoAkEszpuAOr9M2yvBsnDqQoOo1M/Kk2Yn8XTqfzbJY4tUCoqqL/4MlVwfWCFpZNIsBtrGn4bJViUGuSsKAYz0sxI/qSWBVrYuxgDFcNMoqVMDggsQ4B9DcH/AGmJcjcdtC/LnejLYiUXT1MOeD4ZwQSMib7x0ng86eumUkqTZ1kMlI3UrIDOHeG4AqUoVKQtBsFS1VB2yNgQW3GkMyP9Nv6GY4bF2DmrE1MukMpSbtex32iSlMpZSCwqtrYJKQGzu5/7oMxUspm0gXQoEHXKAJma1XAPmM4b6lUZdCkBtiI7wb5QsZkTTpiNgRLTpzEtuqwfsPvFcqSAQ+akqSX0UkOA2xY94MmSKAkNzAs2ls9c7faF06YoFK8zVUQdR9NuoBioAYYuS8lC1KArDgDr+2jPSpIUtjZJIcnvGgRJBlIFX0BTA7VHKFipDGnJmPeJsbdtP7BkRxUllkJHr0hnhyihiLm8AkEkZvr2gYziCwORgqtULbLZeNSlauUsTGj4x4llzcLLlIQoFAABAYdTbfrGNE4vk8aHB4ookrQyGmBnOjQnPhT4yq2n8mxbSdCTEHIgkkl8tusAYgqCy+evtD5WBCQSVOSmwA1OvaFUzD0qNd3A/YiiEl7GUDyws/eCZKCMznF/C+Fgr5yaQx1f/EO/EHAJUuWhUqYhRYOxF/7wueeMZqD9w1jbi2AyGZhcfrF2M4eFKBUC7CBeF4QLXSl32jbTOBpISfNawseneJ8+eOKSTYHBtaM6FD+blUCe7KLBh29ogJI8uWRVzZ3LFlAfnEOHylFIpDqUKn6oLkdXeH3D/CU+ZJTWUy1Co0F9btrsI9BySHOSXYm8O0pnGZMUkCW5AP4lNZhsL36QRxSavFKK/OllILMpbHqWaw7ww4XwbyhMOJQikqISblRubJAyGZeGq0olAoloQlCtAkBRI3JN4kyNeZyfx/BJkmk3Qgwnh6cl3p6Cv5EPMLgwkEJlCdNSHNf0i2m5hLxybNSE1LKSrJJ13dsoM4Li1uJTKSpWoJZmzJ7PCZ+alcewseRtUwjhHGBNWZakUhVqUDXcttBvEpKECmfTMQnQuaepa6laAD3iGExcqWlSkpShyyVi5X1bqQYxHEOMmYuZzctZJWSD6JyvaH/8WEp82WLI1DizU8R4+Aj+WkADkQG/EXtSLBs89bxkOOY9QbmK5y+UDRD2cZX0cDeKVYshb3cJLDRAI3zKzqbZmFOKxBVzkuoXT79IrUUgHIdKJmEgGyClIt/Qkaal/wB2iydOJKiSXN3BakWAy/FZRiOFpSEoTkXJPuTfpn3IiszmclAAYUo/9Ug7WJ/9ukccHSEFapctLtVcaJCWzP8Ai5J7bP8A6iiXKCyWlpTyC+WQIH9Sy5vcBox3CJhqfoW61ZH1f5MMfEeNCfLkS3K0JHM3Kksnm6qAbIWtvcWgkSxnFCEgFpepsCXIyAfMPkS/2hGiakkqDgaOHJYuT9gMgGgWdiVKqKCAAaQSHY6qJye2m8VT5oFxchKRez9/uR0vGqJjkafw/LrRcAqPMokuBqE20SCkN0grjOGloCUqXSpWd93KUttnc6jvCzwriqELWrMEh+5zt1ytHvFp4J85QJCHUhJ1JLA98z2EYaugHxzxlRT/AA8stKklgkFskjnbqSr3gvw7j1zZKQVmtNmmOoKTcgFr2eFOP4Zo6lrWKlOLAD4GfW5ygrgCDLcqUBdiCX+X0/XKMpcTt8jQeIJmLXhiiRNKRLuqUGYj/aRds7GK/BMyf/CmZMVZawpAZmCAoVf9xV8R7g3UtU1KwyQ7G4YMT319ob46c8sFDMoaBgGs3TtCMtuPFGyXuB4niJUtaznSojuE2BgXFA3QSFP5d9BUtUw/BSPSBRMIqZsj7taC5xpWqWPwsCS5cpQC98gAG/7jtB+GilGkK5OT2L54pUsk9ne5Fi2/94X4pNiHB/lqKe9iR8QyxgJCXJ5nHuz9YDnSxWtmYMBs5ASQehByigIuko0LNdj3JLdrxCfLSUqU7qFm2aDUYMFAoBawY5gkAt8wFOwkxD2z13O3tEDa5tWC20BKxCirIC0VTkOatdTuI9nEg5NtBckpUA/Yj0hrdbFtaFRw7u0PsPwxJQmhKlTlXCGsw72hbiMGoCpLhuucOeH+JTLShIZRSQQSLjRidoXneRx/TNhJL8gXEY0rWlBTSQKaewi/hfCZc+ZMCqxQlBqGQBUaviAsTMUub56iKndgNII4bxVUqepSFClSQCMnD29nJgckZeX6NMPG48t9DSVJlyxMQoqUKuRaAlyDkC5GTiAQJa5IaQAqWf8A7VqSgF/wlzn7xssVwqRiJITT5amsoEWv0hDjuCykilUxSlPyqKXy0ADAnqYjw5Yv8ruxuZpOouzFIlqE1TCkpJyOXYiG0pU0i61epJ/OIcVw6ioJkyTWzkoBLhsynTJ4ol8VnI5VSVON0kH5Eeg/1IppE0lTqw3hOLVLpAVkSGIP4Xv9vmGWF8QkJHmlRrDmm1Ls/W/5QqmyeZYuw/8A1r8j4g7guAEwJMxaZdgUm2QLXG1jD5QhfL3GTjF/kF4afKmTHrWhCU5qUVFROz6W+Ysx/DKv5nmKBGuabDPcRRJwUpKR5SlTWqLgAZE76Qy4rws4iUkpJQsM5qsQ1w3fSJZySl19E8IqU6TqhDicTLIUlSlTFDWzQdwvjyAhaBKJZLXuTo1oHVwUhwqYknRgbxDw/hmxKEt+O7jQX/KChGNVew4wi/7O4msALSkAMBnekJYUpv111MZFawlyA9+Ubk/oPvGn4wQBOJv/ADCBbNhb0s8Y+skOS5zGgAf+0WRVIdIOXMaxuW2BvzX+7PCxU0hSn0L9929vkxaJpIUx5lMewf8AfvAZA/v+/WCBY6wc80gHcOX2Y6buPaBxPNIu1io36sL9nIgSTMZLbfoR9j8R5LXcJPX2JH6Rx1mo8OTKp0urf4BBI+I7iuNUZgAuS6lWcup1AZWAcC+0B+HZtlTDZhS/VRYgddPWIYzEVEnJJJvk7dXy66wPuGnohLLp0UywFFyyQL09nZz6aCFoxRJLkEl2PUnPp/ePcPP/AJJTsokjewbL1t0gCaNdYKgGzYYSe8oS0kP5iVA6WFyWzuDaJYzigVLSS1w4H/El/W5t6RkZOMaoXZQHoQXCh63ggYwquTUXuB3Zx6Oe8Y4m8h1I46pwlNqlErVrkSw6RXip/mAiouc8zC+coEppf6TlqNPWwEV4BRrGbQNI22bfwJIEsKKySFEP22h7h+EqkoXLCgUVKKCf6VF/e5HpCHC44IS6LhvkR3BPEXnrmSvLNIClVbZfB+/rCct8XJHTlxiNcTw0JklT6pT7qAJO+cdxb6gU5LNTf8QoEkdagPSDMaivD8xZKBW25QCQD0dozOPnqVjPMSQxAlB/U29/gRnhXcL+xeN2rJTRUVpUWAVytuRc/wBoDQTUbsS7DMEpcge35wdMklT2JH1B9/0zikIFlEFwQWA/EHJ+Kx7RUMGXCZtnJYJVtrmlh/xphpgDKnFUhSVFV11PZ83Dd3hXwaSlSSUTAoFqh0Dt66aZCFPF+KGSpaZZUgqArYs9Olr/ADHmZsMpzkl37HKSvYXxTh9ExRBBpy6trFmA4b5iS7BSjY7aRp/B0qXicO0yWkBA+s3JcbnaK8dwsIUBKWAkODbMd9+sSvxLt4upIzyqXJdGN4hLKRSc02UXzhPLQXcOz/t4feJ8CiWgLdRCs1Eg69IC4ZLKpbIDjV4vxTTx2JbCJUuhSSpiDdoCxM1PmkpTYjKGOMwSkhP4jlllHDhh80JYvQ4Dd6s42LXdhJpaGPh3ii0SqlAOSwNQuB0i3E8XBJNCavg/3iPBeE0IKJmSiS6c8r5XiybKkpem9I+Lhz/eI5415jlVi5N/OgXEYhVSfIlqcj+ZTUDYsCFZ5g21Yxcrh+LVfziepAL+sV4/FiWgFKwhTGmkFiNBUO8Cf9fWiwmKA2KSfyiheHk4r/YylLaQbiJKSTSorUqXYJSQ7FqgfTKE+Iw0yWAFpUHYh30y9LH3gvDzZqleUgliASAL6u5zZnPrDJaJKABMBWsjmSVFx/Yd4tbrsY5ULeCpmVkgukEul8wzt9odcdxtMkKQpiQ4GobMHbf0gDhtHmkiZQlaQaLqbMMD7XiybOCyqqWwBYEuX94izJ+Zy9hM8/B1XYPgZ06WlMyYklLguGLd2yEbDh/DkzpgnAstKCaGGo7u/pGTw+IocJQ5uDcsRoW1h7wzGTADMTcnJISXI2ibMuMlOC2Hj8T/ANZLRhfFBInlHcnvd+nR+kZgq5T2y+wjV+OU/wDyyR+JAW2TOA49IQ8O4LPxFSZKKiDk4Hs7R68JLimHk02AoXnu2fXQekDFXtp1h/h5E7CTVSp2GqKxSErDgm7EEWPvFkrwXNKXXPwspRyQqaH1saXA2zjea3fQvkjPV2z0+37+I8XNu/pDCT4WxivokKUCSxDMW1BfLrBUjwVjlXOGWEjMlh7Obxjy413Jf2ErZ2HniVIShudRqbZ8viF0/EFVmtHYiYp7ghrQItTwaNbJmaxceoGsVLU7CL8Bgpk9Yly0FSjoPknoN43nhvwWqUSucApVwkC/ciF5M0IdvYLdK2fOzhl/0n2iAtH6Lw3DpAoJliwD2vePnf8Aqz4fkypiZ8hNKV2KQOVJAADN+84TDxcZZFD59wkotWmfPEz1AuFQ/wCAz0T1plTBSSWC0j2cRnWizDLKVAgsRFUopoyMmmfS8L4MSivzJipjksEkpAG/VUNsJw+RhpdMpNiXUcye5hh4ZnifJlzC7EAKOdxY/rDDiUuUAoIAzsNS+8eNPJklPg7/ANCckZtvYj4rjUplAH8b8ozYAly2SbG/QDWEOOQTIw8ws6gkbMSQR2yGsNsXIUZtYT/9aBS7lJzcf02sG6+4HFMVRLQJqFKChZLDPax2Lv3Ha/G1BKCGxqKpFmNHlqCj9JsXIa3+7p+RgHFqCZhSC5ap08wSA+XUntFSsQqYibKYWamtSR/4nJsz3aAsDg6pglrBpAISa06ve1zkDfIjrDuQwccMaWayo3DcqdCXHo+Q6x5x/hRxPMlaagGSAzqLPuAB1MSRLQJaSLkBiolKSGuxFqmyf8o84etz5iVhFNqFpIB3pOj6AkDYwEoqT5LsFxT2uyHCMPMEhABUkrABFTMBmSO9odYozJolpJFEsUPqR13iubjZCAVzDzkOyqlHozesX4SZKISmoEkVBja+/wCkR5475SiLn5nXsLZ3hpKmEouFKCS5yc/nBEnCeQSny2Y3vpG2RgJQQkKYJTonU5B2ud4ynEpJCi5tcnd9IjxeJlkfF9HZcXGJBRdJOw6awAmdSOflfld7io5dH/KC5koiV/UbXDf5OkL8RhhNkqySwNNnc6FXRxFeOovZPFpPZGdi1KmJlymUgc1TkPcgh9CY6Zgzz5BRs5BslrnqWgjwvgSiSVTLFRuRcMBlsz6dOlnWK4dWkKVKdKXd1AZvnzW0PrByk06SdDrfSRjOJJUlIQUlJGpuD0caXB9YjhcLMKQSs3vr+UaLG8MlqUohQpLMlRdIKW/p1sLE6QJhZMyWKUhY/wCLtkIcsjaoNSa9gTC8SCZJKEsspYr1BD5dmiMvDKWXSKmAJI6n/MB4cnJrHNuwHrv6wXwSUEOHAdLi+Z/XOKJeiLaDfpTaLZkhUryChNRosFDMgixb1g2WmdOWTMQU02c8oLl7en3iuTjSZiUKCirfa9rDtE8StSzdS0h8tz0OTxP5nJbRLLJy7QdIShNiUcpORucv36QWrF+W8xRJ8tJ5Ehyr20hN/CUAqASSnq5u7euUCy8eJa5l1KUbtUeXow+/WJmlOVIXFRTuhQmYcbMmzcQtcmzJWUEpAu4PaCODrweFeYMdMUamKUJSAWdnBckbaXiub/qDO8yghJl1XZ7hsi+rxVhOGy5ROJmFATMJpSqWoAF3LWy9BFqbWnofJyl2OsF5OMlqMzHKTLJIopSGbI6kPm9s4Qca8DKTQrDLE+WpTWYkORtmL+kGzPEEmYfLRM8srdJZDJD2GmfWJ+CuDTpGLJU60IDoAUwUVWB2cNl2gHkcbl1X+QYtp/B9J8Oy/KSmWZZSilKUAuSzWI1eLf8AUHiHlcOXQSldIDgsxOd9yIqlcQUA692IcaGFHjN52EmpRzEB2AOnW148tYoPIpb7T2Nx5WtHxSbNcxQVR6oxbLwpUZYSHMw0j/lUzfKY9/oJn1H/AEj4aEyZmIP1TDSn/iM/c/aNnOWJSbJrUN8h+sAcPwSZMlCEAgSwwAzURZzfO33gqeotmHyvva/3j5+WWU8rnXYnI7RQucpJ77ZfEA+J+FqxWFUlIUFu6QQBl3ORgpJJchQLKAA0zN+/6QdLJF1Gw9PQwUE4vlWzI8k7o/P2Kw65a1IWkpUksQdIrEfTP9SOComPiEAiYGrH9QNh2a3tHzeXJJcjTMfv19o9rFk5xsfRvvAnFCmT5d1KMwAAbEF/gP6GNbJmikqIYqJGd3yD1ZKz1u4j5t4U41/DTQoBxkfXX0zj6SigpqStCUkuFZVbuksXya++0S5oJSbrs3insWY3C1KmFaSQwYINw33/ALZZQNMxbrSlSApAb68wWzFxqb9o0CsEgFVXOlrMDrm+b75xSMEhdgg0nWkewaz7Hp79F2Gooz2I4EUgLCf5dRBTykX1HNlp+3iI4CRZIKX3Lj4STdh8xozh5aEgG7f1Fk3vkNf3e8DK4hKBqZRLXZQId8gc3zy3hylYwSy+DKBpW1sy+12OhOY9BBuB4QQCwF7htBkXIv8ApBeEwnmGosm9QLWPRgbjPXaCk4cKuvNT/SzXsM7U5mMc0jNIXjBlIqSbgly5cZNmqxG0TVKcfWSGu7ddKTlBeL4ZWBpy0sDckf7qbe3pBMmQkhLC/VifRg36wLyqgeaApEuYlnmKbIsKcw+4e2sSw8pSktdRAyIGXqXOlyYLmkFQqqpDswUp7MxAP3hxhihKaBylJDqbP9RC3O6tAzlraM9LwijRyqQxcEhh1Ob/AOYJmYQB2uogso/SC+gGZvmYfrnJWCoMWsHy6wBOwhpKwRe9yz7M2kLbS/cUpJ9LYNh8aoJUCm5NyrnJ605BIzsxhfMw4UqpQcOdhUTYOE2937wWkgAslCiRq5a7asMopTPSlwUEZBxkewHpntB3a7HKSJJw8pKuZClHXJIGWdn3sAfSPJ+LvkgDSysvRIEV4fFJmKoSeZiwDEMdTq+dg2e0WAqAAqmEtcsLnrcXjUlHs7kkYufIpWCKrsQGBcjS2rNbpDFNExCiEUhN6i5O/wAwPisGVylUfUHUCDkdW/UQNwbGhVlAuwBSS4UAzk65/eK8kZOPp7Amm1oYYTEU1lwlKs1HW2QJ0/WGmIkSylISsXBpFNi7fk46RnuKoIVSQCmxAvYHSDhPKJaCSop2SkH5IdnP2id4fkS8L+Rhj1BIbkTtdzm7lntAsnCS1TlYhQqXTR+IPcOr6bWFN2zObhqJGJlLCipQlpAzUC99YOk8KkKFacQps+XInf8Ae0DHHCC0jkoR0w3CcJwqWnGWErDsKNxch+WosLs8C8bVh58uhGHWukuf5lLKAuGGsUGTPXMlpUUqYnMkiwLEvFmEmc60rFLHlJs9hpbd/WMlOMVaVtBJqKtdmekcCwZFMxHlrawacXNy31M7AZN6wzwpTh0FMlawl6mZLlwMiq4y/tuPxCZMXMIly6iGFTHXIZ6uzdYK8Ppm4gHzJLBCrn6c0hxSbmxBcdGNhBynceT/AKHrJBQ2lZbKxilMkVlRIcGi7aOWAyGUMF8ZWkKHltYjlIVSchkSCfb9VszgZ8pakgKWBULpcggsl8u5JiUvhCpZSpc0El7CwGXKS99T6dYVJYmuhc5Y3sy+J8NpWoqAm3uTyltyeUMM4K4H4ZKJqCqdKKJcwTABUVZdE9E+0N8XKmhaf/kJKKgVVAOEm4SQD9JpSWLP2h3hMImVUXrcJdJCXWpJJrKtTqeoh0s9LfuY5xroNkzAlIUylEswJpu5yCg92/SF+Kx6kE1ZP9I29bk9bRDHeKEpUEqJu2QOewsc8v28XJn4ecCWDqSmoqSfpZw40YNn0zieDfbidCVv8Qc+IKSkA52pSHPtVnfWPDxVRU1wKtmVncGoP30bXWGEvCSsOgBMtKrgpBZRCsioMksohye8UzeDqUsva40Bd77GxpILXvnaGwab6HKV+wOvHVAIXQqpq6bpSFaWNThuuUA43woial5UpKHBZtAQRc5lL3yt6weOGy/MYNSMmNrOx5sxf4hphJRSTSqqxAJZRc9BYDL22jZycfxOl1owafAs9JbzEOdBVYNuzPp6Q2keFqZKRMrK6tA7ZGpnIYC37aNFiMXiDMKJaAbF1myUnp6N7teF83HK8wgTDXkEikX1d9OzR0Z5JdtAKLLsNhp30JPInlcEksOpHzq3rB8vhQcOslTZ3sHew98zrChfEZoJAMqoZj8yx3iyVjVqBJUhLO4Ky/cAquOw6R0ozYbTYxmYNINRIFnu5y6nXOwiS8MjNgmw2u+b9IARxBJCUBRKswQHBIBs1i2UGSU1FgzuHJpYddT25oGml2ElrsKm4Kr8YTVoLs4zuw9o6aPLUEpUyRqQLelOeesUz8Cp1FWI0uEpU/QCkO+t2iErEqlskgzLOFkMXH4cz3cho5RVLZlJIIWhKnNQYf7gBvsfdntFQnkJYkAPYoe9snz31vA2En1cxpGbuGINxlkT+UXoWuxCUrd/ryFs7xkouOkrBk2ukRnpEpJOaSq5SQcx0uC5+DEJaqlDy1EOLJN/e1vWIfwvMVrU6SACanCb6DRy3tDfB4QSU0gAAknJv2IVOvjYmbVbK5SaUMtrHm6x5MxI0DJZgHNu8ePKqKVlyb216QCcdKlc8wWLAO6ic7MI3i7QtN2WCUEgqSHB6Pl077x5/GOsOAwBKnDn294lK8SSpqmCShugduo0EA8Sw0mYWTOUFFyEhWZ3PTvDFD7HJe4zXOO4ZV7BmfR9ooEgm5+8KMBiphNLhTAgkOCMwAPj3goTilgULfVg7ne8c3XYT2DSSUqtkoXa1lbdrj1hHjMCcPMcLplrBUCA+l7bC/t2jo6PQ7VhIjxMlSLfzGZigvUAXs17iNHgsZhxJCzJWgaJUCHfbd946OhWR0hWVWkL8VMlTXaWyU82zEtfrBCUEISAkW3+9t46OibIIzQqNr2DMNJFUshYYOTs7ZfMef8ASkqd0JJNypCznSEu5yLAf5jo6F8eCtARlTpBEhKklSgjMhIIGZGp1G22u8U4fDCWuYsJIVMCSoAu7OMnuq7O39+joJwST/Yq4Ki9cyYWJ5QMgHybb1LwNNwtQS7i+gcdjZhte0dHRiik1RyhFF8nCy0itaWJsaiVAs9mIvuLadIlKVKJIUyC9gopcu3Vhm0dHRQsafY5wR0/DyZYBCTdyCoKJcAakFk7WYNvFUxCS1SyahSAQFO+4IKvfNo8joLgmFSR5g6FrdC1EpLqSkpAUepBsD8PvDBYChUhISCCM6nbV2sOhuSdhHR0DLS0c+wmVMCRaXekDOw7t9+kQnzQF0pSG/E6gFMc+xy0eOjoX9g2xUvhoLhQcOGSV2d9kt0z6x0jgSEfVsS+fscn9BHR0MSGUEJ4aGsix1LqY/EFT8CE3FFtAGDZ7desdHQHJuxMpU6BpcoFlBmuGIHpYj7ERPEEpKQBm9wCwO2We0ex0Y3YTbPcQoPYsRZgHubP1aB1LSQuuc4BHIyXy3zJuY6OjVpGNlODxMkDlLAM4yvu5eCMWtSvpFzZ1B3f77WjyOjMmkdklpF2Jwn0hTEEgkAG373i3zkOQtRIAyeOjoBJPTRPPdAc3BIWpa5ZUlagyQGYBm1gRPh6wExZKRv+73EdHRzk5X9BvoKPDpaXAc1BmfMNAsrBUrCEgX1Onr6x0dA3cTfoZpkhBpASkZH9+kVTMcgEikHqI8joni3OmzG7P//Z" alt="Nuevo hábitat para osos">
                    <h3><?php echo traducir('noticia1_titulo'); ?></h3>
                    <p><?php echo traducir('noticia1_texto'); ?></p>
                    <p class="date"><strong><?php echo traducir('fecha'); ?>:</strong> 15/10/2023</p>
                </div>
                
                <div class="news-item">
                    <img src="https://img2.rtve.es/i/?w=1600&i=1686905177774.jpg" alt="Taller de conservación">
                    <h3><?php echo traducir('noticia2_titulo'); ?></h3>
                    <p><?php echo traducir('noticia2_texto'); ?></p>
                    <p class="date"><strong><?php echo traducir('fecha'); ?>:</strong> 05/11/2023</p>
                </div>
                
                <div class="news-item">
                    <img src="https://www.hawaiitribune-herald.com/wp-content/uploads/2016/04/3316225_web1_Detroit-Zoo-Penguins_Chri.jpg" alt="Nacimiento de cebra">
                    <h3><?php echo traducir('noticia3_titulo'); ?></h3>
                    <p><?php echo traducir('noticia3_texto'); ?></p>
                    <p class="date"><strong><?php echo traducir('fecha'); ?>:</strong> 01/10/2023</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="contact-info">
            <h2><?php echo traducir('footer_conecta'); ?></h2>
            <div class="social-media">
                <a href="https://www.facebook.com/zoologiconatural" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/zoologiconatural" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
                </a>
                <a href="https://twitter.com/zoologiconatural" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter">
                </a>
                <a href="mailto:zootechsystems@gmail.com">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email">
                </a>
            </div>
        </div>
        <p>&copy; 2025 Zoológico Natural de Mataró. <?php echo traducir('footer_derechos'); ?></p>
    </footer>
</body>
</html>