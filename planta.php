<?php
class Planta {
    private int $id;
    private string $nombre;
    private string $tipo;
    private string $descripcion;
    private string $fechaIngreso;
    private float $precio;

    public function __construct(int $id, string $nombre, string $tipo, string $descripcion, string $fechaIngreso, float $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->fechaIngreso = $fechaIngreso;
        $this->precio = $precio;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function getFechaIngreso(): string {
        return $this->fechaIngreso;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function barato(): bool {
        return $this->precio <= 100;
    }
}
