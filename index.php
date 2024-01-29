<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Página de Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
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
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hello World</h1>
    </header>
    <main>
        <p>¡Bienvenido a mi página de inicio en PHP!</p>
        <p>Esta es una página simple con un "Hello World" y estilos CSS.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Compañía</p>
    </footer>
</body>
</html>
