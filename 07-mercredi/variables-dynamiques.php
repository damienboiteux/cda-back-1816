<?php

// Variables dynamiques / variables variables

$cd     = "15 €";
$dvd    = "30 €";

$produit = "cd";

echo $$produit; // attention au $$
echo ${$produit};
