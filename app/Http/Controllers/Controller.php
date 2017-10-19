<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    var $options = [
        'debug'  => true,
        'app_id' => 'wx8c090e47413e84ec',//'your-app-id',
        'secret' => 'c144249dc9e67f9928bf921d1c69dfbf',//'you-secret',
        'token'  => 'wexin',
        // 'aes_key' => null, // 可选
        'log' => [
            'level' => 'debug',
            'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
        ],
        //...
    ];
}
