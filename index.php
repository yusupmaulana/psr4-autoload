<?php

use App\User;
use App\Forum;
use App\Eloquent\Post as P;
use Carbon\Carbon;

require_once 'vendor/autoload.php';

echo Carbon::now();

// new User();
// new Forum();
// new P();

// alternative (langsung manggil namespace nya, kalo nggak pake use)
// new App\User();
// new App\Forum();
// new App\Eloquent\Post();
