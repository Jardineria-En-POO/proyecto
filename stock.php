<?php
require_once 'Planta.php';
require_once 'Jardin.php';

class Stock {
    private Planta $planta;
    private Jardin $jardin;
    private int $cantidad;
    private float $precioRecomendado;

    public function __construct(Planta $planta, Jardin $jardin, int $cantidad, float $precioRecomendado) {
        $this->planta = $planta;
        $this->jardin = $jardin;
        $this->cantidad = $cantidad;
        $this->precioRecomendado = $precioRecomendado;
    }

    public function getPlanta(): Planta {
        return $this->planta;
    }

    public function getJardin(): Jardin {
        return $this->jardin;
    }

    public function getCantidad(): int {
        return $this->cantidad;
    }

    public function getPrecioRecomendado(): float {
        return $this->precioRecomendado;
    }
}
