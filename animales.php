<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Animales - Zoológico Natural',
        'titulo_header' => 'Nuestros Animales - Zoológico Natural de Mataró',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_entradas' => 'Entradas y Precios',
        'nav_sobrenosotros' => 'Sobre nosotros',
        
        // Animales
        'leon_titulo' => 'León Africano',
        'leon_desc' => 'El majestuoso rey de la selva. Nuestros leones africanos son una de las principales atracciones del zoológico, con su imponente melena y su poderoso rugido.',
        
        'elefante_titulo' => 'Elefante Asiático',
        'elefante_desc' => 'Los gentiles gigantes de Asia. Nuestros elefantes son cuidados con especial atención, proporcionándoles un hábitat que replica su entorno natural.',
        
        'tigre_titulo' => 'Tigre de Bengala',
        'tigre_desc' => 'Uno de los felinos más impresionantes del mundo. Nuestros tigres de Bengala son parte de un programa de conservación internacional.',
        
        'jirafa_titulo' => 'Jirafa Masai',
        'jirafa_desc' => 'Los animales más altos de la Tierra. Nuestras jirafas Masai pueden ser alimentadas por los visitantes bajo supervisión de nuestros expertos.',
        
        'panda_titulo' => 'Oso Panda',
        'panda_desc' => 'Los adorables osos pandas son una de nuestras especies más queridas. Forman parte de un programa de reproducción en cautividad.',
        
        'rinoceronte_titulo' => 'Rinoceronte Blanco',
        'rinoceronte_desc' => 'Uno de los animales más grandes del planeta. Nuestros rinocerontes blancos son parte de esfuerzos de conservación contra la caza furtiva.',
        
        'pinguino_titulo' => 'Pingüino de Humboldt',
        'pinguino_desc' => 'Estas encantadoras aves no voladoras prosperan en nuestro hábitat especialmente diseñado que replica las costas de Perú y Chile.',
        
        'canguro_titulo' => 'Canguro Rojo',
        'canguro_desc' => 'El marsupial más grande del mundo. Nuestros canguros rojos disfrutan de un amplio espacio para saltar y explorar.',
        
        'serpiente_titulo' => 'Pitón Real',
        'serpiente_desc' => 'Una de las serpientes más impresionantes por su tamaño y belleza. Alojada en nuestro terrario tropical climatizado.',
        
        'flamenco_titulo' => 'Flamenco Caribeño',
        'flamenco_desc' => 'Con su característico color rosa, estas aves son una de las exhibiciones más coloridas de nuestro zoológico.',
        
        'leopardo_titulo' => 'Leopardo de las Nieves',
        'leopardo_desc' => 'Un felino raro y hermoso, parte de nuestro programa de conservación de especies en peligro crítico.',
        
        'oso_titulo' => 'Oso Grizzly',
        'oso_desc' => 'Estos poderosos osos son una de las atracciones más populares, especialmente cuando pescan salmones en su hábitat acuático.',
        
        'gorila_titulo' => 'Gorila de Montaña',
        'gorila_desc' => 'Nuestros gorilas son parte de un programa internacional de conservación de esta especie en peligro de extinción.',
        
        'ornitorrinco_titulo' => 'Ornitorrinco',
        'ornitorrinco_desc' => 'Uno de los mamíferos más extraños del mundo, con características de reptil, ave y mamífero. Una verdadera rareza evolutiva.',
        
        'aguila_titulo' => 'Águila Real',
        'aguila_desc' => 'El rey de las aves rapaces. Nuestras águilas reales participan en exhibiciones de vuelo educativas.',
        
        // Footer
        'footer_conecta' => 'Conéctate con Nosotros',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Animals - Zoològic Natural',
        'titulo_header' => 'Els Nostres Animals - Zoològic Natural de Mataró',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_entradas' => 'Entrades i Preus',
        'nav_sobrenosotros' => 'Sobre nosaltres',
        
        // Animals
        'leon_titulo' => 'Lleó Africà',
        'leon_desc' => 'El majestuós rei de la jungla. Els nostres lleons africans són una de les principals atraccions del zoològic, amb la seva imponent melena i el seu poderós rugit.',
        
        'elefante_titulo' => 'Elefant Asiàtic',
        'elefante_desc' => 'Els gegants suaus d\'Àsia. Els nostres elefants són cuidades amb especial atenció, proporcionant-los un hàbitat que replica el seu entorn natural.',
        
        'tigre_titulo' => 'Tigre de Bengala',
        'tigre_desc' => 'Un dels felins més impressionants del món. Els nostres tigres de Bengala formen part d\'un programa de conservació internacional.',
        
        'jirafa_titulo' => 'Girafa Masai',
        'jirafa_desc' => 'Els animals més alts de la Terra. Les nostres girafes Masai poden ser alimentades pels visitants sota supervisió dels nostres experts.',
        
        'panda_titulo' => 'Ós Panda',
        'panda_desc' => 'Els adorables óssos pandas són una de les nostres espècies més estimades. Formen part d\'un programa de reproducció en captivitat.',
        
        'rinoceronte_titulo' => 'Rinoceront Blanc',
        'rinoceronte_desc' => 'Un dels animals més grans del planeta. Els nostres rinoceronts blancs formen part d\'esforços de conservació contra la caça furtiva.',
        
        'pinguino_titulo' => 'Pingüí de Humboldt',
        'pinguino_desc' => 'Aquestes encantadores aus no voladores prosperen al nostre hàbitat especialment dissenyat que replica les costes de Perú i Xile.',
        
        'canguro_titulo' => 'Cangur Roig',
        'canguro_desc' => 'El marsupial més gran del món. Els nostres cangurs rojos gaudeixen d\'un ampli espai per saltar i explorar.',
        
        'serpiente_titulo' => 'Pitó Reial',
        'serpiente_desc' => 'Una de les serps més impressionants per la seva mida i bellesa. Allotjada al nostre terrari tropical climatitzat.',
        
        'flamenco_titulo' => 'Flamenc del Carib',
        'flamenco_desc' => 'Amb el seu característic color rosa, aquestes aus són una de les exhibicions més colorides del nostre zoològic.',
        
        'leopardo_titulo' => 'Lleopard de les Neus',
        'leopardo_desc' => 'Un felí rar i bell, part del nostre programa de conservació d\'espècies en perill crític.',
        
        'oso_titulo' => 'Ós Grizzly',
        'oso_desc' => 'Aquests poderosos óssos són una de les atraccions més populars, especialment quan pesquen salmons al seu hàbitat aquàtic.',
        
        'gorila_titulo' => 'Goril·la de Muntanya',
        'gorila_desc' => 'Els nostres goril·les formen part d\'un programa internacional de conservació d\'aquesta espècie en perill d\'extinció.',
        
        'ornitorrinco_titulo' => 'Ornitorrinc',
        'ornitorrinco_desc' => 'Un dels mamífers més estranys del món, amb característiques de rèptil, au i mamífer. Una veritable raresa evolutiva.',
        
        'aguila_titulo' => 'Àliga Reial',
        'aguila_desc' => 'El rei de les aus rapinyaires. Les nostres àligues reials participen en exhibicions de vol educatives.',
        
        // Footer
        'footer_conecta' => 'Connecta amb Nosaltres',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'Animals - Natural Zoo',
        'titulo_header' => 'Our Animals - Natural Zoo of Mataró',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_entradas' => 'Tickets and Prices',
        'nav_sobrenosotros' => 'About Us',
        
        // Animals
        'leon_titulo' => 'African Lion',
        'leon_desc' => 'The majestic king of the jungle. Our African lions are one of the main attractions of the zoo, with their imposing mane and powerful roar.',
        
        'elefante_titulo' => 'Asian Elephant',
        'elefante_desc' => 'The gentle giants of Asia. Our elephants are cared for with special attention, providing them with a habitat that replicates their natural environment.',
        
        'tigre_titulo' => 'Bengal Tiger',
        'tigre_desc' => 'One of the most impressive felines in the world. Our Bengal tigers are part of an international conservation program.',
        
        'jirafa_titulo' => 'Masai Giraffe',
        'jirafa_desc' => 'The tallest animals on Earth. Our Masai giraffes can be fed by visitors under the supervision of our experts.',
        
        'panda_titulo' => 'Panda Bear',
        'panda_desc' => 'The adorable panda bears are one of our most beloved species. They are part of a captive breeding program.',
        
        'rinoceronte_titulo' => 'White Rhinoceros',
        'rinoceronte_desc' => 'One of the largest animals on the planet. Our white rhinos are part of conservation efforts against poaching.',
        
        'pinguino_titulo' => 'Humboldt Penguin',
        'pinguino_desc' => 'These charming flightless birds thrive in our specially designed habitat that replicates the coasts of Peru and Chile.',
        
        'canguro_titulo' => 'Red Kangaroo',
        'canguro_desc' => 'The largest marsupial in the world. Our red kangaroos enjoy ample space to jump and explore.',
        
        'serpiente_titulo' => 'Ball Python',
        'serpiente_desc' => 'One of the most impressive snakes for its size and beauty. Housed in our climate-controlled tropical terrarium.',
        
        'flamenco_titulo' => 'Caribbean Flamingo',
        'flamenco_desc' => 'With their characteristic pink color, these birds are one of the most colorful exhibits in our zoo.',
        
        'leopardo_titulo' => 'Snow Leopard',
        'leopardo_desc' => 'A rare and beautiful feline, part of our critically endangered species conservation program.',
        
        'oso_titulo' => 'Grizzly Bear',
        'oso_desc' => 'These powerful bears are one of the most popular attractions, especially when fishing for salmon in their aquatic habitat.',
        
        'gorila_titulo' => 'Mountain Gorilla',
        'gorila_desc' => 'Our gorillas are part of an international conservation program for this endangered species.',
        
        'ornitorrinco_titulo' => 'Platypus',
        'ornitorrinco_desc' => 'One of the strangest mammals in the world, with characteristics of reptiles, birds and mammals. A true evolutionary oddity.',
        
        'aguila_titulo' => 'Golden Eagle',
        'aguila_desc' => 'The king of birds of prey. Our golden eagles participate in educational flight displays.',
        
        // Footer
        'footer_conecta' => 'Connect with Us',
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
            position: relative;
        }
        
        
        header h1 {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
            font-size: 2rem;
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
        
        /* CONTENEDOR DE ANIMALES */
        .animales-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 30px 20px;
            max-width: 1400px;
            margin: 20px auto;
            width: 100%;
        }
        
        /* TARJETAS DE ANIMALES */
        .animal-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 15px;
            width: calc(33.333% - 30px);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }
        
        .animal-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .animal-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .animal-card:hover img {
            transform: scale(1.05);
        }
        
        .animal-info {
            padding: 25px;
        }
        
        .animal-info h2 {
            color: #2E7D32;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .animal-info h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: #4CAF50;
            transition: width 0.3s;
        }
        
        .animal-card:hover .animal-info h2::after {
            width: 100px;
        }
        
        .animal-info p {
            margin-bottom: 0;
            color: #555;
            font-size: 15px;
            line-height: 1.7;
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
            display: inline-block;
            margin: 0 10px;
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
            .animal-card {
                width: calc(50% - 30px);
            }
        }
        
        @media (max-width: 992px) {
            header {
                padding: 80px 20px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            nav a {
                margin: 0 15px;
                font-size: 15px;
            }
            
            .animal-info {
                padding: 20px;
            }
            
            .social-media img {
                width: 36px;
                height: 36px;
            }
        }
        
        @media (max-width: 768px) {
            header {
                padding: 70px 15px;
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
            
            .animal-card {
                width: 100%;
                max-width: 500px;
                margin: 10px 0;
            }
            
            .social-media {
                flex-wrap: wrap;
            }
            
            .social-media a {
                margin: 5px;
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
            
            .animal-info h2 {
                font-size: 1.3rem;
            }
            
            .animal-info p {
                font-size: 14px;
            }
            
            footer h2 {
                font-size: 1.2rem;
            }
            
            .social-media img {
                width: 32px;
                height: 32px;
                padding: 6px;
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
            
            .animal-info h2 {
                font-size: 1.2rem;
            }
            
            footer h2 {
                font-size: 1.1rem;
            }
            
            .social-media img {
                width: 28px;
                height: 28px;
                padding: 5px;
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
        <a href="sobrenosotros.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_sobrenosotros'); ?></a>
    </nav>
    
    <div class="animales-container">
        <!-- Leones -->
        <div class="animal-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/77/002_The_lion_king_Snyggve_in_the_Serengeti_National_Park_Photo_by_Giles_Laurent.jpg" alt="<?php echo traducir('leon_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('leon_titulo'); ?></h2>
                <p><?php echo traducir('leon_desc'); ?></p>
            </div>
        </div>
        
        <!-- Elefantes -->
        <div class="animal-card">
            <img src="https://files.worldwildlife.org/wwfcmsprod/images/African_Elephant_Walking/story_carousel/3arzfzjsw0_Medium_WW1113482.jpg" alt="<?php echo traducir('elefante_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('elefante_titulo'); ?></h2>
                <p><?php echo traducir('elefante_desc'); ?></p>
            </div>
        </div>
        
        <!-- Tigres -->
        <div class="animal-card">
            <img src="https://es.aap.eu/wp-content/uploads/sites/6/2023/11/tigre-como-mascota.jpg" alt="<?php echo traducir('tigre_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('tigre_titulo'); ?></h2>
                <p><?php echo traducir('tigre_desc'); ?></p>
            </div>
        </div>
        
        <!-- Jirafas -->
        <div class="animal-card">
            <img src="https://origens.org/wp-content/uploads/2019/05/shutterstock_1153601284-jirafa-web.jpg" alt="<?php echo traducir('jirafa_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('jirafa_titulo'); ?></h2>
                <p><?php echo traducir('jirafa_desc'); ?></p>
            </div>
        </div>
        
        <!-- Osos Panda -->
        <div class="animal-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Grosser_Panda.JPG/640px-Grosser_Panda.JPG" alt="<?php echo traducir('panda_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('panda_titulo'); ?></h2>
                <p><?php echo traducir('panda_desc'); ?></p>
            </div>
        </div>
        
        <!-- Rinocerontes -->
        <div class="animal-card">
            <img src="https://static.nationalgeographicla.com/files/styles/image_3200/public/nationalgeographic2791108.webp?w=1600&h=900" alt="<?php echo traducir('rinoceronte_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('rinoceronte_titulo'); ?></h2>
                <p><?php echo traducir('rinoceronte_desc'); ?></p>
            </div>
        </div>
        
        <!-- Pingüinos -->
        <div class="animal-card">
            <img src="https://storage.googleapis.com/oceanwide_web/media-dynamic/cache/widen_1600/media/default/0001/05/30627f237982b80399f5d2db0c8daeeea38a5950.jpeg" alt="<?php echo traducir('pinguino_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('pinguino_titulo'); ?></h2>
                <p><?php echo traducir('pinguino_desc'); ?></p>
            </div>
        </div>
        
        <!-- Canguros -->
        <div class="animal-card">
            <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/2342.600x450.webp?w=760&h=570" alt="<?php echo traducir('canguro_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('canguro_titulo'); ?></h2>
                <p><?php echo traducir('canguro_desc'); ?></p>
            </div>
        </div>
        
        <!-- Serpientes -->
        <div class="animal-card">
            <img src="https://static.inaturalist.org/photos/253683723/large.jpeg" alt="<?php echo traducir('serpiente_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('serpiente_titulo'); ?></h2>
                <p><?php echo traducir('serpiente_desc'); ?></p>
            </div>
        </div>
        
        <!-- Flamencos -->
        <div class="animal-card">
            <img src="https://guiadeavesbahiadesanantonio.com.ar/wp-content/uploads/2024/03/Flamenco-Austral-adulto.jpg" alt="<?php echo traducir('flamenco_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('flamenco_titulo'); ?></h2>
                <p><?php echo traducir('flamenco_desc'); ?></p>
            </div>
        </div>
        
        <!-- Leopardo -->
        <div class="animal-card">
            <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/2354.600x450.jpg?w=1600" alt="<?php echo traducir('leopardo_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('leopardo_titulo'); ?></h2>
                <p><?php echo traducir('leopardo_desc'); ?></p>
            </div>
        </div>
        
        <!-- Osos Grizzly -->
        <div class="animal-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Brown_bear_%28Ursus_arctos%29%2C_Viiksimo%2C_Kainuu_region%2C_Finland%2C_16_June_2018_%2843094873292%29.jpg" alt="<?php echo traducir('oso_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('oso_titulo'); ?></h2>
                <p><?php echo traducir('oso_desc'); ?></p>
            </div>
        </div>
        
        <!-- Gorilas -->
        <div class="animal-card">
            <img src="https://gorillas-world.com/wp-content/uploads/datos_gorilas.jpg" alt="<?php echo traducir('gorila_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('gorila_titulo'); ?></h2>
                <p><?php echo traducir('gorila_desc'); ?></p>
            </div>
        </div>
        
        <!-- Ornitorrinco -->
        <div class="animal-card">
            <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/01-platypus-decline-20180430_3dg1547.jpg?w=1600" alt="<?php echo traducir('ornitorrinco_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('ornitorrinco_titulo'); ?></h2>
                <p><?php echo traducir('ornitorrinco_desc'); ?></p>
            </div>
        </div>
        
        <!-- Águilas -->
        <div class="animal-card">
            <img src="https://content.nationalgeographic.com.es/medio/2024/06/18/planeo-de-un-aguila-calva_7b6b9957_240618121151_1280x854.jpg" alt="<?php echo traducir('aguila_titulo'); ?>">
            <div class="animal-info">
                <h2><?php echo traducir('aguila_titulo'); ?></h2>
                <p><?php echo traducir('aguila_desc'); ?></p>
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

