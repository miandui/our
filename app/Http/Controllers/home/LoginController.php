<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    private $oauth_info;
    public function index()
    {
        return view('home.login');
    }
    public function oauth(Request $request)
    {
        $oauth = $request->input();//接受oauth_id
        $this->oauth_info = DB::table('oauth')->where('oauth_id',$oauth['oauth_id'])->first();//根据oauth_id查询信息
        $url= $this->oauth_info['api_url'];//获取code的url
        $param =array(
            'response_type'=>'code',
            'client_id'=> $this->oauth_info['app_id'],
            'redirect_uri'=>$this->oauth_info['redirect_url'],
            'state'=>md5(rand(1000,9999))
        );
        $url .= '?'.http_build_query($param);//把数组中的参数拼接成在URL上
        echo $url;
    }
    public function login(Request $request)
    {
        $info = $request->input();
        if(empty($info))
        {
            return redirect('home/index');
        }
        $oauth_name = $info['oauth_name'];
        $code = $info['code'];
        $this->oauth_info = DB::table('oauth')->where('oauth_name',$oauth_name)->first();
        $access_token = $this->get_qq_token($code);
        $open_id = $this->get_open_id($access_token);
        $app_id=$this->oauth_info['app_id'];
        $user_info = $this->get_oauth_info($access_token,$app_id,$open_id);
        $info = $this->set_user_info($user_info);//用户信息
       session(['id'=>$info['oauth_user_id'],'name'=>$info['oauth_user_name']]);
       return redirect('home/index');
    }
    public function get_qq_token($code)
    {
        $get_access_token = 'https://graph.qq.com/oauth2.0/token';
        $param = [
            'grant_type'=>'authorization_code',
            'client_id'=>$this->oauth_info['app_id'],
            'client_secret'=>$this->oauth_info['app_key'],
            'code'=>$code,
            'redirect_uri'=>$this->oauth_info['redirect_url'],
        ];
        $get_access_token .= '?'.http_build_query($param);
        $token_data = file_get_contents($get_access_token);
        return $token_data;
    }
    public function get_open_id($access_token)
    {
        $get_openid_url = 'https://graph.qq.com/oauth2.0/me?'.$access_token;
        $open_data = file_get_contents($get_openid_url);
        preg_match('#(\{.*\})#',$open_data,$open_json);
        $open_id = json_decode($open_json[0],true)['openid'];
        return $open_id;
    }
    public function get_oauth_info($access_token,$app_id,$open_id)
    {
        $get_user_info = 'https://graph.qq.com/user/get_user_info?'.$access_token.'&oauth_consumer_key='.$app_id.'&openid='.$open_id;
        $user_info = file_get_contents($get_user_info);
        $user_info = json_decode($user_info,true);
        return $user_info;
    }
    public function set_user_info($user_info)
    {
        $oauth_user_name = $user_info['nickname'];
        $oauth_user_gender = $user_info['gender'];
        $oauth_user_city = $user_info['city'];
        $info = DB::table('oauth_user')->where('oauth_user_name',$oauth_user_name)->first();
        if(!empty($info))
        {
            return $info;die;
        }else{
             DB::table('oauth_user')->insert([
                'oauth_user_name'=>$oauth_user_name,
                'oauth_user_gender'=>$oauth_user_gender,
                'oauth_user_city'=>$oauth_user_city
            ]);
            $info = DB::table('oauth_user')->where('oauth_user_name',$oauth_user_name)->first();
        }
       return $info;
    }
}