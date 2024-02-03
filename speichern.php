<?php
if(isset($_POST['ergebnis'])) {
    // Pfad zur Textdatei für das Ergebnis
    $datei = 'ergebnis.txt';

    // Das Ergebnis in die Textdatei schreiben
    $ergebnis = $_POST['ergebnis'];
    file_put_contents($datei, $ergebnis);
    echo "Ergebnis erfolgreich gespeichert: " . $ergebnis;
} else {
    echo "Fehler: Ergebnis nicht empfangen.";
}
?>
