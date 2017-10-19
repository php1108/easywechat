<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class ApiController extends Controller
{
    public function api(){
        $app = new Application($this->options);
        $response = $app->server->serve();
        // 将响应输出
        return $response;
    }

}
