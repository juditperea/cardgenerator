<?php
/* Smarty version 4.3.4, created on 2023-12-01 12:49:32
  from '/data/sites/web/gomugomunocat/www/m7/uf2/pokemon/formulario.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6569c84cd27ff8_13936121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ab289f482239b1e0c817016647a50c10a69fe6' => 
    array (
      0 => '/data/sites/web/gomugomunocat/www/m7/uf2/pokemon/formulario.html',
      1 => 1701431366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6569c84cd27ff8_13936121 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Pokémon</title>
    <style>
        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #pokemonTypes {
            display: flex;
            flex-wrap: wrap;
        }

        #pokemonTypes label {
            background-color: white;
            color: black;
            padding: 8px 12px;
            margin: 4px;
            border-radius: 4px;
            cursor: pointer;
            border: 1px solid black;
        }

        #pokemonTypes input:checked+label {
            background-color: rgb(0, 255, 0);
        }


        .divseparador {
            display: flex;
            flex-direction: column;
            margin-top: -10px; 
        }

        .divseparador2 {
            display: flex;
            flex-direction: row;
            
        }
        .separador{
            margin-top: -10px;
        }
        .espacio {
            margin-left: 10px;
        }

        .espacio2 {
            margin-left: 50px;
            margin-bottom:5px;
        }

        .small {
            width: 180px;
        }

        .titulo {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .carta {
        background-image: url('<?php echo $_smarty_tpl->tpl_vars['fondo']->value;?>
');
        background-size: cover; 
        background-position: center;
        background-repeat: no-repeat;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        height: 380px;
        width: 250px;
        margin-left: 40px;
        position: relative;
    }

        .foto {
            position: absolute;
            top: 5px;
            left: 20px;
            width: 250px;
            height: 150px;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        h3 {
            margin-top: 10px;
            text-align: center;
            margin-bottom: 10px; 
        }

    </style>
</head>

<body>
    <form id="pokemonForm" method="POST" enctype="multipart/form-data">
        <h1 class="titulo">Creador cartas Pokémon</h1>
        <label for="pokemonName">Nombre del Pokémon:</label><br>
        <input type="text" id="pokemonName" name="pokemonName" class="small" required>
            <label for="pokemonType">Tipo del Pokémon:</label>
            <select id="pokemonType" name="pokemonType">
                <option value="null"></option>
                <option value="Fuego">Fuego</option>
                <option value="Agua">Agua</option>
                <option value="Planta">Planta</option>
                <option value="Tierra">Tierra</option>
                <option value="Lucha">Lucha</option>
                <option value="Hada">Hada</option>
                <option value="Normal">Normal</option>
                <option value="Psíquico">Psíquico</option>
                <option value="Dragón">Dragón</option>
                <option value="Eléctrico">Eléctrico</option>
                <option value="Roca">Roca</option>
                <option value="Metal">Metal</option>
                <option value="Fantasma">Fantasma</option>
            </select>


        <label for="evolutionLevel">Nivel de Evolución (1-5):</label>
        <input type="number" id="evolutionLevel" name="evolutionLevel" min="1" max="5" class="small" required>

        <div class="divseparador2">
            <div class="divseparador">
                <label for="hp" >HP:</label>
                <input type="text" id="hp" name="hp" required>

                <label for="stamina">Speed:</label>
                <input type="text" id="stamina" name="stamina" required>
            </div>
            <div class="separador">
                <label for="damage" class="espacio">ATK:</label>
                <input type="text" id="damage" name="damage" class="espacio" required>

                <label for="defense" class="espacio">Defense:</label>
                <input type="text" id="defense" name="defense" class="espacio" required>
            </div>
        </div>

        <button type="submit">Crear Carta</button>
    </form>
    <div class="carta">
        <div class="foto">
        <h3><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h3>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" height="150" width="240" name="imagen"/>
        <p>Tipo <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</p>
        <p>Nivel evolucion(1-5): <?php echo $_smarty_tpl->tpl_vars['evolucion']->value;?>
</p>
        
        <div class="divseparador2" >
            <div class="divseparador">
                <p style="margin-right:70px;">HP: <?php echo $_smarty_tpl->tpl_vars['hp']->value;?>
</p>
                <p style="margin-top:-5px;">ATK: <?php echo $_smarty_tpl->tpl_vars['damage']->value;?>
</p>
            </div>
            <div class="divseparador">
                <p class="espacio2">Defense: <?php echo $_smarty_tpl->tpl_vars['defense']->value;?>
</p>
                <p class="espacio2" style="margin-top:5px;">Speed: <?php echo $_smarty_tpl->tpl_vars['stamina']->value;?>
</p>
            </div>
        </div>
    </div>
</div>
</body>

</html> <?php }
}
