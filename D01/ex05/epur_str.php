#!/usr/bin/php
<?PHP

$res = trim($argv[1], " ");
$res = explode(" ", $res);
$counter = count($res);
foreach ($res as $elem)
{
    if ($elem != NULL)
    {
        echo $elem;
        if ($elem != $res[$counter -1])
            echo " ";
    }
}
echo "\n";
?>