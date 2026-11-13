<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>MUCHAS GRACIAS</h1>

		<p>Gracias por entrar al concurso de Tenis Mike&#174; "Chidos mis Tenis". Hemos recibido la siguiente información de tu registro:</p>

		<h2>Acerca de ti:</h2>
		<ul>
			<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$story = isset($_POST['story']) ? $_POST['story'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';
$features = isset($_POST['features']) ? $_POST['features'] : array();
$size = isset($_POST['size']) ? $_POST['size'] : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta Concurso</title>
    <style>
        body {
            background-color: #c5e1a5;
            font-family: sans-serif;
            padding: 20px;
        }
        h1 { color: #1b5e20; }
        h3 { color: #4a148c; margin-top: 20px; }
    </style>
</head>
<body>

    <h1>MUCHAS GRACIAS</h1>
    <p>Gracias por entrar al concurso de Tenis Mike® "Chidos mis Tenis". Hemos recibido la siguiente información de tu registro:</p>

    <h3>Acerca de ti:</h3>
    <ul>
        <li><strong>Nombre:</strong> <?php echo htmlspecialchars($name); ?></li>
        <li><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></li>
        <li><strong>Teléfono:</strong> <?php echo htmlspecialchars($phone); ?></li>
    </ul>

    <h3>Tu triste historia:</h3>
    <p><?php echo nl2br(htmlspecialchars($story)); ?></p>

    <h3>Tu diseño de Tenis (si ganas)</h3>
    <ul>
        <li><strong>Color:</strong> <?php echo htmlspecialchars($color); ?></li>
        <li><strong>Tamaño:</strong> <?php echo htmlspecialchars($size); ?></li>
    </ul>

    <?php if (!empty($features)): ?>
        <h4>Características elegidas:</h4>
        <ul>
            <?php foreach ($features as $feature): ?>
                <li><?php echo htmlspecialchars($feature); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>
</html>