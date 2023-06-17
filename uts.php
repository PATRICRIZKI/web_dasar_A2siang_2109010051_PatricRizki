<?php
$json = '{
    "kalimat1":"pateh berkunjung ke Padang pada tahun 2011.",
    "kalimat2":"pateh berkunjung ke Nabire pada tahun 2018.",
    "kalimat3":"pateh berkunjung ke Yogyakarta pada tahun 2022."
}';
$kalimat = json_decode($json)
echo "{$kalimat->kalimat1} <br>";
echo "{$kalimat->kalimat2} <br>";
echo "{$kalimat->kalimat3} <br>";