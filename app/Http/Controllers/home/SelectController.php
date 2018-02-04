<?php 
	namespace App\Http\Controllers\home;

	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use DB;
	class SelectController extends CommonController{
		public function __construct(){

		}
		public function index($id,$can){
			$user = DB::table('user')->where('user_id','=',$id)->first();
			if($user){
				if($user['url']==$can){
					
				}
			}
		}
	}
 ?>