<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SweetAlert con PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Incluir SweetAlert -->
</head>
<body>
    <h2>Formulario con SweetAlert</h2>
    <form action="./db/ejemplo.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>
