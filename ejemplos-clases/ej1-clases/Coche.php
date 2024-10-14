<?php

class Coche {
    private static $numRuedas = 4;

    private string $color;

    private int $posX;

    private int $posY;

    private $velocidad;

    public function __construct($color, $velocidad){
        $this -> posX = 0;
        $this -> posY = 0;
        $this -> color = $color;
        $this -> velocidad = $velocidad;
    }

    public function getColor(): string{
        return $this -> color;
    }

    public function setColor($nuevoColor){
        $this -> color = $nuevoColor;

        switch ($nuevoColor){
            case "blanco":
                $this -> color = "blanco";
                break;
            case "negro":
                $this -> color = "negro";
                break;
            default:
                $this -> color = "ninguno";
            
        }
    }

    public function mover($x, $y){
        $this->posX = $x;
        $this->posY = $y;
    }

    public function getPosition(): string{
        return "x = $this->posX, e y = $this->posY";
    }

    public function pitar(){
        echo "beeep, beeep<br>";
    }
}