<?php 
	namespace App\Http\Controllers\home;

	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use DB;
	class CreateController extends CommonController{
		//public 
		public function index(Request $request){
			//接值
			$all = $request->input();
			$time = $_SERVER['REQUEST_TIME'];
			DB::beginTransaction();
			try {
				$id = DB::table('paper')->insertGetId(array('title'=>$all['title'],'create_time'=>$time));
				if($id){
					$data = [];
					foreach ($all['tm'] as $key=>$value) {
						$data[$key]['question_name'] = $value[0];
						$data[$key]['paper_id'] = $id;
						$data[$key]['type_id'] = $value[1];
					}
					$ti = DB::table('subject_question')->insert($data);
					if($ti){
						$question_id = DB::table('subject_question')->select('question_id')->where('paper_id','=',$id)->get();
						$question_id = array_column($question_id, 'question_id');
						$select = [];
						//因为要一次如多条，循环数据
						foreach($all['xuan'] as $key=>$value){
							foreach($value as $k=>$v){
								$select[$key][$k]['question_id'] = $question_id[$key];
								$select[$key][$k]['scontent'] = $v;
							}
						}
						//print_r($select);die;
						$name_list = [];
						foreach ($select as $key => $a) {
							array_walk($a, function($value, $key) use (&$name_list ){
							$name_list[] = $value; });
						}

						$res = DB::table('select')->insert($name_list);
						if($res){
							DB::commit();
						}
					}
				}
			} catch (\Exception $e){
				DB::rollBack();
				echo $this->ajaxReturn('0','网络繁忙');
				die;
			}
			$str['can'] = md5($this->sui($id));
			$strr = "http://127.0.0.1/da1/laravel/one/public/index.php/home/select".'/'.$id.'/'.$str['can'];
			$str['url'] = $strr;
			$result = DB::table('paper')->where("paper_id",'=',$id)->update($str);
			echo $this->ajaxReturn('1','保存成功',$strr);
		}
		public function sui($id){
			$str=$id."QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
			$str=substr(str_shuffle($str),5,4);
			return $str;
		}
	}
 ?>