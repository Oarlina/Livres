<h1>POO livres:</h1>

<?php
// Pour automatiquement chargé les classes
spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

// 
$stephen = new Auteur ("Stephen", "King");

$ca = new Livre ("Ca", "1986", "1138", "20", $stephen);
$simetierrre= new Livre ("Simetierrre", "1983", "374", "15", $stephen);
$fleau = new Livre ("Le Fléau", "1978", "823", "14", $stephen);
$hining = new Livre ("Shining", "1977", "447", "16", $stephen);

// Méthode manuelle
echo $stephen;
echo $ca->getInfos();
echo $simetierrre->getInfos();
echo $fleau->getInfos();
echo $hining->getInfos();

// Méthode automatique
echo $stephen->afficherBlibliographie();


?>