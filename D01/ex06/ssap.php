#!/usr/bin/php
<?PHP

$count = 1;
while ($count < $argc)
{
    if ($count != 1)
        $tab = $tab." ".$argv[$count];
    else
        $tab = $argv[$count];
    $count++;
}
$tab = explode (" ", $tab);
sort ($tab);
foreach ($tab as $elem)
    echo $elem."\n";
?>