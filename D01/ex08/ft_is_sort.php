#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
    $cpy = $tab;
    sort($cpy);
    $count = 0;
    $lenght = count($cpy);
    while ($count < $lenght)
    {
        if ($tab[$count] != $cpy[$count])
            return FALSE;
        $count++;
    }
    return TRUE;
}
?>