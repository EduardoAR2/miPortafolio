<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="assets/portafolio.png" type="image/x-icon">
    <title><?php echo $title ?> - Portafolio</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
   

<body>
<div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Eduardo</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">SKILLS</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portfolio" onclick="seleccionar()">PORTFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>
   
    <section><?php echo $content ?></section>

     <!-- footer -->
     <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
            <a href="https://www.facebook.com/eduardo.aguinaga.948" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/eduardo.armz" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/eduardo-agui%C3%B1aga-ramirez-66658621a/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            
        </div>
        <div class="made-width">
    <div class="row">
        <p>Hecho con mucho ❤️ por Eduardo Aguiñaga | ©2024 León, Guanajuato México.</p>
    </div>
    </footer>

</div>
</div>
<script src="assets/script.js"></script>
</body>
</html>
