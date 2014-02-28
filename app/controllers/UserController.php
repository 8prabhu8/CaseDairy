<?php
class UserController extends BaseController
{

	
	public function DoRegister()
	{
		
		$data=Input::all();
		// print_r($data); exit;
		$password = Hash::make($data['userPassword']);
		$username = $data['userName'];
		$data1=array('userName'=>$username,'userPassword'=>$password);
		$res=User::DoRegister($data1);
		print_r($res);
}

		public function search(){

			echo "in search controller";


			// $data=Input::all();
			 $username = 'jack';
			 $password = 'dorson';

			 $result = User::search($username,$password);
			
		}

}