<?php

include('libs/Smarty.class.php');

class Carta
{
    public $name;
    public $type;
    public $evolution;
    public $imagen;
    public $fondo;
    public $properties = array();

    public function __construct($name, $type, $evolution, $hp, $damage, $defense, $stamina, $imagen, $fondo)
    {
        $this->name = $name;
        $this->type = $type;
        $this->evolution = $evolution;
        $this->imagen = "img/{$name}.png"; // Utiliza la ruta de la imagen
        $this->fondo = "plantillas/{$type}.png"; // Utiliza la ruta de la plantilla

        $this->properties['hp'] = $hp;
        $this->properties['damage'] = $damage;
        $this->properties['defense'] = $defense;
        $this->properties['stamina'] = $stamina;
    }

    function pintaCarta()
    {
        $smarty = new Smarty();
        $smarty->assign("nombre", $this->name);
        $smarty->assign("tipo", $this->type);
        $smarty->assign("evolucion", $this->evolution);

        // Verifica si la imagen del Pokémon existe
        if (file_exists($this->imagen)) {
            $smarty->assign("imagen", $this->imagen);
        } else {
            $smarty->assign("imagen", "img/default.png");
        }

        $smarty->assign("fondo", $this->fondo);
        $smarty->assign("hp", $this->properties['hp']);
        $smarty->assign("damage", $this->properties['damage']);
        $smarty->assign("defense", $this->properties['defense']);
        $smarty->assign("stamina", $this->properties['stamina']);

        $smarty->display("formulario.html");
    }
}

?>
