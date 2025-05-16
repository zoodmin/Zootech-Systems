<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Entradas y Precios - Zoológico Natural',
        'titulo_header' => 'Entradas y Precios del Zoológico Natural de Mataró',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_sobrenosotros' => 'Sobre nosotros',
        'titulo_precios' => 'Precios de Entradas',
        'descripcion_precios' => 'Visita el Zoológico Natural de Mataró y descubre la increíble variedad de animales que tenemos para ti.',
        'tabla_tipo' => 'Tipo de Entrada',
        'tabla_precio' => 'Precio',
        'adulto' => 'Adulto (a partir de 12 años)',
        'nino' => 'Niño (de 3 a 11 años)',
        'menor' => 'Menores de 3 años',
        'estudiante' => 'Estudiantes (con identificación)',
        'familia' => 'Familia (2 adultos + 2 niños)',
        'gratis' => 'Gratis',
        'nota_entradas' => 'Las entradas solamente se pueden adquirir en la taquilla del zoológico. ¡Te esperamos!',
        'titulo_ofertas' => 'Ofertas Especiales',
        'descripcion_ofertas' => '¡Aprovecha nuestras ofertas especiales y disfruta de una experiencia inolvidable en el zoológico!',
        'oferta1' => 'Descuento del 20%: Para grupos de más de 10 personas. Ideal para excursiones escolares o familiares.',
        'oferta2' => 'Entrada gratuita: En tu cumpleaños, presenta tu identificación y disfruta de un día gratis en el zoológico.',
        'oferta3' => 'Paquete Familiar: Compra un paquete familiar y recibe un 10% de descuento en la tienda del zoológico.',
        'oferta4' => 'Promoción de Temporada: Durante el mes de diciembre, las entradas para niños son solo €5.',
        'nota_ofertas' => 'Consulta nuestras redes sociales o página web para más detalles sobre las ofertas y promociones vigentes.',
        'footer_conecta' => 'Conéctate con Nosotros',
        'footer_siguenos' => '¡Síguenos en nuestras redes sociales y mantente al tanto de nuestras novedades!',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Entrades i Preus - Zoològic Natural',
        'titulo_header' => 'Entrades i Preus del Zoològic Natural de Mataró',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_sobrenosotros' => 'Sobre nosaltres',
        'titulo_precios' => 'Preus d\'Entrades',
        'descripcion_precios' => 'Visita el Zoològic Natural de Mataró i descobreix l\'increïble varietat d\'animals que tenim per a tu.',
        'tabla_tipo' => 'Tipus d\'Entrada',
        'tabla_precio' => 'Preu',
        'adulto' => 'Adult (a partir de 12 anys)',
        'nino' => 'Nen (de 3 a 11 anys)',
        'menor' => 'Menors de 3 anys',
        'estudiante' => 'Estudiants (amb identificació)',
        'familia' => 'Família (2 adults + 2 nens)',
        'gratis' => 'Gratis',
        'nota_entradas' => 'Les entrades només es poden adquirir a la taquilla del zoològic. T\'esperem!',
        'titulo_ofertas' => 'Ofertes Especials',
        'descripcion_ofertas' => 'Aprofita les nostres ofertes especials i gaudeix d\'una experiència inoblidable al zoològic!',
        'oferta1' => 'Descompte del 20%: Per a grups de més de 10 persones. Ideal per a excursions escolars o familiars.',
        'oferta2' => 'Entrada gratuïta: En el teu aniversari, presenta la teva identificació i gaudeix d\'un dia gratis al zoològic.',
        'oferta3' => 'Paquet Familiar: Compra un paquet familiar i rep un 10% de descompte a la botiga del zoològic.',
        'oferta4' => 'Promoció de Temporada: Durant el mes de desembre, les entrades per a nens són només €5.',
        'nota_ofertas' => 'Consulta les nostres xarxes socials o pàgina web per a més detalls sobre les ofertes i promocions vigents.',
        'footer_conecta' => 'Connecta amb Nosaltres',
        'footer_siguenos' => 'Segueix-nos a les nostres xarxes socials i mantingues-te al dia de les nostres novetats!',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'Tickets and Prices - Natural Zoo',
        'titulo_header' => 'Tickets and Prices of Natural Zoo of Mataró',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_sobrenosotros' => 'About us',
        'titulo_precios' => 'Ticket Prices',
        'descripcion_precios' => 'Visit the Natural Zoo of Mataró and discover the amazing variety of animals we have for you.',
        'tabla_tipo' => 'Ticket Type',
        'tabla_precio' => 'Price',
        'adulto' => 'Adult (12+ years)',
        'nino' => 'Child (3-11 years)',
        'menor' => 'Under 3 years',
        'estudiante' => 'Student (with ID)',
        'familia' => 'Family (2 adults + 2 children)',
        'gratis' => 'Free',
        'nota_entradas' => 'Tickets can only be purchased at the zoo ticket office. We are waiting for you!',
        'titulo_ofertas' => 'Special Offers',
        'descripcion_ofertas' => 'Take advantage of our special offers and enjoy an unforgettable experience at the zoo!',
        'oferta1' => '20% discount: For groups of more than 10 people. Ideal for school or family outings.',
        'oferta2' => 'Free admission: On your birthday, present your ID and enjoy a free day at the zoo.',
        'oferta3' => 'Family Package: Purchase a family package and receive a 10% discount at the zoo store.',
        'oferta4' => 'Seasonal Promotion: During December, children\'s tickets are only €5.',
        'nota_ofertas' => 'Check our social networks or website for more details about current offers and promotions.',
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
            padding: 80px 20px 60px;
            margin-top: 44px;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            position: relative;
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
            transition: color 0.3s;
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
            padding: 20px;
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
            margin-bottom: 15px;
            font-size: 1.8rem;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }
        
        .section p {
            margin-bottom: 15px;
        }
        
        /* TABLA DE PRECIOS */
        .price-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
        }
        
        .price-table th, .price-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        
        .price-table th {
            background-color: #2E7D32;
            color: white;
            font-weight: 600;
        }
        
        .price-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .price-table tr:hover {
            background-color: #f1f8e9;
        }
        
        /* OFERTAS */
       /* ESTILO PARA LA SECCIÓN DE OFERTAS (FONDO BLANCO) */
        .section-ofertas {
            background-color: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .section-ofertas h2 {
            color: #2E7D32;
            margin-bottom: 15px;
            font-size: 1.8rem;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }

        .section-ofertas ul {
            margin: 15px 0 15px 20px;
            list-style-type: disc;
        }

        .section-ofertas li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .section-ofertas strong {
            color: #1b5e20;
        }       
        
        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2E7D32;
            color: white;
            margin-top: auto;
        }
        
        footer h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        
        .social-media {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 15px 0;
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
        @media (max-width: 992px) {
            header {
                padding: 70px 20px 50px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            nav a {
                margin: 0 15px;
                font-size: 15px;
            }
            
            .container {
                padding: 15px;
            }
            
            .offers {
                flex-direction: column;
            }
            
            .offer-image {
                width: 100%;
                border-radius: 0 0 10px 10px;
                order: 2;
            }
            
            .offer-content {
                order: 1;
            }
        }
        
        @media (max-width: 768px) {
            header {
                padding: 60px 15px 40px;
            }
            
            header h1 {
                font-size: 1.5rem;
            }
            
            nav {
                padding: 10px;
            }
            
            nav a {
                margin: 0 10px;
                font-size: 14px;
            }
            
            .section {
                padding: 20px;
            }
            
            .price-table th, 
            .price-table td {
                padding: 8px;
                font-size: 14px;
            }
            
            .social-media a {
                margin: 0 10px 10px;
            }
        }
        
        @media (max-width: 576px) {
            header {
                padding: 50px 10px 30px;
            }
            
            header h1 {
                font-size: 1.3rem;
            }
            
            nav {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav a {
                margin: 5px 8px;
                font-size: 13px;
            }
            
            .section {
                padding: 15px;
            }
            
            .section h2 {
                font-size: 1.4rem;
            }
            
            .price-table {
                display: block;
                overflow-x: auto;
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
            .language-selector span {
                display: block;
                margin-bottom: 8px;
                margin-right: 0;
            }
            
            header h1 {
                font-size: 1.1rem;
            }
            
            nav a {
                font-size: 12px;
                margin: 3px 5px;
            }
            
            .price-table th, 
            .price-table td {
                padding: 6px;
                font-size: 12px;
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
        <a href="sobrenosotros.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_sobrenosotros'); ?></a>
    </nav>
    
    <div class="container">
        <div class="section" id="entradas">
            <h2><?php echo traducir('titulo_precios'); ?></h2>
            <p><?php echo traducir('descripcion_precios'); ?></p>
            <table class="price-table">
                <thead>
                    <tr>
                        <th><?php echo traducir('tabla_tipo'); ?></th>
                        <th><?php echo traducir('tabla_precio'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo traducir('adulto'); ?></td>
                        <td>€15</td>
                    </tr>
                    <tr>
                        <td><?php echo traducir('nino'); ?></td>
                        <td>€10</td>
                    </tr>
                    <tr>
                        <td><?php echo traducir('menor'); ?></td>
                        <td><?php echo traducir('gratis'); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo traducir('estudiante'); ?></td>
                        <td>€12</td>
                    </tr>
                    <tr>
                        <td><?php echo traducir('familia'); ?></td>
                        <td>€40</td>
                    </tr>
                </tbody>
            </table>
            <p><?php echo traducir('nota_entradas'); ?></p>
        </div>
        
        <div class="section-ofertas" id="ofertas">
            <h2><?php echo traducir('titulo_ofertas'); ?></h2>
            <p><?php echo traducir('descripcion_ofertas'); ?></p>
        <ul>
          <li><strong><?php echo traducir('oferta1'); ?></strong></li>
            <li><strong><?php echo traducir('oferta2'); ?></strong></li>
            <li><strong><?php echo traducir('oferta3'); ?></strong></li>
            <li><strong><?php echo traducir('oferta4'); ?></strong></l>
        </ul>
        <p><?php echo traducir('nota_ofertas'); ?></p>
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