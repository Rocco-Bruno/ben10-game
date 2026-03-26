<?php
$estado = 1;//¿En qué etapa está el juego? 1=jugando, 2=derrota, 3=victoria.
$stats =[//Estadísticas de los aliens en un array
    0=>["nombre" => "Ben", "salud" => 50],
    1=>["nombre" => "Bestia", "salud" => 100],
    2=>["nombre" => "Cuatro Brazos", "salud" => 150],
    3=>["nombre" => "Materia Gris", "salud" => 25],
    4=>["nombre" => "XLR8", "salud" => 80],
    5=>["nombre" => "Ultra T", "salud" => 100],
    6=>["nombre" => "Diamante", "salud" => 150],
    7=>["nombre" => "Acuático", "salud" => 80],
    8=>["nombre" => "Insectoide", "salud" => 80],
    9=>["nombre" => "Fantasmático", "salud" => 100],
    10=>["nombre" => "Fuego", "salud" => 100]
];
$alien = 0;
$saludben=$stats[$alien]["salud"];
$duracion=30;
/*
do{
    $saludben=$stats[$alien]["salud"];
    switch($alien){
        case 0://BEN
            

            break;
        case 1://BESTIA
            

            break;
        case 2://CUATRO BRAZOS

            break;
        case 3://MATERIA GRIS

            break;
        case 4://XLR8
            
            break;
        case 5://ULTRA T

            break;
        case 6://DIAMANTE
            
            break;
        case 7://ACUÁTICO

            break;
        case 8://INSECTOIDE
            
            break;
        case 9://FANTASMÁTICO

            break;
        case 10://FUEGO
            
            break;
        default://ERROR
            echo "error";
            break;
    }
}while($saludben > 0 && $estado == 1);*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ben 10 Juego</title>

<style>
body {
    margin: 0;
    overflow: hidden;
    background: black;
}

canvas {
    display: block;
}
</style>

</head>
<body>

<canvas id="game"></canvas>

<script>
const canvas = document.getElementById("game");
const ctx = canvas.getContext("2d");

// Ajustar tamaño a pantalla
function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
resize();
window.addEventListener("resize", resize);

// ===== PLAYER =====
let player = {
    x: 100,
    y: 100,
    size: 48,
    speed: 5
};

// ===== INPUT =====
let keys = {};

document.addEventListener("keydown", e => keys[e.key] = true);
document.addEventListener("keyup", e => keys[e.key] = false);

// ===== MAPA =====
let mapa = new Image();
mapa.src = "mapa.png";

// ===== LOOP =====
function update() {
    if(keys["ArrowRight"]) player.x += player.speed;
    if(keys["ArrowLeft"]) player.x -= player.speed;
    if(keys["ArrowUp"]) player.y -= player.speed;
    if(keys["ArrowDown"]) player.y += player.speed;
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Dibujar mapa
    ctx.drawImage(mapa, 0, 0);

    // Dibujar player
    ctx.fillStyle = "red";
    ctx.fillRect(player.x, player.y, player.size, player.size);
}

function loop() {
    update();
    draw();
    requestAnimationFrame(loop);
}

loop();
</script>

</body>
</html>