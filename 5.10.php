<?php
// ==========================================
// ZADATAK 1: Pretvaranje minuta u sate i minute
// Funkcija prima ukupan broj minuta i ispisuje sate i minute pomoću dijeljenja i operatora %[span_1](start_span)[span_1](end_span).
// ==========================================
function pretvoriVrijeme($minute) {
   $sati = floor($minute / 60);
   $preostaleMinute = $minute % 60;
   echo "$minute minuta je $sati sata i $preostaleMinute minuta.\n<br>";
}
echo "<h3>Zadatak 1</h3>";
// Pozivanje funkcije za vrijednosti 75, 120 i 245[span_2](start_span)[span_2](end_span).
pretvoriVrijeme(75);
pretvoriVrijeme(120);
pretvoriVrijeme(245);
echo "<hr>";

// ==========================================
// ZADATAK 2: Cijena ulaznice
// Funkcija vraća cijenu ulaznice na temelju godina (mlađi od 7: 0€, 7-17: 5€, 18-64: 10€, 65+: 6€)[span_3](start_span)[span_3](end_span).
// ==========================================
function cijenaUlaznice($godine) {
   if ($godine < 7) {
       return 0;
   } elseif ($godine >= 7 && $godine <= 17) {
       return 5;
   } elseif ($godine >= 18 && $godine <= 64) {
       return 10;
   } else {
       return 6;
   }
}
echo "<h3>Zadatak 2</h3>";
// Testiranje funkcije s četiri različite dobi[span_4](start_span)[span_4](end_span).
$testGodine = [5, 16, 30, 70];
foreach ($testGodine as $godine) {
   echo "Za dob od $godine godina, cijena ulaznice je " . cijenaUlaznice($godine) . " €.\n<br>";
}
echo "<hr>";

// ==========================================
// ZADATAK 3: Izračun popusta
// Funkcija prima početnu cijenu i popust te vraća novu cijenu, ili početnu ako je popust manji od 0 ili veći od 100[span_5](start_span)[span_5](end_span).
// ==========================================
function konacnaCijena($cijena, $popust) {
   if ($popust < 0 || $popust > 100) {
       return $cijena;
   }
   return $cijena - ($cijena * ($popust / 100));
}
echo "<h3>Zadatak 3</h3>";
echo "Nova cijena (početna 80€, popust 25%): " . konacnaCijena(80, 25) . " €\n<br>";
echo "Nova cijena (početna 80€, neispravan popust 150%): " . konacnaCijena(80, 150) . " €\n<br>";
echo "<hr>";

// ==========================================
// ZADATAK 4: Brojanje slova u riječi
// Funkcija vraća koliko se puta zadano slovo pojavljuje u riječi koristeći for petlju i strlen() bez gotovih funkcija za brojanje[span_6](start_span)[span_6](end_span).
// ==========================================
function prebrojiSlovo($rijec, $slovo) {
   $brojac = 0;
   $duljina = strlen($rijec);
   for ($i = 0; $i < $duljina; $i++) {
       // Pretvaramo u mala slova kako bi pretraga bila neosjetljiva na velika/mala slova
       if (strtolower($rijec[$i]) == strtolower($slovo)) {
           $brojac++;
       }
   }
   return $brojac;
}
echo "<h3>Zadatak 4</h3>";
$broj = prebrojiSlovo("programiranje", "r");
echo "Slovo 'r' se u riječi 'programiranje' pojavljuje $broj puta.\n<br>";
echo "<hr>";

// ==========================================
// ZADATAK 5: Pronađi prolazne rezultate
// Funkcija vraća broj prolaznih rezultata (50 ili više) pomoću foreach petlje, a BONUS dodaje i funkciju brojNeprolaznih[span_7](start_span)[span_7](end_span).
// ==========================================
function brojProlaznih($bodovi) {
   $brojac = 0;
   foreach ($bodovi as $bod) {
       if ($bod >= 50) {
           $brojac++;
       }
   }
   return $brojac;
}
// BONUS funkcija
function brojNeprolaznih($bodovi) {
   $brojac = 0;
   foreach ($bodovi as $bod) {
       if ($bod < 50) {
           $brojac++;
       }
   }
   return $brojac;
}
echo "<h3>Zadatak 5</h3>";
$bodovi = [45, 78, 32, 91, 50, 67, 28, 84];
echo "Broj prolaznih (50+): " . brojProlaznih($bodovi) . "\n<br>";
echo "Broj neprolaznih: " . brojNeprolaznih($bodovi) . "\n<br>";
echo "<hr>";

// ==========================================
// ZADATAK 6: Evidencija temperatura
// U jednoj foreach petlji funkcija pronalazi najvišu i najnižu temperaturu bez max/min funkcija, broj dana iznad 15 °C, te izračunava prosjek kao BONUS[span_8](start_span)[span_8](end_span).
// ==========================================
function analizirajTemperature($temperature) {
   if (empty($temperature)) {
       return;
   }
   $max = $temperature[0];
   $min = $temperature[0];
   $daniIznad15 = 0;
   // Varijable za BONUS (prosjek)
   $zbroj = 0;
   $brojDana = 0;
   foreach ($temperature as $temp) {
       if ($temp > $max) {
           $max = $temp;
       }
       if ($temp < $min) {
           $min = $temp;
       }
       if ($temp > 15) {
           $daniIznad15++;
       }
       $zbroj += $temp;
       $brojDana++;
   }
   $prosjek = $zbroj / $brojDana;
   echo "Najviša temperatura: $max °C\n<br>";
   echo "Najniža temperatura: $min °C\n<br>";
   echo "Broj dana iznad 15 °C: $daniIznad15\n<br>";
   echo "Prosječna temperatura (BONUS): " . round($prosjek, 2) . " °C\n<br>";
}
echo "<h3>Zadatak 6</h3>";
$temperature = [12, 15, 11, 18, 21, 17, 14];
analizirajTemperature($temperature);
?>
 
 