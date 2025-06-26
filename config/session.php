<?php

use Illuminate\Support\Str;

return [

    'driver' => env('SESSION_DRIVER', 'file'),

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    'encrypt' => false,

    'files' => storage_path('framework/sessions'),

    'connection' => env('SESSION_CONNECTION', null),

    'table' => env('SESSION_TABLE', 'sessions'),

    'store' => env('SESSION_STORE', null),

    'lottery' => [2, 100],

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_') . '_session'
    ),

    'path' => '/',

    'domain' => env('SESSION_DOMAIN', null),

    // 🔒 ESSENCIAL: só aceita cookies via HTTPS (obrigatório pro iPhone)
    'secure' => env('SESSION_SECURE_COOKIE', true),

    // 🔐 Impede acesso via JS (deixe true)
    'http_only' => true,

    // 🧠 Importante: iPhone/Safari exige SameSite correto
    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    // Deixe como false por padrão. Ative só se precisar para iframes.
    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),
];

