<?php

class AccesorioSkin implements Imprimible
{
    private $nombre;

    public function __construct($nombreDelAccesorio)
    {
        $this->nombre = $nombreDelAccesorio;
    }

    public function listarEnPantalla()
    {
        echo "
        <div class='ml-5 mb-3'>
            Tipo: Accesorio<br>
            Nombre: {$this->nombre}
        </div>";
    }
}
