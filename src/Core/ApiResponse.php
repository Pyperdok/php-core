<?php

namespace Tapigo\Core;

class ApiResponse
{
    public static function notFound($message = 'Not found')
    {
        return response()->json(
            ['message' => $message],
            404,
            ['X-Robots-Tag' => 'noindex']
        );
    }
}