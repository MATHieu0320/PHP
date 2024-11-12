<?php
function Serveur(string $index): string
{
    if ($index === $_SERVER["SCRIPT_NAME"]) {

        return "active";
    }
    return "";

}
;