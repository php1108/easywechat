<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class ApiController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');
        $wechat->server->setMessageHandler(function($message){
            return "欢迎关注 overtrue！";
        });

        Log::info('return response.');

        return $wechat->server->serve();
    }

//    public function serve()
//    {
//        Log::info('request arrived.');
//        $app = app('wechat');
//        $app->server->setMessageHandler(function($message) use ($app){
//            if ($message->MsgType=='event') {
//                $user_openid = $message->FromUserName;
//                if ($message->Event=='subscribe') {
//                //下面是你点击关注时，进行的操作
//                $user_info['unionid'] = $message->ToUserName;
//                $user_info['openid'] = $user_openid;
//                $userService = $app->user;
//                $user = $userService->get($user_info['openid']);
//                $user_info['subscribe_time'] = $user['subscribe_time'];
//                $user_info['nickname'] = $user['nickname'];
//                $user_info['avatar'] = $user['headimgurl'];
//                $user_info['sex'] = $user['sex'];
//                $user_info['province'] = $user['province'];
//                $user_info['city'] = $user['city'];
//                $user_info['country'] = $user['country'];
//                $user_info['is_subscribe'] = 1;
//                if (WxStudent::weixin_attention($user_info)) {
//                    return '欢迎关注';
//                }else{
//                    return '您的信息由于某种原因没有保存，请重新关注';
//                }
//            }else if ($message->Event=='unsubscribe') {
//                //取消关注时执行的操作，（注意下面返回的信息用户不会收到，因为你已经取消关注，但别的操作还是会执行的<如：取消关注的时候，要把记录该用户从记录微信用户信息的表中删掉>）
//                if (WxStudent::weixin_cancel_attention($user_openid)) {
//                    return '已取消关注';
//                }
//            }
//            }
//
//        });
//
//        Log::info('return response.');
//        return $app->server->serve();
//    }
//    /**
//     * 处理微信的请求消息
//     *
//     * @return string
//     */
//    public function serve1()
//    {
////        $options = config('app.options');
//        $options = [
//            'debug'  => true,
//            'app_id' => 'wx8c090e47413e84ec',
//            'secret' => 'c144249dc9e67f9928bf921d1c69dfbf',
//            'token'  => 'weixin',
//            // 'aes_key' => null, // 可选
//            'log' => [
//                'level' => 'debug',
//                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
//            ],
//            //…
//        ];
//        $app = new Application($options);
//// 从项目实例中得到服务端应用实例。
//        $server = $app->server;
//        $server->setMessageHandler(function ($message) {
//            // $message->FromUserName // 用户的 openid
//            // $message->MsgType // 消息类型：event, text....
//            return "您好！欢迎关注我!";
//        });
//        $response = $server->serve();
//        return $response;
//
//    }
}
