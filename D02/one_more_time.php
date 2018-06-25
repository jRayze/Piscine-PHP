#!/usr/bin/php
<?PHP

if ($argc == 1)
{
    echo "\n";
    return ;
}

$time = $argv[1];
$chars = preg_split('/ /', $time, -1);
$ret = 1;

print_r ($chars);

$day = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$month = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");


foreach ($day as $elem) {
    if ($elem == $chars[0])
    {
        $ret = 0;
    }
}

if ($chars[1] <= 31)

foreach ($day as $elem) {
    if ($elem == $chars[0])
    {
        $ret = 0;
    }
}
foreach ($day as $elem) {
    if ($elem == $chars[0])
    {
        $ret = 0;
    }
}


if ($ret == 0)
    echo "OK\n";

if ($ret == -1)
{
    echo "Wrong Format\n";
    return ;
}

?>