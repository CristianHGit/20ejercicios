<?php
if (isset($_POST['submit'])) {
    $correo = $_POST['correo'];

    // Validar el formato del correo electrónico
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<p>El correo electrónico '$correo' es válido.</p>";
        ?>