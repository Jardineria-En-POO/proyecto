<?php
require_once 'Stock.php';

class Catalogo {
    private array $stocks = [];

    public function agregarStock(Stock $stock): void {
        $this->stocks[] = $stock;
    }

    public function listarStock(): array {
        return $this->stocks;
    }

    public function buscarPlantas(?string $ubicacion = null, ?string $nombrePlanta = null, ?float $precioMax = null): array {
        return array_filter($this->stocks, function(Stock $stock) use ($ubicacion, $nombrePlanta, $precioMax) {
            $cumple = true;

            if ($ubicacion !== null) {
                $cumple = $cumple && (strcasecmp($stock->getJardin()->getUbicacion(), $ubicacion) === 0);
            }

            if ($nombrePlanta !== null) {
                $cumple = $cumple && (stripos($stock->getPlanta()->getNombre(), $nombrePlanta) !== false);
            }

            if ($precioMax !== null) {
                $cumple = $cumple && ($stock->getPrecioRecomendado() <= $precioMax);
            }

            return $cumple;
        });
    }
}
