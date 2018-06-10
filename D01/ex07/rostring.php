#!/usr/bin/php
<?PHP

$str = trim($argv[1]);
$tab = explode(" ", $str);
$tmp = $tab[0];
array_push($tab, $tmp);
$tmp = array_shift($tab);

foreach ($tab as $elem)
{
    if ($elem != NULL)
    {
        if ($elem == $tab[0])
            echo $elem;
        else
            echo " ".$elem;
    }
}
echo "\n";
?>