<?php
function checkIt(string $name, string $value, array $data): string // les parametres de la function sont placer ici 
// la variable $name soit le nom du parfun 
// la variable $ value soit le prix du parfum selection 
// la variable $data → le tableau dans lequel on vas chercher ces valeurs
{
    $attributes = '';  // l'attribut est une variable creer ici pour verifier l'etat checked
    // lorsque le formulaire arrive l'etat est vide

    if (isset($data[$name]) && in_array($value, $data[$name])) { // si le tableau data est different de vide et que la valeur de l'attribut name est different de vide
        $attributes .= 'checked'; // alors on place l'attribut checked
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="{$value}" $attributes>
HTML;
}

function checkedRadio(string $name, string $value, array $data, bool $isFirst = false): string
{
    $attributes = '';

    // Sélectionner le premier élément si $_GET est vide et c'est la première option
    if (empty($data) && $isFirst) {
        $attributes = 'checked';
    }
    // Sélectionner la valeur dans $_GET si présente
    if (isset($data[$name]) && $data[$name] === $value) {
        $attributes = 'checked';
    }

    return <<<HTML
    <input type="radio" name="$name" value="$value" $attributes>
HTML;
}





// 1 possede l'attribut 