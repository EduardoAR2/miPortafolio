<?php
// index.php

// Incluimos el archivo de configuración o definimos las variables necesarias
// Si necesitas definir alguna configuración o variable, hazlo aquí

// Lógica para manejar la solicitud de la ruta raíz '/'
function index() {
    // Renderizamos el template HTML para la página de inicio
    include 'index.php';
}
function email() {
    include 'sent_mail.php';
}

// Llamamos a la función index para manejar la solicitud de la ruta raíz
index();
email();
?>