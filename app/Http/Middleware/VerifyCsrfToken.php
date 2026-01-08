<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    // app/Http/Middleware/VerifyCsrfToken.php
protected $except = [
    'midtrans/notification',
     'midtrans/*',
  // Tambahkan ini
];
}