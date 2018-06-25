#!/usr/bin/php
<?PHP

if ($argc == 0)
{
    echo "\n";
    return ;
}

$res = trim($argv[1], " \t");
$cpt = 0;
$res = preg_split("/[\s]+/", $res);
$max = count($res);

while ($cpt < $max)
{
    echo $res[$cpt];
    if ($cpt != $max - 1)
        echo " ";
    $cpt++;
}
echo "\n";

?>