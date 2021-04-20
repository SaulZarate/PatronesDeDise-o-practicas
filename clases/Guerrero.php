<?php

class Guerrero
{
    private $arma;
    private $skin;
    private $sacoMagico;

    public function agregarAccesorioAlSkin($nombreDelAccesorio)
    {
        $this->skin->agregarAccesorio($nombreDelAccesorio);
    }

    public function mostrarInventario()
    {
        if ($this->arma) $this->arma->listarEnPantalla();
        if ($this->skin) $this->skin->listarEnPantalla();
        if ($this->sacoMagico) $this->sacoMagico->listarEnPantalla();
    }

    /* SETTERS */
    public function setArma($arma)
    {
        $this->arma = $arma;
    }
    public function setSkin($skin)
    {
        $this->skin = $skin;
    }
    public function setSacoMagico($sacoMagico)
    {
        $this->sacoMagico = $sacoMagico;
    }
}
