<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'AccesBDenPhp.php';
session_start();

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Registro - Zoológico Natural',
        'registro' => 'Crear una Cuenta',
        'placeholder_nombre' => 'Nombre',
        'placeholder_email' => 'Correo Electrónico',
        'placeholder_contrasena' => 'Contraseña',
        'boton_registro' => 'Registrarse',
        'ya_tienes_cuenta' => '¿Ya tienes una cuenta?',
        'inicia_sesion_aqui' => 'Inicia sesión aquí',
        'error_consulta' => 'Error en la consulta: ',
        'error_email_existente' => 'Este correo electrónico ya está registrado',
        'error_campos_vacios' => 'Por favor, complete todos los campos',
        'registro_exitoso' => 'Registro exitoso. Ahora puedes iniciar sesión.',
        'select_language' => 'Seleccionar idioma:',
        'footer_derechos' => 'Todos los derechos reservados.'
    ],
    'ca' => [
        'titulo_pagina' => 'Registre - Zoològic Natural',
        'registro' => 'Crear un Compte',
        'placeholder_nombre' => 'Nom',
        'placeholder_email' => 'Correu Electrònic',
        'placeholder_contrasena' => 'Contrasenya',
        'boton_registro' => 'Registrar-se',
        'ya_tienes_cuenta' => 'Ja tens un compte?',
        'inicia_sesion_aqui' => 'Inicia sessió aquí',
        'error_consulta' => 'Error en la consulta: ',
        'error_email_existente' => 'Aquest correu electrònic ja està registrat',
        'error_campos_vacios' => 'Si us plau, omple tots els camps',
        'registro_exitoso' => 'Registre exitós. Ara pots iniciar sessió.',
        'select_language' => 'Seleccionar idioma:',
        'footer_derechos' => 'Tots els drets reservats.'
    ],
    'en' => [
        'titulo_pagina' => 'Sign Up - Natural Zoo',
        'registro' => 'Create an Account',
        'placeholder_nombre' => 'Name',
        'placeholder_email' => 'Email',
        'placeholder_contrasena' => 'Password',
        'boton_registro' => 'Sign Up',
        'ya_tienes_cuenta' => 'Already have an account?',
        'inicia_sesion_aqui' => 'Log in here',
        'error_consulta' => 'Query error: ',
        'error_email_existente' => 'This email is already registered',
        'error_campos_vacios' => 'Please fill all fields',
        'registro_exitoso' => 'Registration successful. You can now log in.',
        'select_language' => 'Select language:',
        'footer_derechos' => 'All rights reserved.'
    ]
];

// Configurar idioma
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es'; // Español por defecto
}

$idioma = $_SESSION['lang'];
$textos = $traducciones[$idioma];

$error = "";
$exito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['contraseña'])) {
        $nombre = mysqli_real_escape_string($connexio, $_POST['nombre']);
        $email = mysqli_real_escape_string($connexio, $_POST['email']);
        $contraseña = $_POST['contraseña'];

        // Verificar si el email ya existe
        $verificar_email = "SELECT * FROM usuarios WHERE email='$email'";
        $result = mysqli_query($connexio, $verificar_email);

        if ($result === false) {
            die($textos['error_consulta'] . mysqli_error($connexio));
        }

        if (mysqli_num_rows($result) > 0) {
            $error = $textos['error_email_existente'];
        } else {
            // Encriptar contraseña
            $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

            // Insertar usuario
            $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña_hash')";
            
            if (mysqli_query($connexio, $sql)) {
                $exito = $textos['registro_exitoso'];
                // Redireccionar después de 2 segundos
                header("refresh:2;url=login.php?lang=$idioma");
            } else {
                $error = $textos['error_consulta'] . mysqli_error($connexio);
            }
        }
    } else {
        $error = $textos['error_campos_vacios'];
    }
}

mysqli_close($connexio);
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $textos['titulo_pagina']; ?></title>
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
            background: url('https://www.leonvet.es/update/04-oct-importancia-animales-ecosistema.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
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
        
        /* CONTENEDOR PRINCIPAL */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
            padding: 20px;
            position: relative;
        }
        
        /* SECCIÓN DE REGISTRO */
        .signup-section {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin-top: 80px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        
        .signup-section h2 {
            color: #2E7D32;
            margin-bottom: 25px;
            font-size: 1.8rem;
        }
        
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        
        .form-container form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .form-container input {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f8f8;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-container input:focus {
            border-color: #2E7D32;
            outline: none;
            background-color: #fff;
            box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.2);
        }
        
        .form-container button {
            padding: 12px 20px;
            background-color: #2E7D32;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            width: 100%;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        
        .form-container button:hover {
            background-color: #1b5e20;
        }
        
        .signup-section p {
            margin-top: 20px;
            font-size: 0.95rem;
            color: #555;
        }
        
        .signup-section a {
            color: #2E7D32;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        .signup-section a:hover {
            color: #1b5e20;
            text-decoration: underline;
        }
        
        .error {
            color: #d32f2f;
            margin: 15px 0;
            font-size: 0.9rem;
            padding: 10px;
            background-color: #ffebee;
            border-radius: 5px;
            width: 100%;
        }
        
        .success {
            color: #2E7D32;
            margin: 15px 0;
            font-size: 0.9rem;
            padding: 10px;
            background-color: #e8f5e9;
            border-radius: 5px;
            width: 100%;
        }
        
        /* FOOTER */
        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(46, 125, 50, 0.9);
            color: white;
            margin-top: auto;
        }
        
        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .signup-section {
                margin-top: 60px;
                padding: 25px;
            }
            
            .signup-section h2 {
                font-size: 1.6rem;
            }
        }
        
        @media (max-width: 576px) {
            .signup-section {
                margin: 60px 15px 0;
                padding: 20px;
            }
            
            .signup-section h2 {
                font-size: 1.4rem;
            }
            
            .form-container input,
            .form-container button {
                padding: 10px 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Selector de idioma -->
    <div class="language-selector">
        <span><?php echo $textos['select_language']; ?></span>
        <a href="?lang=es" <?php echo $idioma == 'es' ? 'class="active"' : ''; ?>>Español</a>
        <a href="?lang=ca" <?php echo $idioma == 'ca' ? 'class="active"' : ''; ?>>Català</a>
        <a href="?lang=en" <?php echo $idioma == 'en' ? 'class="active"' : ''; ?>>English</a>
    </div>
    
    <div class="container">
        <div class="signup-section">
            <h2><?php echo $textos['registro']; ?></h2>
            <div class="form-container">
                <form action="singup.php?lang=<?php echo $idioma; ?>" method="post">
                    <input type="text" name="nombre" placeholder="<?php echo $textos['placeholder_nombre']; ?>" required>
                    <input type="email" name="email" placeholder="<?php echo $textos['placeholder_email']; ?>" required>
                    <input type="password" name="contraseña" placeholder="<?php echo $textos['placeholder_contrasena']; ?>" required>
                    <button type="submit"><?php echo $textos['boton_registro']; ?></button>
                </form>
                <?php if (!empty($error)): ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if (!empty($exito)): ?>
                    <div class="success"><?php echo $exito; ?></div>
                <?php endif; ?>
            </div>
            <p><?php echo $textos['ya_tienes_cuenta']; ?> <a href="login.php?lang=<?php echo $idioma; ?>"><?php echo $textos['inicia_sesion_aqui']; ?></a></p>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 Zoológico Natural de Mataró. <?php echo $textos['footer_derechos']; ?></p>
    </footer>
</body>
</html>