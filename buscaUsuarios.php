<?php

//Endereço REST
$endRest = "http://localhost/moodle/moodle/webservice/rest/server.php";

//token
$token = "10eba94168d45de7d63d8682b2eafb5b";

$func = "core_user_get_users";

//Parametros da função
$param =
array(
    "criteria" => array(
        "0" => array(
            "key" => '',
            "value" => ''
        ),
    )
);

require_once("curl.php");
$curl = new curl();

//ajustes finais
header("Content-Type: text/plain");
$serverUrl = $endRest . '?wstoken=' . $token . '&wsfunction=' . $func . "&moodlewsrestformat=json";

//solicitar serviço
$resp = ($curl->get($serverUrl, $param));
$json = json_decode($resp, true);

print_r($json['users']);
//Imprimir resposta:
//print_r($resp);