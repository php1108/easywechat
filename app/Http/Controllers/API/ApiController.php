<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class ApiController extends Controller
{
    public function api()
    {

        $options = [
            'debug' => true,
            'app_id' => 'wx8c090e47413e84ec',//'your-app-id',
            'secret' => 'c144249dc9e67f9928bf921d1c69dfbf',//'you-secret',
            'token' => 'weixin',
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file' => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],
            //...
        ];
        $app = new Application($options);
        $response = $app->server->serve();
        // 将响应输出
        return $response;
    }


}
