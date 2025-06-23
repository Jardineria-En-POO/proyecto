<?php
class Jardin {
    private int $id;
    private string $ubicacion;
    private string $nombre;
    private string $contacto;
    private int $capacidad;

    public function __construct(int $id, string $ubicacion, string $nombre, string $contacto, int $capacidad) {
        $this->id = $id;
        $this->ubicacion = $ubicacion;
        $this->nombre = $nombre;
        $this->contacto = $contacto;
        $this->capacidad = $capacidad;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getUbicacion(): string {
        return $this->ubicacion;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getContacto(): string {
        return $this->contacto;
    }

    public function getCapacidad(): int {
        return $this->capacidad;
    }
}
