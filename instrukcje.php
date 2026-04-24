<?php
$a = 10; $b = 2;
if ($b != 0) {
    echo "Wynik: " . ($a / $b);
} else {
    echo "Błąd: Nie można dzielić przez zero.";
}
$c = 3; $d = 4;
if ($b != 0 && $d != 0) {
    echo "Wynik: " . ($a / $b + $c / $d);
} else {
    echo "Błąd: Jeden z mianowników jest zerem.";
}

if ($b - 4 != 0) {
    echo "Wynik: " . (($a + 6) / ($b - 4));
} else {
    echo "Błąd: Dzielenie przez zero.";
}


echo ($a % 2 == 0) ? "Liczba jest parzysta." : "Liczba jest nieparzysta.";

if ($b != 0) {
    echo ($a % $b == 0) ? "Pierwsza jest podzielna przez drugą." : "Brak podzielności.";
} else {
    echo "Błąd: Nie dziel przez zero.";
}

$n = -5;
if ($n > 0) echo "Dodatnia";
elseif ($n < 0) echo "Ujemna";
else echo "Zero";

echo "Największa: " . max($a, $b, $c);

$liczby = [10, 2, 7];
sort($liczby);
echo "Kolejność rosnąca: " . implode(", ", $liczby);

$urodziny = new DateTime('2005-04-24');
$dzis = new DateTime();
$wiek = $dzis->diff($urodziny)->y;

echo ($wiek >= 18) ? "Pełnoletnia ($wiek lat)" : "Niepełnoletnia ($wiek lat)";

$znak = 'A';
if (ctype_upper($znak)) echo "Duża litera";
elseif (ctype_lower($znak)) echo "Mała litera";
elseif (ctype_digit($znak)) echo "Cyfra";
else echo "Inny znak";

$n = 121;
$s = (string)$n;
echo ($s[0] == $s[2]) ? "Jest palindromem" : "Nie jest";

$n = 22;
$c1 = floor($n / 10); // dziesiątki
$c2 = $n % 10;        // jedności

if (($c1 % 2 == 0 && $c2 % 2 == 0) || ($c1 + $c2 == 4)) {
    echo "Warunek spełniony.";
} else {
    echo "Warunek nie jest spełniony.";
}
?>
