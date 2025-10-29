<?php

use Illuminate\Support\Facades\Http;

class Notification {
    const PUSH = 'PUSH';
    const EMAIL = 'EMAIL';

    public static function message(string $type, array $data) {
        $data = [
            'type' => $type,
            'data' => $data
            'owner_id' => $data['owner_id'] ?? null,
            'owner_type' => $data['owner_type'] ?? null,
        ];

        Http::post(url('/api/notification/message'), $data);
    }
}