<?php
// creo una variabile contenente la parola "cattiva"
$badword = $_GET["cattivo"];
// creo un testo
$testo = "Questo è un testo cattivo";
// creo i caratteri da sostituire con la parola "cattiva"
$hidden = "***";
// controllo se la frase contiene la parola "cattiva"
$parolecondivise = strpos($testo, $badword);
// controllo se la frase che contiene la parola non è diversa 
if ($parolecondivise !== true) {
$frase_censurata = str_replace($badword, $hidden, $testo);
} else {
    // stampo a schermo la frase se non è censurata
    echo $testo;
}
?>
<h1><?php echo $frase_censurata; ?></h1>
