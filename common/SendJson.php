<?php

class sendJson
{


    public static function sendJson(int $status, string $message, array $extra = [])  {
        $response = ['status' => $status];
        if ($message) $response['message'] = $message;
        http_response_code($status);
        echo json_encode(array_merge($response, $extra));
        exit;
    }

}