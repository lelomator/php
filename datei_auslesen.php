<?php
// Pfad zur Textdatei
$datei = 'deine_datei.txt';

// Inhalt der Textdatei auslesen
$inhalt = file_get_contents($datei);
echo $inhalt; // Den Inhalt zurücksenden
?>
