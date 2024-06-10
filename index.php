<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .chart {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <canvas class="chart" id="myChart"></canvas>
    <script>
        // Variables (puedes ajustar estos valores)
        const hombres = 6;
        const mujeres = 40;
        const total = hombres + mujeres;

        const canvas = document.getElementById('myChart');
        const ctx = canvas.getContext('2d');

        // Dibujar el gráfico circular
        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;
        const radius = 80;

        // Ángulo para hombres (azul)
        const startAngleHombres = 0;
        const endAngleHombres = (hombres / total) * 2 * Math.PI;
        ctx.fillStyle = 'blue';
        ctx.beginPath();
        ctx.moveTo(centerX, centerY);
        ctx.arc(centerX, centerY, radius, startAngleHombres, endAngleHombres);
        ctx.closePath();
        ctx.fill();

        // Ángulo para mujeres (rojo)
        const startAngleMujeres = endAngleHombres;
        const endAngleMujeres = 2 * Math.PI;
        ctx.fillStyle = 'red';
        ctx.beginPath();
        ctx.moveTo(centerX, centerY);
        ctx.arc(centerX, centerY, radius, startAngleMujeres, endAngleMujeres);
        ctx.closePath();
        ctx.fill();
    </script>
</body>
</html>
