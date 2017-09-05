<?php

//Endereço REST
$endRest = "http://localhost/moodle/moodle/webservice/rest/server.php";

//token
$token = "10eba94168d45de7d63d8682b2eafb5b";

$func = "enrol_manual_enrol_users";

//Parametros da função
$param =
array(
    "enrolments" => array(
        "0" => array(
            "roleid" => 3,
            "userid" => 2,
            "courseid" => 2
        ),
        "1" => array(
            "roleid" => 3,
            "userid" => 2,
            "courseid" => 3
        ),
        "2" => array(
            "roleid" => 5,
            "userid" => 3,
            "courseid" => 2
        ),
        "3" => array(
            "roleid" => 5,
            "userid" => 4,
            "courseid" => 3
        ),
    )
);

require_once("curl.php");
$curl = new curl();

//ajustes finais
header("Content-Type: text/plain");
$serverUrl = $endRest . '?wstoken=' . $token . '&wsfunction=' . $func;

//solicitar serviço
$resp = $curl->post($serverUrl, $param);

//Imprimir resposta:
print_r($resp);