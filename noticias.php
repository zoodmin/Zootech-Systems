<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Noticias - Zoológico Natural',
        'titulo_header' => 'Noticias del Zoológico Natural de Mataró',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_entradas' => 'Entradas y Precios',
        'nav_sobrenosotros' => 'Sobre nosotros',
        'titulo_noticias' => 'Últimas Noticias',
        'noticia1_titulo' => '¡Nace un nuevo cachorro de león!',
        'noticia1_texto' => 'Estamos emocionados de anunciar el nacimiento de un adorable cachorro de león en nuestro zoológico. Este evento es un gran paso para la conservación de la especie.',
        'noticia2_titulo' => 'Evento de conservación de tortugas marinas',
        'noticia2_texto' => 'Únete a nosotros para un evento especial dedicado a la conservación de las tortugas marinas. Habrá actividades educativas y charlas de expertos.',
        'noticia3_titulo' => 'Mejoras en el hábitat de los pingüinos',
        'noticia3_texto' => 'Hemos realizado importantes mejoras en el hábitat de nuestros pingüinos para asegurar su bienestar y comodidad.',
        'noticia4_titulo' => 'Celebramos el Día Mundial del Elefante',
        'noticia4_texto' => 'Celebraremos el Día Mundial del Elefante con actividades educativas y charlas sobre la conservación de esta majestuosa especie.',
        'noticia5_titulo' => 'Visita a nuestros nuevos koalas',
        'noticia5_texto' => 'Estamos encantados de presentar a nuestros nuevos koalas, que han llegado recientemente al zoológico.',
        'noticia6_titulo' => 'Charla sobre la conservación de ballenas',
        'noticia6_texto' => 'Organizaremos una charla sobre la conservación de ballenas, donde expertos compartirán información valiosa.',
        'noticia7_titulo' => 'Conservación de tigres en peligro',
        'noticia7_texto' => 'Estamos trabajando en un nuevo programa de conservación para proteger a los tigres en peligro de extinción.',
        'noticia8_titulo' => 'Exposición de aves exóticas',
        'noticia8_texto' => 'Ven a disfrutar de nuestra nueva exposición de aves exóticas, donde podrás ver especies de todo el mundo.',
        'noticia9_titulo' => 'Iniciativa de conservación de reptiles',
        'noticia9_texto' => 'Lanzamos una nueva iniciativa para la conservación de reptiles en peligro. Aprende cómo proteger estas especies.',
        'fecha' => 'Fecha',
        'footer_conecta' => 'Conéctate con Nosotros',
        'footer_siguenos' => '¡Síguenos en nuestras redes sociales y mantente al tanto de nuestras novedades!',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Notícies - Zoològic Natural',
        'titulo_header' => 'Notícies del Zoològic Natural de Mataró',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_entradas' => 'Entrades i Preus',
        'nav_sobrenosotros' => 'Sobre nosaltres',
        'titulo_noticias' => 'Últimes Notícies',
        'noticia1_titulo' => 'Neix un nou cadell de lleó!',
        'noticia1_texto' => 'Estem emocionats d\'anunciar el naixement d\'un adorable cadell de lleó al nostre zoològic. Aquest esdeveniment és un gran pas per a la conservació de l\'espècie.',
        'noticia2_titulo' => 'Esdeveniment de conservació de tortugues marines',
        'noticia2_texto' => 'Uneix-te a nosaltres per a un esdeveniment especial dedicat a la conservació de les tortugues marines. Hi haurà activitats educatives i xerrades d\'experts.',
        'noticia3_titulo' => 'Millores en l\'hàbitat dels pingüins',
        'noticia3_texto' => 'Hem realitzat millores importants en l\'hàbitat dels nostres pingüins per assegurar el seu benestar i comoditat.',
        'noticia4_titulo' => 'Celebrem el Dia Mundial de l\'Elefant',
        'noticia4_texto' => 'Celebrarem el Dia Mundial de l\'Elefant amb activitats educatives i xerrades sobre la conservació d\'aquesta majestuosa espècie.',
        'noticia5_titulo' => 'Visita als nostres nous koales',
        'noticia5_texto' => 'Estem encantats de presentar els nostres nous koales, que han arribat recentment al zoològic.',
        'noticia6_titulo' => 'Xerrada sobre la conservació de balenes',
        'noticia6_texto' => 'Organitzarem una xerrada sobre la conservació de balenes, on experts compartiran informació valuosa.',
        'noticia7_titulo' => 'Conservació de tigres en perill',
        'noticia7_texto' => 'Estem treballant en un nou programa de conservació per protegir els tigres en perill d\'extinció.',
        'noticia8_titulo' => 'Exposició d\'aus exòtiques',
        'noticia8_texto' => 'Vine a gaudir de la nostra nova exposició d\'aus exòtiques, on podràs veure espècies de tot el món.',
        'noticia9_titulo' => 'Iniciativa de conservació de rèptils',
        'noticia9_texto' => 'Llancem una nova iniciativa per a la conservació de rèptils en perill. Aprèn com protegir aquestes espècies.',
        'fecha' => 'Data',
        'footer_conecta' => 'Connecta amb Nosaltres',
        'footer_siguenos' => 'Segueix-nos a les nostres xarxes socials i mantingues-te al dia de les nostres novetats!',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'News - Natural Zoo',
        'titulo_header' => 'News from Natural Zoo of Mataró',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_entradas' => 'Tickets and Prices',
        'nav_sobrenosotros' => 'About us',
        'titulo_noticias' => 'Latest News',
        'noticia1_titulo' => 'New lion cub born!',
        'noticia1_texto' => 'We are excited to announce the birth of an adorable lion cub at our zoo. This event is a big step for species conservation.',
        'noticia2_titulo' => 'Sea turtle conservation event',
        'noticia2_texto' => 'Join us for a special event dedicated to sea turtle conservation. There will be educational activities and expert talks.',
        'noticia3_titulo' => 'Penguin habitat improvements',
        'noticia3_texto' => 'We have made significant improvements to our penguins\' habitat to ensure their well-being and comfort.',
        'noticia4_titulo' => 'Celebrating World Elephant Day',
        'noticia4_texto' => 'We will celebrate World Elephant Day with educational activities and talks about the conservation of this majestic species.',
        'noticia5_titulo' => 'Visit our new koalas',
        'noticia5_texto' => 'We are delighted to introduce our new koalas, which have recently arrived at the zoo.',
        'noticia6_titulo' => 'Whale conservation talk',
        'noticia6_texto' => 'We will organize a talk about whale conservation, where experts will share valuable information.',
        'noticia7_titulo' => 'Endangered tiger conservation',
        'noticia7_texto' => 'We are working on a new conservation program to protect endangered tigers.',
        'noticia8_titulo' => 'Exotic birds exhibition',
        'noticia8_texto' => 'Come enjoy our new exotic birds exhibition, where you can see species from around the world.',
        'noticia9_titulo' => 'Reptile conservation initiative',
        'noticia9_texto' => 'We are launching a new initiative for the conservation of endangered reptiles. Learn how to protect these species.',
        'fecha' => 'Date',
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
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .section h2 {
            color: #2E7D32;
            margin-bottom: 20px;
            font-size: 1.8rem;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }
        
        /* CONTENEDOR DE NOTICIAS */
        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }
        
        .news-item {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .news-item h3 {
            margin: 0 0 10px 0;
            color: #2E7D32;
            font-size: 1.2rem;
        }
        
        .news-item p {
            margin: 5px 0;
            flex: 1;
        }
        
        .news-item p strong {
            color: #1b5e20;
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
            .news-container {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
            
            .container {
                padding: 20px;
            }
            
            .news-item {
                padding: 15px;
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
                padding: 20px;
            }
            
            .news-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
            
            .news-item img {
                height: 180px;
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
            
            .news-container {
                grid-template-columns: 1fr;
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
            
            .section {
                padding: 15px;
            }
            
            .news-item {
                padding: 15px;
            }
            
            .news-item h3 {
                font-size: 1.1rem;
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
        <a href="entradas.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_entradas'); ?></a>
        <a href="sobrenosotros.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_sobrenosotros'); ?></a>
    </nav>
    
    <div class="container">
        <div class="section" id="noticias">
            <h2><?php echo traducir('titulo_noticias'); ?></h2>
            <div class="news-container">
                <!-- Noticia 1 -->
                <div class="news-item">
                    <img src="https://cdn.colombia.com/sdi/2022/01/06/nace-cachorro-de-leon-por-inseminacion-artificial-985602.jpg" alt="<?php echo traducir('noticia1_titulo'); ?>">
                    <h3><?php echo traducir('noticia1_titulo'); ?></h3>
                    <p><?php echo traducir('noticia1_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 15/02/2025</p>
                </div>
                
                <!-- Noticia 2 -->
                <div class="news-item">
                    <img src="https://img2.rtve.es/i/?w=1600&i=1686905177774.jpg" alt="<?php echo traducir('noticia2_titulo'); ?>">
                    <h3><?php echo traducir('noticia2_titulo'); ?></h3>
                    <p><?php echo traducir('noticia2_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 05/02/2025</p>
                </div>
                
                <!-- Noticia 3 -->
                <div class="news-item">
                    <img src="https://www.hawaiitribune-herald.com/wp-content/uploads/2016/04/3316225_web1_Detroit-Zoo-Penguins_Chri.jpg" alt="<?php echo traducir('noticia3_titulo'); ?>">
                    <h3><?php echo traducir('noticia3_titulo'); ?></h3>
                    <p><?php echo traducir('noticia3_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 01/02/2025</p>
                </div>
                
                <!-- Noticia 4 -->
                <div class="news-item">
                    <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/01-wildlife-watch-elephant-hides-africa.jpg?w=1900&h=1256" alt="<?php echo traducir('noticia4_titulo'); ?>">
                    <h3><?php echo traducir('noticia4_titulo'); ?></h3>
                    <p><?php echo traducir('noticia4_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 20/01/2025</p>
                </div>
                
                <!-- Noticia 5 -->
                <div class="news-item">
                    <img src="https://media.istockphoto.com/id/937210306/es/foto/koala-madre-con-beb%C3%A9-en-la-espalda.jpg?s=612x612&w=0&k=20&c=5snndYfXHSSqfJSQS8xF5VO0LQjWDCmfpnDkQI3ZO1Y=" alt="<?php echo traducir('noticia5_titulo'); ?>">
                    <h3><?php echo traducir('noticia5_titulo'); ?></h3>
                    <p><?php echo traducir('noticia5_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 12/01/2025</p>
                </div>
                
                <!-- Noticia 6 -->
                <div class="news-item">
                    <img src="https://estaticos-cdn.prensaiberica.es/clip/cbfdb5c2-5360-47ee-ae04-9816f1d5f5c8_16-9-discover-aspect-ratio_default_0.jpg" alt="<?php echo traducir('noticia6_titulo'); ?>">
                    <h3><?php echo traducir('noticia6_titulo'); ?></h3>
                    <p><?php echo traducir('noticia6_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 10/01/2025</p>
                </div>
                
                <!-- Noticia 7 -->
                <div class="news-item">
                    <img src="https://zoobarcelona.cat/sites/default/files/animal/2016-12/Panthera%20tigris2.jpg" alt="<?php echo traducir('noticia7_titulo'); ?>">
                    <h3><?php echo traducir('noticia7_titulo'); ?></h3>
                    <p><?php echo traducir('noticia7_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 05/01/2025</p>
                </div>
                
                <!-- Noticia 8 -->
                <div class="news-item">
                    <img src="https://okdiario.com/img/2019/09/03/aves-exoticas-mas-llamativas-655x368.jpg" alt="<?php echo traducir('noticia8_titulo'); ?>">
                    <h3><?php echo traducir('noticia8_titulo'); ?></h3>
                    <p><?php echo traducir('noticia8_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 30/12/2024</p>
                </div>
                
                <!-- Noticia 9 -->
                <div class="news-item">
                    <img src="https://zoobarcelona.cat/sites/default/files/taxonomy/rating/2016-12/Crocodylus%20siamensis3.jpg" alt="<?php echo traducir('noticia9_titulo'); ?>">
                    <h3><?php echo traducir('noticia9_titulo'); ?></h3>
                    <p><?php echo traducir('noticia9_texto'); ?></p>
                    <p><strong><?php echo traducir('fecha'); ?>:</strong> 26/12/2024</p>
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