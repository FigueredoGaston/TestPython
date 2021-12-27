<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/hola.css">
    <script src="https://kit.fontawesome.com/cab57163e1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="body">
    <header class="header">Prueba técnica - Desarrollador Python</header>
    <main class="main">
        <h1 class="hola" id="hola">
            <?php
                if (!$_GET) {
                    $hola = "ingresar dato url, ejemplo: hola.php?nombre=Test";
                }else {
                    $hola = $_GET['nombre'];
                }
                $hola_py = exec("python3 hola.py $hola");
                echo $hola_py;
            ?>
        </h1>
    </main>
    <footer class="footer-distributed">
        <div class="footer-right">
            <a href="https://linkedin.com/in/gfigueredo"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/FigueredoGaston"><i class="fa fa-github"></i></a>
        </div>
        <div class="footer-left">
            <p class="footer-links">
                <a class="link-1" href="hola.php?nombre=Figueredo%20Gast%f3n">Developed by Figueredo Gastón</a>
            </p>
            <p>26-12-2021</p>
        </div>
    </footer>
    <script src="js/hola.js"></script>
</body>
</html>