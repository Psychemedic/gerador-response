<?php

namespace GeradorResponse;


use GeradorResponse\Interfaces\GeraResponse;


class PsyAPI implements GeraResponse
{

    public static function gerar($data, $message = 'enviando dados', $statusCode = 200, $success = true)
    {

        return [
            'success' => $success,
            'statusCode' => $statusCode,
            'message' => $message,
            'data' => $data,
        ];
    }

}