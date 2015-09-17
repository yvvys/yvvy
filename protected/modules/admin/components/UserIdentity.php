<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	
	private $_userId;
	private $user_group = null;
	private $user_id;
	public function authenticate()
	{
		$user = User::model()->find('username = :name',array(":name"=>$this->username));
		
		//echo md5($this->password);
		//var_dump($user);die;

		if(!isset($user['username'])){
			$this->errorCode=self::ERROR_USERNAME_INVALID;
			
		
		}elseif($user['password']!==md5($this->password)){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;

		}
		else{
			$this->_userId= $users->id;
			$this->user_id=$user[id];

			$this->user_group=$user[user_group];
			$this->setPersistentStates($users->attributes);
			$this->errorCode=self::ERROR_NONE;
		
		}
		
		return $this->errorCode;
	}


	public function getPersistentStates()
    {
    	$group=json_decode($this->user_group,true);
    	$model=Usergroup::model()->findall();
    	foreach($model as $v){
    		if(in_array($v[group_id],$group)){
    			$allGroup[$v[group_id]]=$v[controller];	
    		}
    	}
    	

        return array(

            'user_group' => $allGroup,
            'user_id' => $this->user_id,
 
        );
    }
}