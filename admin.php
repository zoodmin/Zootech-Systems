<?php
session_start(); // Ensure session is started

error_reporting(E_ALL);
ini_set('display_errors', 1); // Enable error display

// Translation system
$traducciones = [
    'es' => [
        // Header and navigation
        'admin_title' => 'Administración del Zoológico Natural de Mataró',
        'index_title' => 'Índice',
        'animal_management' => 'Gestión de Animales',
        'staff_management' => 'Gestión de Personal',
        'logout' => 'Cerrar Sesión',
        'select_language' => 'Selecciona un idioma:',
        'user_role' => 'Administrador',
        'license_info' => 'Licencia:',
        
        // Welcome section
        'welcome_title' => 'Bienvenido a la Administración del Zoológico',
        'welcome_text1' => 'Esta plataforma está diseñada exclusivamente para el uso de nuestros empleados, quienes son el corazón de nuestra misión de conservación y cuidado animal.',
        'welcome_text2' => 'Como miembro de nuestro equipo, tendrás acceso a funcionalidades que te permitirán:',
        'register_animals' => 'Registrar Animales:',
        'register_animals_desc' => 'Añade nuevos animales a nuestra base de datos.',
        'update_animals' => 'Actualizar Información:',
        'update_animals_desc' => 'Mantén los registros de nuestros animales actualizados.',
        'delete_animals' => 'Eliminar Registros:',
        'delete_animals_desc' => 'Elimina registros de animales que ya no están en nuestro zoológico.',
        'consult_animals' => 'Consultar Animales:',
        'consult_animals_desc' => 'Accede a una lista completa de todos los animales.',
        'manage_staff' => 'Gestionar Personal:',
        'manage_staff_desc' => 'Administra la información de nuestros empleados.',
        'welcome_text3' => 'Si tienes alguna pregunta o necesitas asistencia, contacta a tu supervisor.',
        'welcome_text4' => '¡Gracias por tu dedicación y esfuerzo!',
        
        // Buttons
        'go_to_animals' => 'Ir a Gestión de Animales',
        'go_to_staff' => 'Ir a Gestión de Personal',
        
        // Cameras
        'live_cameras' => 'Cámaras en Vivo',
        'camera_1' => 'Hábitat de Felinos',
        'camera_2' => 'Zona de Aviario',
        'camera_3' => 'Área Acuática',
        'camera_4' => 'Zona de Reptiles',
        
        // Footer
        'copyright' => 'Todos los derechos reservados.'
    ],
    'ca' => [
        // Capçalera i navegació
        'admin_title' => 'Administració del Zoològic Natural de Mataró',
        'index_title' => 'Índex',
        'animal_management' => 'Gestió d\'Animals',
        'staff_management' => 'Gestió de Personal',
        'logout' => 'Tancar Sessió',
        'select_language' => 'Selecciona un idioma:',
        'user_role' => 'Administrador',
        'license_info' => 'Llicència:',
        
        // Benvinguda
        'welcome_title' => 'Benvingut a l\'Administració del Zoològic',
        'welcome_text1' => 'Aquesta plataforma està dissenyada exclusivament per al nostre personal.',
        'welcome_text2' => 'Com a membre del nostre equip, tindràs accés a:',
        'register_animals' => 'Registrar Animals:',
        'register_animals_desc' => 'Afegeix nous animals a la base de dades.',
        'update_animals' => 'Actualitzar Informació:',
        'update_animals_desc' => 'Mantén els registres actualitzats.',
        'delete_animals' => 'Eliminar Registres:',
        'delete_animals_desc' => 'Elimina registres d\'animals que ja no hi són.',
        'consult_animals' => 'Consultar Animals:',
        'consult_animals_desc' => 'Accedeix a la llista completa d\'animals.',
        'manage_staff' => 'Gestionar Personal:',
        'manage_staff_desc' => 'Administra la informació dels empleats.',
        'welcome_text3' => 'Si tens preguntes, contacta amb el teu supervisor.',
        'welcome_text4' => 'Gràcies per la teva dedicació!',
        
        // Botons
        'go_to_animals' => 'Anar a Gestió d\'Animals',
        'go_to_staff' => 'Anar a Gestió de Personal',
        
        // Càmeres
        'live_cameras' => 'Càmeres en Directe',
        'camera_1' => 'Hàbitat de Felins',
        'camera_2' => 'Zona d\'Aviari',
        'camera_3' => 'Àrea Aquàtica',
        'camera_4' => 'Zona de Rèptils',
        
        // Peu de pàgina
        'copyright' => 'Tots els drets reservats.'
    ],
    'en' => [
        // Header and navigation
        'admin_title' => 'Natural Zoo of Mataró Administration',
        'index_title' => 'Index',
        'animal_management' => 'Animal Management',
        'staff_management' => 'Staff Management',
        'logout' => 'Log Out',
        'select_language' => 'Select a language:',
        'user_role' => 'Administrator',
        'license_info' => 'License:',
        
        // Welcome section
        'welcome_title' => 'Welcome to Zoo Administration',
        'welcome_text1' => 'This platform is designed exclusively for our staff members.',
        'welcome_text2' => 'As a team member, you will have access to:',
        'register_animals' => 'Register Animals:',
        'register_animals_desc' => 'Add new animals to our database.',
        'update_animals' => 'Update Information:',
        'update_animals_desc' => 'Keep our animal records up to date.',
        'delete_animals' => 'Delete Records:',
        'delete_animals_desc' => 'Remove records of animals no longer with us.',
        'consult_animals' => 'Consult Animals:',
        'consult_animals_desc' => 'Access complete list of all animals.',
        'manage_staff' => 'Manage Staff:',
        'manage_staff_desc' => 'Administer our employee information.',
        'welcome_text3' => 'If you have questions, contact your supervisor.',
        'welcome_text4' => 'Thank you for your dedication!',
        
        // Buttons
        'go_to_animals' => 'Go to Animal Management',
        'go_to_staff' => 'Go to Staff Management',
        
        // Cameras
        'live_cameras' => 'Live Cameras',
        'camera_1' => 'Feline Habitat',
        'camera_2' => 'Aviary Zone',
        'camera_3' => 'Aquatic Area',
        'camera_4' => 'Reptile Zone',
        
        // Footer
        'copyright' => 'All rights reserved.'
    ]
];

