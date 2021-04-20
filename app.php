<?php 

require_once __DIR__ . "/interfaces/Imprimible.php";
require_once __DIR__ . "/autoload.php";


// Arma
$arma = new Arma("Maza de la restauración",10);

// Skin
$skin = new Skin("Nigromante",800);
$skin->agregarAccesorio("Armadura de nigromante");
$skin->agregarAccesorio("Capucha de nigromante");
$skin->agregarAccesorio("Guantes de nigromante");

// Bolsa Magica
$saco = new SacoMagico();
$armaDelSaco = new Arma("Muleta de la debilidad",50);
$skinDelSaco = new Skin("Caballero",800);
$skinDelSaco->agregarAccesorio("Armadura de caballero");
$skinDelSaco->agregarAccesorio("Capucha de caballero");
$skinDelSaco->agregarAccesorio("Guante de caballero");
$saco->agregarItem($armaDelSaco);
$saco->agregarItem($skinDelSaco);

// Guerrero
$guerrero = new Guerrero();

$guerrero->setArma($arma);
$guerrero->setSkin($skin);
$guerrero->setSacoMagico($saco);

// Mostrar inventario del guerrero
$guerrero->mostrarInventario();
