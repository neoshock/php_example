<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nueva Página de Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0; /* Cambiado a un color más claro */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4286f4; /* Cambiado a un color azul */
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; /* Cambiado a blanco */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #4286f4; /* Cambiado a un color azul */
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Nueva Página de Inicio</h1>
    </header>
    <main>
    <p>¡Bienvenido a mi página de inicio con cambios en PHP!</p>
    <p>Esta es una página modificada con un nuevo título y colores de fondo.</p>
    
    <h2>Mi Tabla</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>País</th>
        </tr>
        <tr>
            <td>Juan</td>
            <td>25</td>
            <td>México</td>
        </tr>
        <tr>
            <td>María</td>
            <td>30</td>
            <td>España</td>
        </tr>
        <tr>
            <td>Carlos</td>
            <td>22</td>
            <td>Argentina</td>
        </tr>
    </table>
</main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Nueva Compañía</p>
    </footer>
</body>
</html>
