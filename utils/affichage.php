<?php

function addButton(string $label = "Valider", string $classe = "primary"): string
{
    return "<button class='btn btn-$classe mt-2'>$label</button>";
}

/**
 * Affiche un champ de saisie de type texte
 *
 * @param string $name name HTML
 * @param string $label label HTML
 * @param string $placeholder
 * @param boolean $required
 * @param string $error 
 * @return string
 */
function addText(
    string $name,
    string $label,
    string $placeholder = "",
    bool $required = false,
    string $error = ""
): string {
    $html   =   "<div class='form-group mt-4'>";
    $html   .=  "<label for=$name class='form-label'>$label</label>";
    $html   .=  "<input type='text' name=$name id=$name class='form-control'";
    $html   .=  " value='" . (isset($_POST[$name]) ? $_POST[$name] : '') . "'";
    $html   .=  empty($placeholder) ? '' : " placeholder='$placeholder'";
    $html   .=  $required ? " required" : "";
    $html   .=  "/>";
    $html   .= '</div>';
    $html   .= '<div>';
    $html   .= !empty($error) ? $error : '';
    $html   .= '</div>';

    return $html;
}


function longueurMini(string $field, int $min = 0)
{
    return strlen($field) > $min;
}

function longueurMaxi(string $field, int $max)
{
    return strlen($field) < $max;
}
