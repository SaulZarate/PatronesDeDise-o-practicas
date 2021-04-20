<?php

class Arma implements Imprimible
{
    private $nombre;
    private $ataque;

    public function __construct($nombre, $ataque)
    {
        $this->nombre = $nombre;
        $this->ataque = $ataque;
    }

    public function listarEnPantalla()
    {
        echo '
        <div class="card">
            <div class="card-header">Arma</div>
            <div class="card-body">
                <p>Nombre: ' . $this->nombre . '</p>
                <p>Poder de ataque: ' . $this->ataque . '</p>
            </div>
        </div>';
    }
}
