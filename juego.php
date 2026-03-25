<?php
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
$estado = 1;//¿En qué etapa está el juego? 1=jugando, 2=derrota, 3=victoria.
do{
    switch($alien){
        case 0://BEN
            $saludben=$stats[$alien]["salud"];

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
}while($saludben > 0 && $estado == 1);
