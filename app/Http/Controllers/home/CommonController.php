<?php 
	namespace App\Http\Controllers\home;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	class CommonController extends Controller{
		public function __construct(){
			
		}
		public function ajaxReturn($code,$msg='',$content=''){
			return json_encode(array('code'=>$code,'msg'=>$msg,'content'=>$content));
		}
	}
 ?>