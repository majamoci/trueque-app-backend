<?php

namespace App\Exceptions;

use Exception;

class ApiErrorException extends Exception
{
    public function report()
    {
        # code...
    }

    /**
     * Este es el mensaje que se va a mostrar cuando no se
     * encuentre un contenido en la BD
     */
    public function render($request)
    {
        return response()->json([
            'status_code' => $this->getCode(),
            'message' => $this->getMessage()
        ], $this->getCode());
    }
}
