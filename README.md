# 🌿 Proyecto Vivero / Jardín - PHP Orientado a Objetos

Este proyecto simula un sistema de gestión de un vivero o jardín botánico utilizando **PHP orientado a objetos (POO)**, sin uso de base de datos. Las entidades están modeladas como clases y todo el manejo de datos se realiza en memoria.

---

## 📌 Objetivo

El objetivo principal es representar un catálogo de plantas disponibles en distintos jardines, considerando sus características, disponibilidad (stock) y precios. El sistema también permite realizar búsquedas filtrando por nombre de planta, ubicación del jardín y precio máximo.

---

## 🧱 Estructura del proyecto

El proyecto está organizado en archivos PHP, cada uno representando una entidad del modelo E/R (entidad-relación):

├── index.php
├── Planta.php
├── Jardin.php
├── Stock.php
├── Catalogo.php

---

## 🧩 Clases del sistema

### 1. `Planta.php`
Representa una planta registrada en el sistema.

**Atributos:**
- `id`: Identificador único.
- `nombre`: Nombre de la planta.
- `tipo`: Tipo o categoría (ej: Flora).
- `descripcion`: Descripción general.
- `fechaIngreso`: Fecha de ingreso al vivero.
- `precio`: Precio base.

**Métodos principales:**
- `getNombre()`, `getDescripcion()`, `getPrecio()`, etc.
- `barato()`: retorna `true` si la planta cuesta menos de $100.

---

### 2. `Jardin.php`
Representa un jardín o sucursal que posee plantas.

**Atributos:**
- `id`: Identificador único.
- `nombre`: Nombre del jardín.
- `ubicacion`: Ubicación geográfica.
- `contacto`: Información de contacto.
- `capacidad`: Capacidad del jardín.

**Métodos principales:**
- `getNombre()`, `getUbicacion()`, `getCapacidad()`, etc.

---

### 3. `Stock.php`
Relaciona una planta con un jardín, indicando cuántas unidades hay y el precio recomendado de venta.

**Atributos:**
- `planta`: Objeto `Planta`.
- `jardin`: Objeto `Jardin`.
- `cantidad`: Unidades disponibles.
- `precioRecomendado`: Precio de venta en ese jardín.

**Métodos principales:**
- `getPlanta()`, `getJardin()`, `getCantidad()`, `getPrecioRecomendado()`

---

### 4. `Catalogo.php`
Es el controlador principal del sistema. Gestiona todos los objetos `Stock` y permite búsquedas y listados.

**Atributos:**
- `stocks`: Lista de objetos `Stock`.

**Métodos principales:**
- `agregarStock(Stock $stock)`: Agrega un stock al catálogo.
- `listarStock()`: Retorna todos los registros.
- `buscarPlantas($ubicacion, $nombrePlanta, $precioMax)`: Filtra por criterios múltiples.

---

## 🧪 Casos de uso simulados

En el archivo `index.php` se crean instancias de plantas, jardines y stock para simular distintos escenarios reales de búsqueda:

### ✅ Caso 1
**Usuario de Salta quiere Amapolas.**  
→ Filtra por ubicación: Salta y planta: Amapola.

### ✅ Caso 2
**Usuario busca Cactus que cuesten menos de $4000.**  
→ Filtra por nombre de planta y precio máximo.

### ✅ Caso 3
**Usuario de Bosques de Palermo busca plantas menores a $2690.**  
→ Filtra por ubicación y precio.

### ✅ Caso 4
**Usuario de Belgrano busca Aloe Vera menor a $6000.**  
→ Filtra por nombre, ubicación y precio.

---

## 💻 Requisitos

- PHP 7.4 o superior
- Servidor local (XAMPP, Laragon, etc.)

---

## 🚀 Cómo ejecutar

1. Guardá todos los archivos PHP en la misma carpeta de tu entorno local (ejemplo: `htdocs/vivero/`).
2. Iniciá Apache o tu servidor local.
3. Accedé desde el navegador a:


---

## ✅ Características destacadas

- Simulación completa en memoria sin base de datos.
- Separación clara de responsabilidades usando clases.
- Código limpio, reutilizable y fácil de mantener.
- Ideal para práctica de programación orientada a objetos en PHP.

---

## 📚 Créditos

Este proyecto fue desarrollado como actividad grupal para representar la lógica de un sistema de vivero/jardín, enfocado en el modelado de datos y el uso de clases en PHP sin persistencia en base de datos.

---
