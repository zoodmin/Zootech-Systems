<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Sobre Nosotros - Zoológico Natural',
        'titulo_header' => 'Sobre Nosotros',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_entradas' => 'Entradas y Precios',
        'titulo_mision' => 'Nuestra Misión',
        'texto_mision1' => 'En el Zoológico Natural de Mataró, trabajamos con pasión y compromiso por la conservación de la vida silvestre, promoviendo el respeto y la armonía entre los seres humanos y la naturaleza.',
        'texto_mision2' => 'Nos oponemos firmemente al maltrato y al tráfico de animales, luchando contra estas prácticas a través de programas de rescate, rehabilitación y concienciación.',
        'texto_mision3' => 'Fomentamos la educación ambiental con experiencias interactivas y actividades didácticas que inspiran a nuestros visitantes a valorar y proteger el mundo natural.',
        'texto_mision4' => 'En el Zoológico Natural de Mataró, creemos que cada acción cuenta y que juntos podemos marcar la diferencia en la protección de nuestro planeta y sus habitantes.',
        'titulo_historia' => 'Nuestra Historia',
        'texto_historia1' => 'Fundado en 1926, el Zoológico Natural de Mataró nació como un pequeño refugio dedicado al rescate y cuidado de animales en situación de vulnerabilidad.',
        'texto_historia2' => 'A lo largo de los años, hemos trabajado con organizaciones de conservación para proteger especies en peligro de extinción y restaurar hábitats naturales.',
        'texto_historia3' => 'Hoy, seguimos creciendo como un referente en conservación y educación ambiental, ofreciendo un espacio donde la naturaleza y la humanidad pueden coexistir en equilibrio.',
        'titulo_mapa' => 'Mapa del Zoológico',
        'mapa_descripcion' => 'Explora nuestro zoológico y descubre todas las áreas y hábitats que tenemos para ofrecer.',
        'descargar_mapa' => 'Descargar Mapa',
        'footer_conecta' => 'Conéctate con Nosotros',
        'footer_siguenos' => '¡Síguenos en nuestras redes sociales y mantente al tanto de nuestras novedades!',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Sobre Nosaltres - Zoològic Natural',
        'titulo_header' => 'Sobre Nosaltres',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_entradas' => 'Entrades i Preus',
        'titulo_mision' => 'La Nostra Missió',
        'texto_mision1' => 'Al Zoològic Natural de Mataró, treballem amb passió i compromís per la conservació de la vida salvatge, promovent el respecte i l\'harmonia entre els éssers humans i la natura.',
        'texto_mision2' => 'Ens oposem fermament al maltractament i al tràfic d\'animals, lluitant contra aquestes pràctiques a través de programes de rescat, rehabilitació i conscienciació.',
        'texto_mision3' => 'Fomentem l\'educació ambiental amb experiències interactives i activitats didàctiques que inspiren als nostres visitants a valorar i protegir el món natural.',
        'texto_mision4' => 'Al Zoològic Natural de Mataró, creiem que cada acció compta i que junts podem marcar la diferència en la protecció del nostre planeta i els seus habitants.',
        'titulo_historia' => 'La Nostra Història',
        'texto_historia1' => 'Fundat el 1926, el Zoològic Natural de Mataró va néixer com un petit refugi dedicat al rescat i cura d\'animals en situació de vulnerabilitat.',
        'texto_historia2' => 'Al llarg dels anys, hem treballat amb organitzacions de conservació per protegir espècies en perill d\'extinció i restaurar hàbitats naturals.',
        'texto_historia3' => 'Avui, seguim creixent com a referent en conservació i educació ambiental, oferint un espai on la natura i la humanitat poden coexistir en equilibri.',
        'titulo_mapa' => 'Mapa del Zoològic',
        'mapa_descripcion' => 'Explora el nostre zoològic i descobreix totes les àrees i hàbitats que tenim per oferir.',
        'descargar_mapa' => 'Descarregar Mapa',
        'footer_conecta' => 'Connecta amb Nosaltres',
        'footer_siguenos' => 'Segueix-nos a les nostres xarxes socials i mantingues-te al dia de les nostres novetats!',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'About Us - Natural Zoo',
        'titulo_header' => 'About Us',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_entradas' => 'Tickets and Prices',
        'titulo_mision' => 'Our Mission',
        'texto_mision1' => 'At the Natural Zoo of Mataró, we work with passion and commitment for wildlife conservation, promoting respect and harmony between humans and nature.',
        'texto_mision2' => 'We strongly oppose animal abuse and trafficking, fighting against these practices through rescue, rehabilitation and awareness programs.',
        'texto_mision3' => 'We promote environmental education with interactive experiences and educational activities that inspire our visitors to value and protect the natural world.',
        'texto_mision4' => 'At the Natural Zoo of Mataró, we believe that every action counts and that together we can make a difference in protecting our planet and its inhabitants.',
        'titulo_historia' => 'Our History',
        'texto_historia1' => 'Founded in 1926, the Natural Zoo of Mataró began as a small refuge dedicated to rescuing and caring for animals in vulnerable situations.',
        'texto_historia2' => 'Over the years, we have worked with conservation organizations to protect endangered species and restore natural habitats.',
        'texto_historia3' => 'Today, we continue to grow as a benchmark in conservation and environmental education, offering a space where nature and humanity can coexist in balance.',
        'titulo_mapa' => 'Zoo Map',
        'mapa_descripcion' => 'Explore our zoo and discover all the areas and habitats we have to offer.',
        'descargar_mapa' => 'Download Map',
        'footer_conecta' => 'Connect with Us',
        'footer_siguenos' => 'Follow us on our social networks and stay up to date with our news!',
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
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo traducir('titulo_pagina'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            padding: 100px 20px 60px;
            margin-top: 44px;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            position: relative;
        }
        
        header h1 {
            font-size: 2.2rem;
            max-width: 900px;
            margin: 0 auto;
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
        
        /* CONTENIDO PRINCIPAL */
        .container {
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
            max-width: 1200px;
            margin: 20px auto;
            width: 100%;
            flex: 1;
        }
        
        .section {
            background-color: white;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        
        .section-content {
            flex: 1;
            padding-right: 30px;
        }
        
        .section h2 {
            color: #2E7D32;
            margin-bottom: 20px;
            font-size: 1.8rem;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }
        
        .section p {
            margin-bottom: 15px;
        }
        
        .section img {
            width: 400px;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        /* MAPA DEL ZOOLÓGICO - SECCIÓN MEJORADA */
        .map-container {
            background-color: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 40px auto;
            width: 90%;
            max-width: 1000px;
            border: 2px solid #2E7D32;
            position: relative;
            overflow: hidden;
        }
        
        .map-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #1B5E20, #4CAF50, #1B5E20);
        }
        
        .map-container h2 {
            color: #2E7D32;
            margin-bottom: 25px;
            font-size: 2rem;
            padding-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .map-container h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            bottom: 0;
            left: 25%;
            background-color: #4CAF50;
            border-radius: 3px;
        }
        
        .map-container img {
            width: 90%;
            max-width: 900px;
            height: auto;
            border-radius: 10px;
            margin: 20px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
            border: 1px solid #ddd;
        }
        
        .map-container img:hover {
            transform: scale(1.02);
        }
        
        .map-caption {
            margin-top: 15px;
            font-style: italic;
            color: #666;
            font-size: 0.9rem;
        }
        
        .download-btn {
            display: inline-block;
            background-color: #2E7D32;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .download-btn:hover {
            background-color: #1B5E20;
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        /* FOOTER */
        footer {
            text-align: center;
            padding: 25px;
            background-color: #2E7D32;
            color: white;
            margin-top: auto;
        }
        
        footer h2 {
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
                width: 350px;
            }
            
            .map-container img {
                width: 85%;
            }
        }
        
        @media (max-width: 992px) {
            header {
                padding: 90px 20px 50px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            nav a {
                margin: 0 15px;
                font-size: 15px;
            }
            
            .section {
                padding: 25px;
            }
            
            .section img {
                width: 300px;
            }
            
            .section-content {
                padding-right: 20px;
            }
            
            .map-container h2 {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 768px) {
            header {
                padding: 80px 15px 40px;
            }
            
            header h1 {
                font-size: 1.5rem;
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
            
            .section {
                flex-direction: column;
                padding: 20px;
            }
            
            .section-content {
                padding-right: 0;
                margin-bottom: 20px;
            }
            
            .section img {
                width: 100%;
                order: 2;
            }
            
            .map-container {
                padding: 30px 20px;
                width: 95%;
            }
            
            .map-container h2 {
                font-size: 1.6rem;
            }
            
            .map-container img {
                width: 95%;
            }
        }
        
        @media (max-width: 576px) {
            header {
                padding: 70px 10px 30px;
            }
            
            header h1 {
                font-size: 1.3rem;
            }
            
            .language-selector span {
                display: block;
                margin-bottom: 8px;
                margin-right: 0;
            }
            
            .section h2 {
                font-size: 1.4rem;
            }
            
            .section {
                padding: 15px;
            }
            
            .map-container {
                padding: 25px 15px;
            }
            
            .map-container h2 {
                font-size: 1.4rem;
                margin-bottom: 15px;
            }
            
            .map-container img {
                width: 100%;
            }
            
            .social-media {
                flex-direction: column;
                align-items: center;
            }
            
            .social-media a {
                margin: 5px 0;
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
            
            .section h2, .map-container h2 {
                font-size: 1.2rem;
            }
            
            footer h2 {
                font-size: 1.2rem;
            }
            
            footer p {
                font-size: 12px;
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
    </header>
    
    <nav>
        <a href="home.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_inicio'); ?></a>
        <a href="animales.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_animales'); ?></a>
        <a href="servicios.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_servicios'); ?></a>
        <a href="noticias.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_noticias'); ?></a>
        <a href="entradas.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_entradas'); ?></a>
    </nav>
    
    <div class="container">
        <!-- Sección Misión -->
        <div class="section">
            <div class="section-content">
                <h2><?php echo traducir('titulo_mision'); ?></h2>
                <p><?php echo traducir('texto_mision1'); ?></p>
                <p><?php echo traducir('texto_mision2'); ?></p>
                <p><?php echo traducir('texto_mision3'); ?></p>
                <p><?php echo traducir('texto_mision4'); ?></p>
            </div>
            <img src="https://media.istockphoto.com/id/498310130/es/foto/mono.jpg?s=612x612&w=0&k=20&c=n636poyW66I7MsKgPIMAytxpxEFvbJb-gj7K7DPyjBU=" alt="<?php echo traducir('titulo_mision'); ?>">
        </div>
        
        <!-- Sección Historia -->
        <div class="section">
            <div class="section-content">
                <h2><?php echo traducir('titulo_historia'); ?></h2>
                <p><?php echo traducir('texto_historia1'); ?></p>
                <p><?php echo traducir('texto_historia2'); ?></p>
                <p><?php echo traducir('texto_historia3'); ?></p>
            </div>
            <img src="https://zoobarcelona.cat/sites/default/files/paragraphs/description_image_right/2016-12/1892.jpg" alt="<?php echo traducir('titulo_historia'); ?>">
        </div>
        
        <!-- Mapa del Zoológico - Sección Mejorada -->
        <div class="map-container">
            <h2><?php echo traducir('titulo_mapa'); ?></h2>
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/9b/6f/5d/mapa-zoo.jpg?w=1200&h=-1&s=1" alt="<?php echo traducir('titulo_mapa'); ?>">
            <p class="map-caption"><?php echo traducir('mapa_descripcion'); ?></p>
            <a href="mapa-zoo.pdf" class="download-btn" download>
                <i class="fas fa-download"></i> <?php echo traducir('descargar_mapa'); ?>
            </a>
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