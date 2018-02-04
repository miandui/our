<?php 
	namespace App\Http\Controllers\home;

	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use DB;
	use Cookie;
	class MineController extends CommonController{
		public function index(Request $request){
			/*$user_id = $request->cookie('user');
			$paper = DB::table('paper')->where('user_id',$user_id)->get();
			if($paper){
				echo $this->ajaxReturn('1','成功',$paper);
			}else{
				echo $this->ajaxReturn('0','网络繁忙',$paper);
			}*/
		}
	}
 ?>