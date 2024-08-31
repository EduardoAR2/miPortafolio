<?php
// sent_mail.php

// Define el título de la página
$title = "Email Enviado";

// Inicia el almacenamiento en búfer de salida
ob_start();

// Contenido específico de la página sent_mail.php
?>

 <!-- Seccion Mail Enviado -->
<section class="sent">
  <div class="contenido-seccion">
  <h2>Email Enviado</h2>
  
        <p>Genial!!! un grupo de monos entreneados está revisando tu correo ahora mismo... <br>
            mentira... no están entrenados, pero te contestaran dentro de poco!!! <br>
             te pido estar atento a tu correo.

        </p>
        <img src="assets/email.png" alt="email-image" width=300px>
      
      <h3>¡GRACIAS!</h3>
      <p>Serás redirigido automáticamente en unos segundos. Si no eres redirigido, <a href="index.php">da click aquí</a>.</p>

    </div>
   
  
</section>
<script>
        
        setTimeout(function(){
            window.location.href = 'index.php';
        }, 12000);
    </script>

<?php

// Obtiene el contenido del búfer y lo limpia
$content = ob_get_clean();

// Incluye el archivo base para construir la página completa
include 'includes/base.php';
?>



