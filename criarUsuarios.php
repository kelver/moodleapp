<?php

//Endereço REST
$endRest = "http://localhost/moodle/moodle/webservice/rest/server.php";

//token
$token = "10eba94168d45de7d63d8682b2eafb5b";

$func = "core_user_create_users";

//Parametros da função
$param =
array(
    "users" => array(
        "0" => array(
            "username" => "macahdo",
            "password" => "Machado@#123",
            "firstname" => "Machado",
            "lastname" => "de Assis",
            "email" => "machado.assis@gmail.com.br"
        ),
        "1" => array(
            "username" => "alencar",
            "password" => "Jose@#123",
            "firstname" => "Jose",
            "lastname" => "de Alencar",
            "email" => "jose.alencar@gmail.com.br"
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