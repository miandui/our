<?php
	namespace App\Http\Controllers\home;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	class CommonController extends Controller{
		const SIGN_ERROR = 40004;
		const SUCCESS = 1;
		public function __construct(){
			$data = $_POST ? $_POST : $_GET;
	        $sign = $data['sign'];
	        unset($data['sign']);
	        ksort($data);
	        $query = [];
	        foreach ($data as $key => $val) {
	            $query[] = "$key=$val";
	        }
	        $query = implode('&',$query);
	        $key = "dshiu3hk2j1h4kjksjhf";
	        $sign1 = md5($query . $key);
	        if($sign1 != $sign){
	        	echo $this->ajaxReturn(self::SIGN_ERROR,'验证签名错误');
	        	return false;
	        }
		}
		public function ajaxReturn($code,$msg='',$content=''){
			return json_encode(array('code'=>$code,'msg'=>$msg,'content'=>$content));
		}
	}
 ?>