<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
///cấu hình cho phép đăng nhập truy cập
define('GOOGLE_CLIENT_ID', '735852135615-3d0gtt662m2b5600v8dokubrteqb73lv.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
  //PASTE_CLIENT_SECRET_HERE
$config = [
    'callback' => 'http://localhost:8080/google-sheet/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );