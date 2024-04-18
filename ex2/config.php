<?php

ini_set('session.use_only_cookies',1);

ini_set('session.use_strict_mode',1);

session_set_cookie_params([   // 設定cookie存活條件
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (!isset($_SESSION['last_regenerate'])){  // 如果session 未設定 則產生id 設定 session 為現在時間

    session_regenerate_id(true); 
    $_SESSION['last_regenerate'] = time();
}else{    // 如果有設定 看看紀錄的時間是否與現在時間 相差大於30分鐘 ， 如果大於再產生一次 

    $interval = 60*30;

    if (time() - $_SESSION['last_regenerate'] >= $interval){
        
        session_regenerate_id(true); 
        $_SESSION['last_regenerate'] = time();
    }
}

session_create_id()
?>