<?php
//Endereço REST
$endRest = "http://localhost/moodle/moodle/webservice/rest/server.php";

//token
$token = "10eba94168d45de7d63d8682b2eafb5b";

$func = "core_course_create_courses";

//Parametros da função
$param =
array(
    "courses" => array(
        "0" => array(
            "fullname" => "Curso capacitação 01",
            "shortname" => "CC1",
            "categoryid" => '1'
        ),
        "1" => array(
            "fullname" => "Curso capacitação 02",
            "shortname" => "CC2",
            "categoryid" => '1'
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