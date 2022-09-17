<?php


//function sort by id
function cmp($a, $b)
{
    if ($a["id"] == $b["id"]) {
        return 0;
    }
    return $a["id"] < $b["id"];
}



//variable for a quick path of my document
$path = $_SERVER["DOCUMENT_ROOT"];

//decode my data.json
$jsondecode = json_decode(file_get_contents($path . "/data.json"), true);
$data = $jsondecode;


// trick for sorting the id
$var = $data["data"];


//   (array, callback )
usort($var, "cmp");


// now it's sort by id 
$data["data"] = $var;


// encode the json file to be workable with the request
$new = json_encode($data);


// send the response
echo $new;
