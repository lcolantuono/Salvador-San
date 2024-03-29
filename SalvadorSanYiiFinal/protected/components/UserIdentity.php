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
/*	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}*/
        private $id;
 
    public function authenticate()
    {
        /*@var $record Usuario*/
        $record=  Usuario::model()->findByAttributes(array('Usuario'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->Clave!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id=$record->Usuario;
            $this->setState('idUsuario', $record->id);
            $this->setState('NombreApellido', $record->NombreApellido);
            $this->setState('Email', $record->Email);
            $this->setState('idRol', $record->idRol);
            $this->setState('Rol',$record->idRol0->rol);
            $this->errorCode=self::ERROR_NONE;
            //exit('valida useriden');
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
    }
}