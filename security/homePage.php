<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');


require_once __DIR__ . '/../common/connection.php';
require_once __DIR__ . '/../common/SendJson.php';
require_once __DIR__ . '/../security/jwtHandler.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET') :

    $headers = getallheaders();

    if (array_key_exists('Authorization', $headers) && preg_match('/Bearer\s(\S+)/', $headers['Authorization'], $matches)) :
        $data = decodeToken($matches[1]);
        $userId = (int) $data;
        if (!is_numeric($data)) :
            sendJson::sendJson(401, 'Invalid User!');
        else:
            sendJson::sendJson(200 , 'somet');
        endif;


    endif;

endif;
