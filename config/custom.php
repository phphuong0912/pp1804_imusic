<?php

return [
    'name' => env('APP_NAME', 'Laravel'),
    'role' => [
        'admin' => 1,
        'editor' => 2,
        'user' => 3
    ],
    'status' => [
        'success' => 200,
        'error' => 500
    ],
    'view_count' => 0,
    'paginate_5' => 5
];
