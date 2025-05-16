<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Servicios - Zoológico Natural',
        'titulo_header' => 'Servicios del Zoológico Natural de Mataró',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_entradas' => 'Entradas y Precios',
        'nav_sobrenosotros' => 'Sobre nosotros',
        'visitas_guiadas' => 'Visitas Guiadas',
        'eventos_especiales' => 'Eventos Especiales',
        'talleres' => 'Talleres Educativos',
        'programas_escolares' => 'Programas Escolares',
        'desc_visitas1' => 'Únete a nuestras visitas guiadas para aprender sobre la fauna y flora de nuestro zoológico. Nuestros guías expertos te llevarán a través de las diferentes secciones, compartiendo datos interesantes y respondiendo a tus preguntas.',
        'desc_visitas2' => 'Las visitas guiadas son adecuadas para todas las edades y se adaptan a los intereses de los participantes. Ya sea que seas un amante de los animales o simplemente busques una experiencia educativa, nuestras visitas te proporcionarán una visión única del mundo animal.',
        'horarios' => 'Horarios:',
        'horario_visitas' => 'Todos los días a las 10:00, 12:00 y 15:00.',
        'duracion' => 'Duración:',
        'duracion_visitas' => 'Aproximadamente 1.5 horas.',
        'desc_eventos1' => 'Participa en nuestros eventos especiales, como charlas educativas, días de conservación y actividades interactivas. Estos eventos son ideales para familias y grupos escolares que desean aprender más sobre la vida silvestre.',
        'desc_eventos2' => 'Los eventos especiales son una forma divertida y educativa de involucrarse con la conservación y el bienestar animal. A menudo contamos con la presencia de biólogos y conservacionistas que comparten sus experiencias y conocimientos.',
        'proximo_evento' => 'Próximo Evento:',
        'evento_fecha' => 'Día de la Conservación - 15 de marzo.',
        'desc_talleres1' => 'Ofrecemos talleres para niños y adultos sobre la vida silvestre y la conservación. Nuestros talleres son prácticos y están diseñados para fomentar el aprendizaje a través de la interacción directa con los animales y su hábitat.',
        'desc_talleres2' => 'Los talleres son una excelente manera de involucrar a los jóvenes en la conservación y el cuidado del medio ambiente. A través de actividades prácticas, los participantes aprenderán sobre la biología de los animales y sus hábitats.',
        'temas' => 'Temas:',
        'temas_talleres' => 'Cuidado de animales, conservación de especies, y más.',
        'desc_escolares1' => 'Desarrollamos programas educativos para escuelas, adaptados a diferentes niveles educativos. Estos programas incluyen visitas guiadas, talleres y actividades interactivas que cumplen con los estándares educativos.',
        'desc_escolares2' => 'Los programas escolares están diseñados para ser dinámicos y atractivos, asegurando que los estudiantes se mantengan interesados y comprometidos. Ofrecemos materiales educativos y recursos para maestros.',
        'reservas' => 'Reservas:',
        'info_reservas' => 'Contacta con nosotros para más información sobre tarifas y disponibilidad.',
        'footer_conecta' => 'Conéctate con Nosotros',
        'footer_siguenos' => '¡Síguenos en nuestras redes sociales y mantente al tanto de nuestras novedades!',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Serveis - Zoològic Natural',
        'titulo_header' => 'Serveis del Zoològic Natural de Mataró',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_entradas' => 'Entrades i Preus',
        'nav_sobrenosotros' => 'Sobre nosaltres',
        'visitas_guiadas' => 'Visites Guiades',
        'eventos_especiales' => 'Esdeveniments Especials',
        'talleres' => 'Tallers Educatius',
        'programas_escolares' => 'Programes Escolars',
        'desc_visitas1' => 'Uneix-te a les nostres visites guiades per aprendre sobre la fauna i flora del nostre zoològic. Els nostres guies experts et portaran a través de les diferents seccions, compartint dades interessants i responent a les teves preguntes.',
        'desc_visitas2' => 'Les visites guiades són adequades per a totes les edats i s\'adapten als interessos dels participants. Tant si ets un amant dels animals com si simplement busques una experiència educativa, les nostres visites et proporcionaran una visió única del món animal.',
        'horarios' => 'Horaris:',
        'horario_visitas' => 'Tots els dies a les 10:00, 12:00 i 15:00.',
        'duracion' => 'Durada:',
        'duracion_visitas' => 'Aproximadament 1.5 hores.',
        'desc_eventos1' => 'Participa en els nostres esdeveniments especials, com ara xerrades educatives, dies de conservació i activitats interactives. Aquests esdeveniments són ideals per a famílies i grups escolars que volen aprendre més sobre la vida salvatge.',
        'desc_eventos2' => 'Els esdeveniments especials són una manera divertida i educativa d\'involucrar-se amb la conservació i el benestar animal. Sovint comptem amb la presència de biòlegs i conservacionistes que comparteixen les seves experiències i coneixements.',
        'proximo_evento' => 'Proper Esdeveniment:',
        'evento_fecha' => 'Dia de la Conservació - 15 de març.',
        'desc_talleres1' => 'Oferim tallers per a nens i adults sobre la vida salvatge i la conservació. Els nostres tallers són pràctics i estan dissenyats per fomentar l\'aprenentatge a través de la interacció directa amb els animals i el seu hàbitat.',
        'desc_talleres2' => 'Els tallers són una excel·lent manera d\'involucrar els joves en la conservació i la cura del medi ambient. A través d\'activitats pràctiques, els participants aprendran sobre la biologia dels animals i els seus hàbitats.',
        'temas' => 'Temes:',
        'temas_talleres' => 'Cura d\'animals, conservació d\'espècies, i més.',
        'desc_escolares1' => 'Desenvolupem programes educatius per a escoles, adaptats a diferents nivells educatius. Aquests programes inclouen visites guiades, tallers i activitats interactives que compleixen amb els estàndards educatius.',
        'desc_escolares2' => 'Els programes escolars estan dissenyats per ser dinàmics i atractius, assegurant que els estudiants es mantinguin interessats i compromesos. Oferim materials educatius i recursos per als mestres.',
        'reservas' => 'Reserves:',
        'info_reservas' => 'Contacta amb nosaltres per a més informació sobre tarifes i disponibilitat.',
        'footer_conecta' => 'Connecta amb Nosaltres',
        'footer_siguenos' => 'Segueix-nos a les nostres xarxes socials i mantingues-te al dia de les nostres novetats!',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'Services - Natural Zoo',
        'titulo_header' => 'Services of the Natural Zoo of Mataró',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_entradas' => 'Tickets and Prices',
        'nav_sobrenosotros' => 'About Us',
        'visitas_guiadas' => 'Guided Tours',
        'eventos_especiales' => 'Special Events',
        'talleres' => 'Educational Workshops',
        'programas_escolares' => 'School Programs',
        'desc_visitas1' => 'Join our guided tours to learn about the fauna and flora of our zoo. Our expert guides will take you through the different sections, sharing interesting facts and answering your questions.',
        'desc_visitas2' => 'The guided tours are suitable for all ages and are adapted to the interests of the participants. Whether you\'re an animal lover or just looking for an educational experience, our tours will provide you with a unique view of the animal world.',
        'horarios' => 'Schedule:',
        'horario_visitas' => 'Every day at 10:00, 12:00 and 15:00.',
        'duracion' => 'Duration:',
        'duracion_visitas' => 'Approximately 1.5 hours.',
        'desc_eventos1' => 'Participate in our special events, such as educational talks, conservation days and interactive activities. These events are ideal for families and school groups who want to learn more about wildlife.',
        'desc_eventos2' => 'Special events are a fun and educational way to get involved with conservation and animal welfare. We often have biologists and conservationists who share their experiences and knowledge.',
        'proximo_evento' => 'Next Event:',
        'evento_fecha' => 'Conservation Day - March 15.',
        'desc_talleres1' => 'We offer workshops for children and adults about wildlife and conservation. Our workshops are practical and designed to encourage learning through direct interaction with animals and their habitat.',
        'desc_talleres2' => 'The workshops are an excellent way to engage young people in conservation and environmental care. Through practical activities, participants will learn about animal biology and their habitats.',
        'temas' => 'Topics:',
        'temas_talleres' => 'Animal care, species conservation, and more.',
        'desc_escolares1' => 'We develop educational programs for schools, adapted to different educational levels. These programs include guided tours, workshops and interactive activities that meet educational standards.',
        'desc_escolares2' => 'School programs are designed to be dynamic and engaging, ensuring students remain interested and committed. We offer educational materials and resources for teachers.',
        'reservas' => 'Reservations:',
        'info_reservas' => 'Contact us for more information about rates and availability.',
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
            align-items: center;
            padding: 30px 20px;
            max-width: 1200px;
            margin: 20px auto;
            width: 100%;
        }
        
        .section {
            background-color: white;
            padding: 30px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            text-align: left;
            transition: transform 0.3s;
        }

        .section h2 {
             color: #2E7D32; /* Verde consistente con la página */
             margin-bottom: 15px;
             font-size: 1.8rem;
        }
        
        .section:hover {
            transform: scale(1.02);
        }
        
        .section img {
            width: 350px;
            height: auto;
            border-radius: 10px;
            margin-left: 20px;
            float: right;
        }
        
        .service-description {
            margin-top: 15px;
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
                width: 300px;
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
            
            .section {
                padding: 25px;
            }
            
            .section img {
                width: 280px;
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
            
            .section {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
            
            .section img {
                width: 100%;
                max-width: 350px;
                margin: 20px 0 0 0;
                float: none;
            }
            
            .service-description {
                text-align: center;
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
                text-align: center;
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
    </header>
    
    <nav>
        <a href="home.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_inicio'); ?></a>
        <a href="animales.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_animales'); ?></a>
        <a href="noticias.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_noticias'); ?></a>
        <a href="entradas.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_entradas'); ?></a>
        <a href="sobrenosotros.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_sobrenosotros'); ?></a>
    </nav>
    
    <div class="container">
        <div class="section" id="visitas-guiadas">
            <h2><?php echo traducir('visitas_guiadas'); ?></h2>
            <img src="https://imgcom.masterd.es/32/blog/2020/10/cualildades_cuidador_zoologico.jpg" alt="<?php echo traducir('visitas_guiadas'); ?>">
            <p class="service-description"><?php echo traducir('desc_visitas1'); ?></p>
            <p class="service-description"><?php echo traducir('desc_visitas2'); ?></p>
            <p><strong><?php echo traducir('horarios'); ?></strong> <?php echo traducir('horario_visitas'); ?></p>
            <p><strong><?php echo traducir('duracion'); ?></strong> <?php echo traducir('duracion_visitas'); ?></p>
        </div>
        
        <div class="section" id="eventos-especiales">
            <h2><?php echo traducir('eventos_especiales'); ?></h2>
            <img src="https://aceitedepalmasostenible.es/wp-content/uploads/2024/03/ZooPLAY002.jpg" alt="<?php echo traducir('eventos_especiales'); ?>">
            <p class="service-description"><?php echo traducir('desc_eventos1'); ?></p>
            <p class="service-description"><?php echo traducir('desc_eventos2'); ?></p>
            <p><strong><?php echo traducir('proximo_evento'); ?></strong> <?php echo traducir('evento_fecha'); ?></p>
        </div>
        
        <div class="section" id="talleres">
            <h2><?php echo traducir('talleres'); ?></h2>
            <img src="https://zoobarcelona.cat/sites/default/files/2021-10/20190712_Zoo_Barcelona_06.jpg" alt="<?php echo traducir('talleres'); ?>">
            <p class="service-description"><?php echo traducir('desc_talleres1'); ?></p>
            <p class="service-description"><?php echo traducir('desc_talleres2'); ?></p>
            <p><strong><?php echo traducir('temas'); ?></strong> <?php echo traducir('temas_talleres'); ?></p>
        </div>
        
        <div class="section" id="programas-escolares">
            <h2><?php echo traducir('programas_escolares'); ?></h2>
            <img src="https://www.faunia.es/content/fau/es/conservacion-y-educacion/educacion/colegios-y-grupos/grupos/_jcr_content/responsiveGrid/cc18_columns_copy_co_188996342/col_2/ca03_image.coreimg.jpeg/1708337522892/visitas-escolares-faunia-2.jpeg" alt="<?php echo traducir('programas_escolares'); ?>">
            <p class="service-description"><?php echo traducir('desc_escolares1'); ?></p>
            <p class="service-description"><?php echo traducir('desc_escolares2'); ?></p>
            <p><strong><?php echo traducir('reservas'); ?></strong> <?php echo traducir('info_reservas'); ?></p>
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