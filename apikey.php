<?php

function getKey() {
    return ["1234", "rahasia", "xyz"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())){
        return true;
    } else {
        return false;
    }

}

function jsonOut($status, $message, $data){
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getMusik() {
    $musik = [
        ["title" => "Above The Clouds", "penyanyi" => "Day6"],
        ["title" => "Rainbow", "penyanyi" => "NCT Dream"],
        ["title" => "Peaches", "penyanyi" => "Justin Bieber"]
    ];
    return $musik;
}

if (isValid($_GET)){
    jsonOut("berhasil", "apikey valid", getMusik());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}
?>