<?php

namespace Tapigo\Core;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class Notification {
    const PUSH = 'PUSH';
    const EMAIL = 'EMAIL';

    public static function message(string $type, array $data) {
        try {
            $data = [
                'type' => $type,
                'data' => $data
                'owner_id' => $data['owner_id'] ?? null,
                'owner_type' => $data['owner_type'] ?? null,
            ];

            return Http::post(url('/api/notification/message'), $data);
        } catch(Throwable $th) {
            Log::error($th->getMessage());

            return null;
        }
    }
}