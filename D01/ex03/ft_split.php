#!/usr/bin/php
<?PHP

function ft_split($array)
{
    $tab = explode(" ", $array);
    $tab = array_filter($tab, 'strlen');
    sort($tab);
    return ($tab);
}

?>