// Determine current language (default Spanish)
$idioma = isset($_GET['lang']) ? $_GET['lang'] : 'es';
// Ensure language is valid
if (!array_key_exists($idioma, $traducciones)) {
    $idioma = 'es'; // Default language
}

// Translation function
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
    <title><?php echo traducir('admin_title'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
        --primary-color: #2E7D32;
        --primary-dark: #1b5e20;
        --primary-light: #4CAF50;
        --secondary-color: #FFC107;
        --danger-color: #d32f2f;
        --danger-dark: #b71c1c;
        --text-color: #333;
        --text-light: #666;
        --bg-color: #f0f4f1;
        --card-bg: #ffffff;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    }
    
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--bg-color);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        color: var(--text-color);
        line-height: 1.6;
    }
    
    /* Selector de idioma */
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
        height: 44px;
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
    
    /* Header compacto */
    header {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
        color: white;
        text-align: center;
        padding: 15px 20px;
        width: 100%;
        position: fixed;
        top: 44px; /* Justo debajo del language selector */
        height: 64px;
        box-shadow: var(--shadow);
        z-index: 900;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    header h1 {
        font-size: 24px;
        margin: 0;
    }
    
    /* Navegación ajustada */
    nav {
        background: linear-gradient(to bottom, var(--primary-dark), var(--primary-color));
        padding: 15px;
        width: 240px;
        height: calc(100vh - 44px - 64px); /* 100vh - language - header */
        position: fixed;
        top: 108px; /* language (44) + header (64) */
        overflow-y: auto;
        z-index: 800;
        border-right: 1px solid rgba(255,255,255,0.1);
    }
    
    .user-info {
        display: flex;
        align-items: center;
        padding: 10px;
        margin-bottom: 20px;
        background-color: rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    
    .user-avatar {
        font-size: 32px;
        margin-right: 10px;
        color: white;
    }
    
    .user-details {
        display: flex;
        flex-direction: column;
    }
    
    .username {
        font-weight: 600;
        color: white;
    }
    
    .user-role {
        font-size: 12px;
        color: rgba(255,255,255,0.8);
    }
    
    nav h2 {
        color: white;
        margin: 0 0 15px 0;
        font-size: 18px;
        text-align: center;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    
    nav a {
        color: white;
        margin: 8px 0;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 6px;
        transition: var(--transition);
        font-size: 14px;
    }
    
    nav a i {
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }
    
    nav a:hover {
        background-color: rgba(255,255,255,0.15);
    }
    
    .license-info {
        font-size: 12px;
        color: rgba(255,255,255,0.7);
        padding: 10px;
        margin-top: 20px;
        border-top: 1px solid rgba(255,255,255,0.1);
    }
    
    .license-info i {
        margin-right: 5px;
    }
    
    /* Contenido principal ajustado */
    .container {
        margin-left: 240px;
        padding: 25px;
        flex: 1;
        margin-top: 108px; /* language (44) + header (64) */
        min-height: calc(100vh - 108px - 60px);
    }
    
    .welcome-text {
        background-color: var(--card-bg);
        border-radius: 8px;
        padding: 25px;
        box-shadow: var(--shadow);
        margin-bottom: 25px;
        border-left: 4px solid var(--primary-color);
    }
    
    .welcome-text h2 {
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 22px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }
    
    .welcome-text p {
        margin-bottom: 15px;
        color: var(--text-light);
        font-size: 14px;
    }
    
    .welcome-text ul {
        margin: 15px 0;
        padding-left: 20px;
    }
    
    .welcome-text li {
        margin-bottom: 10px;
        font-size: 14px;
        color: var(--text-light);
    }
    
    .welcome-text strong {
        color: var(--primary-color);
        font-weight: 600;
    }
    
    /* Botones */
    .button-container {
        margin: 20px 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 15px;
    }
    
    .button {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--primary-color);
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
        font-size: 14px;
        box-shadow: var(--shadow);
    }
    
    .button:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
    }
    
    .button i {
        margin-right: 8px;
    }
    
    .logout-button {
        background-color: var(--danger-color);
        margin-top: 20px;
        width: 100%;
    }
    
    .logout-button:hover {
        background-color: var(--danger-dark);
    }
    
    /* Cámaras */
    .camera-container {
        margin-left: 240px;
        padding: 20px;
        background-color: var(--card-bg);
        border-radius: 8px;
        box-shadow: var(--shadow);
    }
    
    .camera-container h2 {
        color: var(--primary-color);
        margin-bottom: 15px;
        font-size: 22px;
        text-align: center;
    }
    
    .camera-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 20px;
    }
    
    .camera-wrapper {
        background-color: var(--card-bg);
        border-radius: 6px;
        box-shadow: var(--shadow);
        overflow: hidden;
        transition: var(--transition);
        position: relative;
    }
    
    .camera-wrapper::before {
        content: attr(data-camera-name);
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: rgba(0,0,0,0.6);
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        z-index: 2;
    }
    
    .camera-wrapper iframe {
        width: 100%;
        height: 300px;
        border: none;
        display: block;
    }
    
    /* Footer */
    footer {
        text-align: center;
        padding: 15px;
        background-color: var(--primary-dark);
        color: white;
        width: 100%;
        font-size: 13px;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        nav {
            width: 200px;
            padding: 15px;
        }
        
        .container, .camera-container {
            margin-left: 200px;
        }
    }
    
    @media (max-width: 768px) {
        nav {
            position: relative;
            width: 100%;
            height: auto;
            top: auto;
            margin-top: 0;
        }
        
        .container, .camera-container {
            margin-left: 0;
            margin-top: 20px;
        }
        
        header {
            position: relative;
            top: auto;
            margin-top: 44px;
        }
        
        .button-container {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 576px) {
        .language-selector {
            padding: 8px;
            height: auto;
        }
        
        .language-selector span {
            display: block;
            width: 100%;
            text-align: center;
            margin-bottom: 8px;
        }
        
        header h1 {
            font-size: 20px;
        }
        
        .welcome-text, .camera-container {
            padding: 15px;
        }
        
        .camera-grid {
            grid-template-columns: 1fr;
        }
        
        .camera-wrapper iframe {
            height: 250px;
        }
    }
    </style>
</head>

<body>
    <!-- Selector de idioma mejorado -->
    <div class="language-selector">
        <span><?php echo traducir('select_language'); ?></span>
        <a href="?lang=es" <?php echo $idioma == 'es' ? 'class="active"' : ''; ?>>
            Español
        </a>
        <a href="?lang=ca" <?php echo $idioma == 'ca' ? 'class="active"' : ''; ?>>
            Català
        </a>
        <a href="?lang=en" <?php echo $idioma == 'en' ? 'class="active"' : ''; ?>>
            English
        </a>
    </div>
    
    <header>
        <h1><?php echo traducir('admin_title'); ?></h1>
    </header>

    <!-- Navegación mejorada -->
    <nav>
        <div class="user-info">
            <div class="user-avatar">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="user-details">
                <span class="username">Agent</span>
                <span class="user-role"><?php echo traducir('user_role'); ?></span>
            </div>
        </div>
        
        <h2><?php echo traducir('index_title'); ?></h2>
        <a href="gestor_animales.php?lang=<?php echo $idioma; ?>">
            <i class="fas fa-paw"></i> <?php echo traducir('animal_management'); ?>
        </a>
        <a href="gestor_personal.php?lang=<?php echo $idioma; ?>">
            <i class="fas fa-users"></i> <?php echo traducir('staff_management'); ?>
        </a>
        
        <div class="license-info">
            <i class="fas fa-info-circle"></i> <?php echo traducir('license_info'); ?>
            <span>Free (Personal, Local Use Only)</span>
        </div>
        
        <a href="login.php?lang=<?php echo $idioma; ?>" class="button logout-button">
            <i class="fas fa-sign-out-alt"></i> <?php echo traducir('logout'); ?>
        </a>
    </nav>

    <div class="container">
        <div class="welcome-text">
            <h2><?php echo traducir('welcome_title'); ?></h2>
            <p><?php echo traducir('welcome_text1'); ?></p>
            <p><?php echo traducir('welcome_text2'); ?></p>
            <ul>
                <li><strong><?php echo traducir('register_animals'); ?></strong> <?php echo traducir('register_animals_desc'); ?></li>
                <li><strong><?php echo traducir('update_animals'); ?></strong> <?php echo traducir('update_animals_desc'); ?></li>
                <li><strong><?php echo traducir('delete_animals'); ?></strong> <?php echo traducir('delete_animals_desc'); ?></li>
                <li><strong><?php echo traducir('consult_animals'); ?></strong> <?php echo traducir('consult_animals_desc'); ?></li>
                <li><strong><?php echo traducir('manage_staff'); ?></strong> <?php echo traducir('manage_staff_desc'); ?></li>
            </ul>
            <p><?php echo traducir('welcome_text3'); ?></p>
            <p><?php echo traducir('welcome_text4'); ?></p>
        </div>

        <div class="button-container">
            <a href="gestor_animales.php?lang=<?php echo $idioma; ?>" class="button">
                <i class="fas fa-paw"></i> <?php echo traducir('go_to_animals'); ?>
            </a>
            <a href="gestor_personal.php?lang=<?php echo $idioma; ?>" class="button">
                <i class="fas fa-users"></i> <?php echo traducir('go_to_staff'); ?>
            </a>
        </div>
    </div>

    <div class="camera-container">
        <h2><?php echo traducir('live_cameras'); ?></h2>
        <div class="camera-grid">
            <div class="camera-wrapper" data-camera-name="<?php echo traducir('camera_1'); ?>">
                <iframe src="http://192.168.116.16:8090/#Live" allowfullscreen></iframe>
            </div>
            <div class="camera-wrapper" data-camera-name="<?php echo traducir('camera_2'); ?>">
                <iframe src="http://192.168.116.16:8090/#Live" allowfullscreen></iframe>
            </div>
            <div class="camera-wrapper" data-camera-name="<?php echo traducir('camera_3'); ?>">
                <iframe src="http://192.168.116.16:8090/#Live" allowfullscreen></iframe>
            </div>
            <div class="camera-wrapper" data-camera-name="<?php echo traducir('camera_4'); ?>">
                <iframe src="http://192.168.116.16:8090/#Live" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Zoológico Natural de Mataró. <?php echo traducir('copyright'); ?></p>
    </footer>
</body>
</html>