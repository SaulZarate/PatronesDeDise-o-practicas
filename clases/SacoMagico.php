<?php

class SacoMagico implements Imprimible
{
    // Pueden ser Armas, Skins o otros Sacos Magicos
    private $items;

    public function agregarItem($item)
    {
        $this->items[] = $item;
    }

    public function listarEnPantalla()
    {
        echo "<h3 class='my-3'>Saco Mágico</h3>";
        foreach ($this->items as $item) {
            $item->listarEnPantalla();
        }
    }
}
