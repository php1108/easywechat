<?php
return [
    'app_id' =>env('WECHAT_APPID','wx8c090e47413e84ec'),
    'secret' =>env('WECHAT_SECRET','c144249dc9e67f9928bf921d1c69dfbf'),
    'token' =>env('WECHAT_TOKEN','weixin'),
    'aes_key' =>env('WECHAT_AES_KEY',''),

    'log' => [
        'level' => env('WECHAT_LOG_LEVEL','debug'),
        'file' => env('WECHAT_LOG_FILE',storage_path('logs/wechat.log'))
    ],

    'oauth' => [
        'only_wechat_browser' => false,
        'scopes'   => ['snsapi_userinfo'],
        'callback' => '',
    ],
];