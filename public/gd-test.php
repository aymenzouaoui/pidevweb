<?php
// Vérifie si l'extension GD est activée
if (!extension_loaded('gd')) {
    echo 'L\'extension GD n\'est pas activée.';
} else {
    // Affiche les informations sur l'extension GD
    echo 'Extension GD activée. Version : ' . gd_info()['GD Version'];
}