<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'AccesBDenPhp.php';
session_start();

// Sistema de traducciones
$traducciones = [
    'es' => [
        'titulo_pagina' => 'Iniciar Sesión - Zoológico Natural',
        'iniciar_sesion' => 'Iniciar Sesión',
        'placeholder_email' => 'Correo Electrónico',
        'placeholder_contrasena' => 'Contraseña',
        'boton_iniciar_sesion' => 'Iniciar Sesión',
        'boton_acceso_sin_login' => 'Acceder como Invitado',
        'no_tienes_cuenta' => '¿No tienes una cuenta?',
        'registrate_aqui' => 'Regístrate aquí',
        'error_consulta' => 'Error en la consulta: ',
        'error_contrasena' => 'Contraseña incorrecta',
        'error_usuario_no_encontrado' => 'Usuario no encontrado',
        'error_campos_vacios' => 'Por favor, complete todos los campos',
        'select_language' => 'Seleccionar idioma:',
        'footer_derechos' => 'Todos los derechos reservados.'
    ],
    'ca' => [
        'titulo_pagina' => 'Iniciar Sessió - Zoològic Natural',
        'iniciar_sesion' => 'Iniciar Sessió',
        'placeholder_email' => 'Correu Electrònic',
        'placeholder_contrasena' => 'Contrasenya',
        'boton_iniciar_sesion' => 'Iniciar Sessió',
        'boton_acceso_sin_login' => 'Accedir com a Convidat',
        'no_tienes_cuenta' => 'No tens un compte?',
        'registrate_aqui' => 'Registra\'t aquí',
        'error_consulta' => 'Error en la consulta: ',
        'error_contrasena' => 'Contrasenya incorrecta',
        'error_usuario_no_encontrado' => 'Usuari no trobat',
        'error_campos_vacios' => 'Si us plau, omple tots els camps',
        'select_language' => 'Seleccionar idioma:',
        'footer_derechos' => 'Tots els drets reservats.'
    ],
    'en' => [
        'titulo_pagina' => 'Login - Natural Zoo',
        'iniciar_sesion' => 'Login',
        'placeholder_email' => 'Email',
        'placeholder_contrasena' => 'Password',
        'boton_iniciar_sesion' => 'Sign In',
        'boton_acceso_sin_login' => 'Continue as Guest',
        'no_tienes_cuenta' => 'Don\'t have an account?',
        'registrate_aqui' => 'Sign up here',
        'error_consulta' => 'Query error: ',
        'error_contrasena' => 'Incorrect password',
        'error_usuario_no_encontrado' => 'User not found',
        'error_campos_vacios' => 'Please fill all fields',
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['contraseña']) && !empty($_POST['email']) && !empty($_POST['contraseña'])) {
        $email = mysqli_real_escape_string($connexio, $_POST['email']);
        $contraseña = $_POST['contraseña'];

        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $result = mysqli_query($connexio, $sql);

        if ($result === false) {
            die($textos['error_consulta'] . mysqli_error($connexio));
        }

        if (mysqli_num_rows($result) > 0) {
            $usuario = mysqli_fetch_assoc($result);

            if (password_verify($contraseña, $usuario['contraseña'])) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['auth'] = true;

                if ($email === 'admin@zootech.com') {
                    header("Location: admin.php?lang=$idioma");
                } else {
                    header("Location: home.php?lang=$idioma");
                }
                exit();
            } else {
                $error = $textos['error_contrasena'];
            }
        } else {
            $error = $textos['error_usuario_no_encontrado'];
        }
    } elseif (isset($_POST['acceso_sin_login'])) {
        // Establecer una sesión de invitado
        $_SESSION['auth'] = false;
        $_SESSION['invitado'] = true;
        header("Location: home.php?lang=$idioma");
        exit();
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
        
        /* SECCIÓN DE LOGIN */
        .login-section {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin-top: 80px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        
        .login-section h2 {
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
        
        .guest-button {
            margin-top: 10px;
            background-color: #388E3C;
        }
        
        .guest-button:hover {
            background-color: #2E7D32;
        }
        
        .login-section p {
            margin-top: 20px;
            font-size: 0.95rem;
            color: #555;
        }
        
        .login-section a {
            color: #2E7D32;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        .login-section a:hover {
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
        
        /* FOOTER */
        footer {
            text-align: center;
            padding: 15px;
            background-color: rgba(46, 125, 50, 0.9);
            color: white;
            margin-top: auto;
        }
        
        /* ANIMACIONES */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-section {
            animation: fadeIn 0.5s ease-out;
        }
        
        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            .login-section {
                margin-top: 60px;
                padding: 25px;
            }
            
            .login-section h2 {
                font-size: 1.6rem;
            }
        }
        
        @media (max-width: 576px) {
            .login-section {
                margin: 60px 15px 0;
                padding: 20px;
            }
            
            .login-section h2 {
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
        <div class="login-section">
            <h2><?php echo $textos['iniciar_sesion']; ?></h2>
            <div class="form-container">
                <form action="login.php?lang=<?php echo $idioma; ?>" method="post">
                    <input type="email" name="email" placeholder="<?php echo $textos['placeholder_email']; ?>" required>
                    <input type="password" name="contraseña" placeholder="<?php echo $textos['placeholder_contrasena']; ?>" required>
                    <button type="submit"><?php echo $textos['boton_iniciar_sesion']; ?></button>
                </form>
                <form action="login.php?lang=<?php echo $idioma; ?>" method="post">
                    <button type="submit" name="acceso_sin_login" class="guest-button"><?php echo $textos['boton_acceso_sin_login']; ?></button>
                </form>
                <?php if (!empty($error)): ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php endif; ?>
            </div>
            <p><?php echo $textos['no_tienes_cuenta']; ?> <a href="singup.php?lang=<?php echo $idioma; ?>"><?php echo $textos['registrate_aqui']; ?></a></p>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 Zoológico Natural de Mataró. <?php echo $textos['footer_derechos']; ?></p>
    </footer>
</body>
</html>