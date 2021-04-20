<?php
require_once __DIR__ . "/AccesorioSkin.php";

class Skin implements Imprimible
{
    private $nombre;
    private $precio;
    private $accesorios;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function agregarAccesorio($nombreDelAccesorio)
    {
        $this->accesorios[] = new AccesorioSkin($nombreDelAccesorio);
    }

    public function listarEnPantalla()
    {
        echo '
        <div class="card my-3">
            <div class="card-header">Skin</div>
            <div class="card-body">
                <p>Nombre: ' . $this->nombre . '</p>
                <p>Precio: ' . $this->precio . '</p>';
                if($this->accesorios)
                {
                    foreach ($this->accesorios as $accesorio) {
                        $accesorio->listarEnPantalla();
                    }
                }
        echo '
            </div>
        </div>';
    }
}
