<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Gestión de Personal - Zoológico Natural',
        'titulo_header' => 'Gestión de Personal',
        'nav_inicio' => 'Inicio',
        'nav_animales' => 'Animales',
        'nav_servicios' => 'Servicios',
        'nav_noticias' => 'Noticias',
        'nav_entradas' => 'Entradas y Precios',
        'indice' => 'Índice',
        'gestion_personal' => 'Gestión de Personal',
        'gestion_animales' => 'Gestión de Animales',
        'agregar_empleado' => 'Agregar Nuevo Empleado',
        'actualizar_empleado' => 'Actualizar Información de Empleado',
        'eliminar_empleado' => 'Eliminar Empleado',
        'lista_empleados' => 'Ver Lista de Empleados',
        'form_registro' => 'Formulario de Registro de Empleado',
        'nombre_empleado' => 'Nombre del Empleado',
        'email' => 'Email',
        'contraseña' => 'Contraseña',
        'puesto' => 'Puesto',
        'registrar' => 'Registrar Empleado',
        'id_empleado' => 'ID del Empleado',
        'nuevo_nombre' => 'Nuevo Nombre',
        'nuevo_email' => 'Nuevo Email',
        'nuevo_puesto' => 'Nuevo Puesto',
        'actualizar' => 'Actualizar Empleado',
        'eliminar' => 'Eliminar Empleado',
        'fecha_contratacion' => 'Fecha de Contratación',
        'footer_derechos' => 'Todos los derechos reservados.',
        'select_language' => 'Selecciona un idioma:',
        'error_email_existe' => 'Error: El email ya está registrado.',
        'exito_registro' => 'Empleado registrado exitosamente.',
        'exito_actualizacion' => 'Empleado actualizado exitosamente.',
        'exito_eliminacion' => 'Empleado eliminado exitosamente.',
        'no_empleados' => 'No hay empleados registrados.'
    ],
    'ca' => [
        'titulo_pagina' => 'Gestió de Personal - Zoològic Natural',
        'titulo_header' => 'Gestió de Personal',
        'nav_inicio' => 'Inici',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Serveis',
        'nav_noticias' => 'Notícies',
        'nav_entradas' => 'Entrades i Preus',
        'indice' => 'Índex',
        'gestion_personal' => 'Gestió de Personal',
        'gestion_animales' => 'Gestió d\'Animals',
        'agregar_empleado' => 'Afegir Nou Empleat',
        'actualizar_empleado' => 'Actualitzar Informació d\'Empleat',
        'eliminar_empleado' => 'Eliminar Empleat',
        'lista_empleados' => 'Veure Llista d\'Empleats',
        'form_registro' => 'Formulari de Registre d\'Empleat',
        'nombre_empleado' => 'Nom de l\'Empleat',
        'email' => 'Correu Electrònic',
        'contraseña' => 'Contrasenya',
        'puesto' => 'Càrrec',
        'registrar' => 'Registrar Empleat',
        'id_empleado' => 'ID de l\'Empleat',
        'nuevo_nombre' => 'Nou Nom',
        'nuevo_email' => 'Nou Correu',
        'nuevo_puesto' => 'Nou Càrrec',
        'actualizar' => 'Actualitzar Empleat',
        'eliminar' => 'Eliminar Empleat',
        'fecha_contratacion' => 'Data de Contractació',
        'footer_derechos' => 'Tots els drets reservats.',
        'select_language' => 'Selecciona un idioma:',
        'error_email_existe' => 'Error: El correu electrònic ja està registrat.',
        'exito_registro' => 'Empleat registrat exitosament.',
        'exito_actualizacion' => 'Empleat actualitzat exitosament.',
        'exito_eliminacion' => 'Empleat eliminat exitosament.',
        'no_empleados' => 'No hi ha empleats registrats.'
    ],
    'en' => [
        'titulo_pagina' => 'Staff Management - Natural Zoo',
        'titulo_header' => 'Staff Management',
        'nav_inicio' => 'Home',
        'nav_animales' => 'Animals',
        'nav_servicios' => 'Services',
        'nav_noticias' => 'News',
        'nav_entradas' => 'Tickets and Prices',
        'indice' => 'Index',
        'gestion_personal' => 'Staff Management',
        'gestion_animales' => 'Animal Management',
        'agregar_empleado' => 'Add New Employee',
        'actualizar_empleado' => 'Update Employee Information',
        'eliminar_empleado' => 'Delete Employee',
        'lista_empleados' => 'View Employee List',
        'form_registro' => 'Employee Registration Form',
        'nombre_empleado' => 'Employee Name',
        'email' => 'Email',
        'contraseña' => 'Password',
        'puesto' => 'Position',
        'registrar' => 'Register Employee',
        'id_empleado' => 'Employee ID',
        'nuevo_nombre' => 'New Name',
        'nuevo_email' => 'New Email',
        'nuevo_puesto' => 'New Position',
        'actualizar' => 'Update Employee',
        'eliminar' => 'Delete Employee',
        'fecha_contratacion' => 'Hire Date',
        'footer_derechos' => 'All rights reserved.',
        'select_language' => 'Select a language:',
        'error_email_existe' => 'Error: Email already exists.',
        'exito_registro' => 'Employee registered successfully.',
        'exito_actualizacion' => 'Employee updated successfully.',
        'exito_eliminacion' => 'Employee deleted successfully.',
        'no_empleados' => 'No employees registered.'
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
        <a href="gestor_animales.php?lang=<?php echo $idioma; ?>"><?php echo traducir('gestion_animales'); ?></a>
    </nav>
    
    <div class="container">
        <div class="section">
            <h2><?php echo traducir('gestion_personal'); ?></h2>
            <ul class="management-options">
                <li><a href="#" onclick="toggleFormulario('form-empleado')"><?php echo traducir('agregar_empleado'); ?></a></li>
                <li><a href="#" onclick="toggleFormulario('form-actualizar')"><?php echo traducir('actualizar_empleado'); ?></a></li>
                <li><a href="#" onclick="toggleFormulario('form-eliminar')"><?php echo traducir('eliminar_empleado'); ?></a></li>
                <li><a href="#" onclick="toggleFormulario('lista-empleados')"><?php echo traducir('lista_empleados'); ?></a></li>
            </ul>

            <div id="form-empleado" class="form-container" style="display:none;">
                <h3><?php echo traducir('form_registro'); ?></h3>
                <form action="" method="post">
                    <input type="text" name="nombre" placeholder="<?php echo traducir('nombre_empleado'); ?>" required>
                    <input type="email" name="email" placeholder="<?php echo traducir('email'); ?>" required>
                    <input type="password" name="contraseña" placeholder="<?php echo traducir('contraseña'); ?>" required>
                    <input type="text" name="puesto" placeholder="<?php echo traducir('puesto'); ?>" required>
                    <button type="submit" name="registrar_empleado"><?php echo traducir('registrar'); ?></button>
                </form>
            </div>

            <div id="form-actualizar" class="form-container" style="display:none;">
                <h3><?php echo traducir('actualizar_empleado'); ?></h3>
                <form action="" method="post">
                    <input type="number" name="id_actualizar" placeholder="<?php echo traducir('id_empleado'); ?>" required>
                    <input type="text" name="nombre_actualizar" placeholder="<?php echo traducir('nuevo_nombre'); ?>" required>
                    <input type="email" name="email_actualizar" placeholder="<?php echo traducir('nuevo_email'); ?>" required>
                    <input type="text" name="puesto_actualizar" placeholder="<?php echo traducir('nuevo_puesto'); ?>" required>
                    <button type="submit" name="actualizar"><?php echo traducir('actualizar'); ?></button>
                </form>
            </div>

            <div id="form-eliminar" class="form-container" style="display:none;">
                <h3><?php echo traducir('eliminar_empleado'); ?></h3>
                <form action="" method="post">
                    <input type="number" name="id_eliminar" placeholder="<?php echo traducir('id_empleado'); ?>" required>
                    <button type="submit" name="eliminar"><?php echo traducir('eliminar'); ?></button>
                </form>
            </div>

            <div id="lista-empleados" class="form-container" style="display:none;">
                <h3><?php echo traducir('lista_empleados'); ?></h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><?php echo traducir('nombre_empleado'); ?></th>
                            <th><?php echo traducir('email'); ?></th>
                            <th><?php echo traducir('puesto'); ?></th>
                            <th><?php echo traducir('fecha_contratacion'); ?></th>
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
                        $sql_crear_tabla = "CREATE TABLE IF NOT EXISTS empleados (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            nombre VARCHAR(100) NOT NULL,
                            email VARCHAR(100) NOT NULL UNIQUE,
                            contraseña VARCHAR(255) NOT NULL,
                            puesto VARCHAR(100) NOT NULL,
                            fecha_contratacion DATETIME NOT NULL
                        )";

                        if (!mysqli_query($connexio, $sql_crear_tabla)) {
                            echo "<tr><td colspan='5'>Error creando la tabla: " . mysqli_error($connexio) . "</td></tr>";
                        }

                        // Registrar nuevo empleado
                        if (isset($_POST['registrar_empleado'])) {
                            $nombre = mysqli_real_escape_string($connexio, $_POST['nombre']);
                            $email = mysqli_real_escape_string($connexio, $_POST['email']);
                            $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
                            $puesto = mysqli_real_escape_string($connexio, $_POST['puesto']);
                            $fecha_contratacion = date('Y-m-d H:i:s');

                            // Verificar si el email ya existe
                            $checkEmail = "SELECT * FROM empleados WHERE email='$email'";
                            $resultCheck = mysqli_query($connexio, $checkEmail);
                            if (mysqli_num_rows($resultCheck) > 0) {
                                echo "<tr><td colspan='5'>".traducir('error_email_existe')."</td></tr>";
                            } else {
                                $sql = "INSERT INTO empleados (nombre, email, contraseña, puesto, fecha_contratacion) VALUES ('$nombre', '$email', '$contraseña', '$puesto', '$fecha_contratacion')";
                                if (mysqli_query($connexio, $sql)) {
                                    echo "<tr><td colspan='5'>".traducir('exito_registro')."</td></tr>";
                                } else {
                                    echo "<tr><td colspan='5'>Error: " . mysqli_error($connexio) . "</td></tr>";
                                }
                            }
                        }

                        // Actualizar empleado
                        if (isset($_POST['actualizar'])) {
                            $id = intval($_POST['id_actualizar']);
                            $nombre = mysqli_real_escape_string($connexio, $_POST['nombre_actualizar']);
                            $email = mysqli_real_escape_string($connexio, $_POST['email_actualizar']);
                            $puesto = mysqli_real_escape_string($connexio, $_POST['puesto_actualizar']);

                            $sql = "UPDATE empleados SET nombre='$nombre', email='$email', puesto='$puesto' WHERE id='$id'";
                            if (mysqli_query($connexio, $sql)) {
                                echo "<tr><td colspan='5'>".traducir('exito_actualizacion')."</td></tr>";
                            } else {
                                echo "<tr><td colspan='5'>Error: " . mysqli_error($connexio) . "</td></tr>";
                            }
                        }

                        // Eliminar empleado
                        if (isset($_POST['eliminar'])) {
                            $id = intval($_POST['id_eliminar']);

                            $sql = "DELETE FROM empleados WHERE id='$id'";
                            if (mysqli_query($connexio, $sql)) {
                                echo "<tr><td colspan='5'>".traducir('exito_eliminacion')."</td></tr>";
                            } else {
                                echo "<tr><td colspan='5'>Error: " . mysqli_error($connexio) . "</td></tr>";
                            }
                        }

                        // Consulta para obtener empleados
                        $sql = "SELECT * FROM empleados";
                        $result = mysqli_query($connexio, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // Mostrar cada empleado en una fila de la tabla
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['nombre']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['puesto']."</td>
                                        <td>".$row['fecha_contratacion']."</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>".traducir('no_empleados')."</td></tr>";
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