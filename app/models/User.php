<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
	public static function DoRegister($data)
	{
		$res=DB::table('users')
		->insertGetID($data);
		return $res;
	}

	public static function search($username,$password){

		// $strSQL = "SELECT * FROM Admin WHERE userName=$username AND userPassword=$password";



		// $result1 = DB::table('users')->	

		 // $result = DB::table('users')->
		 // 	where('userName','=',$username)
		 // 	where('userPassword','=',$password);

		 		// ->first();


		 		// $resultJson = json_encode($result);
			 // print_r($result);

			// print_r($strSQL);


			 if (Auth::attempt(array('userName' => $username, 'userPassword' => $password, 'userIsActive' => 'N')))
					{
					  
							echo 'User is not Active';

					    
					}


	}

}