<?php

namespace GeradorResponse\Interfaces;


interface GeraResponse
{

    public static function gerar($data, $message = 'enviando dados', $statusCode = 200, $success = true);
}