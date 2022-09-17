<?php

function cmp($a, $b)
{
    if ($a["id"] == $b["id"]) {
        return 0;
    }
    return $a["id"] < $b["id"];
}




$path = $_SERVER["DOCUMENT_ROOT"];

$jsondecode = json_decode(file_get_contents($path . "/data.json"), true);
$data = $jsondecode;

$var = $data["data"];



usort($var, "cmp");

$data["data"] = $var;


$new = json_encode($data);

echo $new;
