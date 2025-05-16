<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Gestión de Animales - Zoológico Natural',
        'titulo_header' => 'Gestión de Animales',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_entradas' => 'Entradas y Precios',
        'indice' => 'Índice',
        'gestion_personal' => 'Gestión de Personal',
        'gestion_animales' => 'Gestión de Animales',
        'agregar_animal' => 'Agregar Nuevo Animal',
        'actualizar_animal' => 'Actualizar Información de Animal',
        'eliminar_animal' => 'Eliminar Animal',
        'lista_animales' => 'Ver Lista de Animales',
        'form_registro' => 'Formulario de Registro de Animal',
        'nombre_animal' => 'Nombre del Animal',
        'especie' => 'Especie',
        'edad' => 'Edad',
        'habitat' => 'Hábitat',
        'registrar' => 'Registrar Animal',
        'id_animal' => 'ID del Animal',
        'nuevo_nombre' => 'Nuevo Nombre',
        'nueva_especie' => 'Nueva Especie',
        'nueva_edad' => 'Nueva Edad',
        'nuevo_habitat' => 'Nuevo Hábitat',
        'actualizar' => 'Actualizar Animal',
        'eliminar' => 'Eliminar Animal',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'ca' => [
        'titulo_pagina' => 'Gestió d\'Animals - Zoològic Natural',
        'titulo_header' => 'Gestió d\'Animals',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_entradas' => 'Entrades i Preus',
        'indice' => 'Índex',
        'gestion_personal' => 'Gestió de Personal',
        'gestion_animales' => 'Gestió d\'Animals',
        'agregar_animal' => 'Afegir Nou Animal',
        'actualizar_animal' => 'Actualitzar Informació d\'Animal',
        'eliminar_animal' => 'Eliminar Animal',
        'lista_animales' => 'Veure Llista d\'Animals',
        'form_registro' => 'Formulari de Registre d\'Animal',
        'nombre_animal' => 'Nom de l\'Animal',
        'especie' => 'Espècie',
        'edad' => 'Edat',
        'habitat' => 'Hàbitat',
        'registrar' => 'Registrar Animal',
        'id_animal' => 'ID de l\'Animal',
        'nuevo_nombre' => 'Nou Nom',
        'nueva_especie' => 'Nova Espècie',
        'nueva_edad' => 'Nova Edat',
        'nuevo_habitat' => 'Nou Hàbitat',
        'actualizar' => 'Actualitzar Animal',
        'eliminar' => 'Eliminar Animal',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:'
    ],
    'en' => [
        'titulo_pagina' => 'Animal Management - Natural Zoo',
        'titulo_header' => 'Animal Management',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_entradas' => 'Tickets and Prices',
        'indice' => 'Index',
        'gestion_personal' => 'Staff Management',
        'gestion_animales' => 'Animal Management',
        'agregar_animal' => 'Add New Animal',
        'actualizar_animal' => 'Update Animal Information',
        'eliminar_animal' => 'Delete Animal',
        'lista_animales' => 'View Animal List',
        'form_registro' => 'Animal Registration Form',
        'nombre_animal' => 'Animal Name',
        'especie' => 'Species',
        'edad' => 'Age',
        'habitat' => 'Habitat',
        'registrar' => 'Register Animal',
        'id_animal' => 'Animal ID',
        'nuevo_nombre' => 'New Name',
        'nueva_especie' => 'New Species',
        'nueva_edad' => 'New Age',
        'nuevo_habitat' => 'New Habitat',
        'actualizar' => 'Update Animal',
        'eliminar' => 'Delete Animal',
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
            background-color: #2E7D32;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 44px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        header h1 {
            font-size: 1.8rem;
        }
        
        /* NAVEGACIÓN */
        nav {
            background-color: #388E3C;
            padding: 15px;
            width: 220px;
            height: 100%;
            position: fixed;
            top: 104px;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }
        
        nav h2 {
            color: white;
            margin: 0 0 15px 0;
            font-size: 1.2rem;
            text-align: center;
        }
        
        nav a {
            color: white;
            margin: 10px 0;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        nav a:hover {
            background-color: #1b5e20;
        }
        
        /* CONTENIDO PRINCIPAL */
        .container {
            margin-left: 240px;
            padding: 20px;
            flex: 1;
            margin-top: 60px;
        }
        
        .section {
            margin-bottom: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .section h2 {
            color: #2E7D32;
            margin-bottom: 20px;
            font-size: 1.4rem;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }
        
        /* FORMULARIOS */
        .form-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f1f8e9;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-container h3 {
            color: #2E7D32;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        
        .form-container input:focus {
            border-color: #2E7D32;
            outline: none;
        }
        
        .form-container button {
            padding: 10px 20px;
            background-color: #2E7D32;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Poppins', sans-serif;
            margin-top: 10px;
        }
        
        .form-container button:hover {
            background-color: #1b5e20;
        }
        
        /* TABLA */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        
        th {
            background-color: #2E7D32;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #e0f7fa;
        }
        
        /* OPCIONES DE GESTIÓN */
        .management-options {
            list-style-type: none;
            padding: 0;
        }
        
        .management-options li {
            margin: 15px 0;
        }
        
        .management-options li a {
            display: block;
            padding: 12px;
            background-color: #2E7D32;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            text-align: center;
        }
        
        .management-options li a:hover {
            background-color: #1b5e20;
        }
        
        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2E7D32;
            color: white;
            margin-top: auto;
        }
        
        /* RESPONSIVE DESIGN */
        @media (max-width: 992px) {
            nav {
                width: 180px;
                padding: 10px;
            }
            
            .container {
                margin-left: 200px;
            }
        }
        
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            
            nav {
                position: relative;
                width: 100%;
                height: auto;
                top: auto;
                padding: 10px 0;
            }
            
            nav a {
                display: inline-block;
                margin: 5px;
                padding: 8px 12px;
            }
            
            .container {
                margin-left: 0;
                padding: 15px;
                margin-top: 20px;
            }
            
            .management-options li a {
                padding: 10px;
                font-size: 14px;
            }
            
            table {
                font-size: 14px;
            }
            
            th, td {
                padding: 8px;
            }
        }
        
        @media (max-width: 576px) {
            header h1 {
                font-size: 1.4rem;
                padding: 15px 10px;
            }
            
            .section {
                padding: 15px;
            }
            
            .management-options li {
                margin: 10px 0;
            }
            
            .management-options li a {
                padding: 8px;
                font-size: 13px;
            }
            
            th, td {
                padding: 6px 4px;
                font-size: 12px;
            }
            
            .form-container h3 {
                font-size: 1.1rem;
            }
            
            .form-container input {
                padding: 8px;
                font-size: 14px;
            }
            
            .form-container button {
                padding: 8px 15px;
                font-size: 14px;
            }
        }
        
        @media (max-width: 400px) {
            header h1 {
                font-size: 1.2rem;
            }
            
            nav a {
                display: block;
                margin: 5px 0;
            }
            
            .management-options li a {
                font-size: 12px;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
            
            .form-container {
                padding: 10px;
            }
            
            .language-selector span {
                display: block;
                margin-bottom: 8px;
                margin-right: 0;
            }
        }
    </style>
    <script>
        function toggleFormulario(id) {
            var form = document.getElementById(id);
            if (form.style.display === "none" || form.style.display === "") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>
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
        <h2><?php echo traducir('indice'); ?></h2>
        <a href="admin.php?lang=<?php echo $idioma; ?>"><?php echo traducir('nav_inicio'); ?></a>
        <a href="gestor_personal.php?lang=<?php echo $idioma; ?>"><?php echo traducir('gestion_personal'); ?></a>
    </nav>
    
    <div class="container">
        <div class="section">
            <h2><?php echo traducir('gestion_animales'); ?></h2>
            <ul class="management-options">
                <li><a href="#" onclick="toggleFormulario('form-animal')"><?php echo traducir('agregar_animal'); ?></a></li>
                <li><a href="#" onclick="toggleFormulario('form-actualizar')"><?php echo traducir('actualizar_animal'); ?></a></li>
                <li><a href="#" onclick="toggleFormulario('form-eliminar')"><?php echo traducir('eliminar_animal'); ?></a></li>
                <li><a href="#" onclick="toggleFormulario('lista-animales')"><?php echo traducir('lista_animales'); ?></a></li>
            </ul>

            <div id="form-animal" class="form-container" style="display:none;">
                <h3><?php echo traducir('form_registro'); ?></h3>
                <form action="" method="post">
                    <input type="text" name="nombre" placeholder="<?php echo traducir('nombre_animal'); ?>" required>
                    <input type="text" name="especie" placeholder="<?php echo traducir('especie'); ?>" required>
                    <input type="text" name="edad" placeholder="<?php echo traducir('edad'); ?>" required>
                    <input type="text" name="habitat" placeholder="<?php echo traducir('habitat'); ?>" required>
                    <button type="submit" name="registrar_animal"><?php echo traducir('registrar'); ?></button>
                </form>
            </div>

            <div id="form-actualizar" class="form-container" style="display:none;">
                <h3><?php echo traducir('actualizar_animal'); ?></h3>
                <form action="" method="post">
                    <input type="number" name="id_actualizar" placeholder="<?php echo traducir('id_animal'); ?>" required>
                    <input type="text" name="nombre_actualizar" placeholder="<?php echo traducir('nuevo_nombre'); ?>" required>
                    <input type="text" name="especie_actualizar" placeholder="<?php echo traducir('nueva_especie'); ?>" required>
                    <input type="text" name="edad_actualizar" placeholder="<?php echo traducir('nueva_edad'); ?>" required>
                    <input type="text" name="habitat_actualizar" placeholder="<?php echo traducir('nuevo_habitat'); ?>" required>
                    <button type="submit" name="actualizar"><?php echo traducir('actualizar'); ?></button>
                </form>
            </div>

            <div id="form-eliminar" class="form-container" style="display:none;">
                <h3><?php echo traducir('eliminar_animal'); ?></h3>
                <form action="" method="post">
                    <input type="number" name="id_eliminar" placeholder="<?php echo traducir('id_animal'); ?>" required>
                    <button type="submit" name="eliminar"><?php echo traducir('eliminar'); ?></button>
                </form>
            </div>

            <div id="lista-animales" class="form-container" style="display:none;">
                <h3><?php echo traducir('lista_animales'); ?></h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><?php echo traducir('nombre_animal'); ?></th>
                            <th><?php echo traducir('especie'); ?></th>
                            <th><?php echo traducir('edad'); ?></th>
                            <th><?php echo traducir('habitat'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
// Conexión a la base de datos
$servidor = "192.168.248.13";
$usuari = "empleat";
$password = "funnyscale20";
$base_datos = "zoomataro";

$connexio = mysqli_connect($servidor, $usuari, $password, $base_datos);

if (!$connexio) {
    die("Error de conexión a la BD: " . mysqli_connect_error());
}

// Crear tabla si no existe
$sql_crear_tabla = "CREATE TABLE IF NOT EXISTS animales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especie VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    habitat VARCHAR(100) NOT NULL
)";

if (!mysqli_query($connexio, $sql_crear_tabla)) {
    echo "<tr><td colspan='5'>Error creando la tabla: " . mysqli_error($connexio) . "</td></tr>";
}

// Registrar nuevo animal
if (isset($_POST['registrar_animal'])) {
    $nombre = mysqli_real_escape_string($connexio, $_POST['nombre']);
    $especie = mysqli_real_escape_string($connexio, $_POST['especie']);
    $edad = mysqli_real_escape_string($connexio, $_POST['edad']);
    $habitat = mysqli_real_escape_string($connexio, $_POST['habitat']);

    $sql = "INSERT INTO animales (nombre, especie, edad, habitat) VALUES ('$nombre', '$especie', '$edad', '$habitat')";
    if (mysqli_query($connexio, $sql)) {
        echo "<tr><td colspan='5'>Animal registrado exitosamente.</td></tr>";
    } else {
        echo "<tr><td colspan='5'>Error: " . mysqli_error($connexio) . "</td></tr>";
    }
}

// Actualizar animal
if (isset($_POST['actualizar'])) {
    $id = intval($_POST['id_actualizar']);
    $nombre = mysqli_real_escape_string($connexio, $_POST['nombre_actualizar']);
    $especie = mysqli_real_escape_string($connexio, $_POST['especie_actualizar']);
    $edad = mysqli_real_escape_string($connexio, $_POST['edad_actualizar']);
    $habitat = mysqli_real_escape_string($connexio, $_POST['habitat_actualizar']);

    $sql = "UPDATE animales SET nombre='$nombre', especie='$especie', edad='$edad', habitat='$habitat' WHERE id='$id'";
    if (mysqli_query($connexio, $sql)) {
        echo "<tr><td colspan='5'>Animal actualizado exitosamente.</td></tr>";
    } else {
        echo "<tr><td colspan='5'>Error: " . mysqli_error($connexio) . "</td></tr>";
    }
}

// Eliminar animal
if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_eliminar']);

    $sql = "DELETE FROM animales WHERE id='$id'";
    if (mysqli_query($connexio, $sql)) {
        echo "<tr><td colspan='5'>Animal eliminado exitosamente.</td></tr>";
    } else {
        echo "<tr><td colspan='5'>Error: " . mysqli_error($connexio) . "</td></tr>";
    }
}

// Consulta para obtener animales
$sql = "SELECT * FROM animales";
$result = mysqli_query($connexio, $sql);

if (mysqli_num_rows($result) > 0) {
    // Mostrar cada animal en una fila de la tabla
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['especie']."</td>
                <td>".$row['edad']."</td>
                <td>".$row['habitat']."</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay animales registrados.</td></tr>";
}

mysqli_close($connexio);
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 Zoológico Natural de Mataró. <?php echo traducir('footer_derechos'); ?></p>
    </footer>
</body>
</html>