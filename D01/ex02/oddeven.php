#!/usr/bin/php
<?PHP

while (42)
{
    echo "Entrez un nombre: ";
    $input = trim(fgets(STDIN));
    if (feof(STDIN) == TRUE)
        exit ();
    if (is_numeric($input))
    {
        echo "Le chiffre ".$input." est";
        if ($input % 2  == 0)
            echo " Pair\n";
        else
            echo " Impair\n";
    }
    else
        echo "'".($input)."'"." n'est pas un chiffre\n";
}
?>