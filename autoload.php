
<?php

function autoload_class($class)
{
    require_once "clases/$class.php";
}

spl_autoload_register("autoload_class");