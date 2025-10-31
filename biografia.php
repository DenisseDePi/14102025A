<?php
$biografia = "La película 'Soy Frankelda' trata sobre Francisca, una joven escritora de terror del siglo XIX que, debido a un contexto social marcado por el machismo y la desaprobación hacia las expresiones artísticas, enfrenta obstáculos para convertirse en escritora. A pesar de su talento, su voz es silenciada, lo que la lleva a adoptar el seudónimo de Frankelda para dar vida a sus relatos de terror. La historia se desarrolla en un mundo donde sus palabras cobran vida, enfrentando criaturas y miedos internos, mientras se sumerge en un universo de pesadillas donde sus relatos son ignorados y desestimados.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografía de Frankelda</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f4ff; /* Fondo azul muy claro */
            color: #1a3cff; /* Azul rey suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contenedor {
            background-color: #e5ebff;
            border: 2px solid #1a3cff;
            border-radius: 15px;
            padding: 30px;
            max-width: 700px;
            box-shadow: 0 4px 10px rgba(26, 60, 255, 0.2);
            text-align: center;
        }
        h1 {
            color: #1a3cff;
            margin-bottom: 20px;
        }
        p {
            text-align: justify;
            font-size: 18px;
            line-height: 1.6;
        }
        .imagen {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(26, 60, 255, 0.3);
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>Biografía de Frankelda</h1>
    <img src="C:\Users\Denisse Delgadillo\Documents\14102025A\14102025A\img\frankelda.jpg" alt="Frankelda" class="imagen">
    <p><?php echo $biografia; ?></p>
</div>

</body>
</html>
