<?php

class Account{

	function __construct() {
		$this->DBase = new DataBase();
	}
	
	public function register($username, $password, $verifypassword, $email) {
		
		if($password != $verifypassword){
			echo 'Senhas erradas';
            	return false;
		}

		if(!Valid::isValidUsername($username)){
			echo 'Nome inválido';
            	return false;
		}

		if(!Valid::IsAlphaNumeric($username)){
			echo 'Somente caracteres alphanuméricos';
            	return false;
		}

		if(!Valid::isValidPassword($password)){
			echo 'Senha inválida';
            	return false;
		}
		

		if(is_array($this->GetUser($username))){
			echo 'Usuário ja existente';
            	return false;
		}

		$toprepare = array(
			'login' => $username,
			'password' => $password,
			'email' => $email
		);
		
		$query = "INSERT INTO account (login,password,email,admin,userban) VALUES (:login, :password, :email, 0, 0)";

            $output = $this->DBase->query($query, $toprepare);
		
		if(!$output){
		 echo 'Falha no procedimento, contate o administrador';
		 return false;
		}
		echo 'Cadastrado com sucesso!';
       	return true;
		
	}
	
	public function GetUser($username) {

		if(!Valid::isValidUsername($username)){
			echo 'Nome inválido';
            	return false;
		}

		if(!Valid::IsAlphaNumeric($username)){
			echo 'Somente caracteres alphanuméricos';
            	return false;
		}

		$toprepare = array(
			'login' => $username
		);

		$output = $this->DBase->queryfetch("SELECT * FROM account WHERE login = :login", $toprepare);

		if(is_array($output)) return $output;

		return;

	}

	public function GetUserByID($id) {

		if(!Valid::IsAlphaNumeric($id)){
			echo 'Somente caracteres alphanuméricos';
            	return false;
		}

		$toprepare = array(
			'id' => $id
		);

		$output = $this->DBase->queryfetch("SELECT * FROM account WHERE id = :id", $toprepare);

		if(is_array($output)) return $output;

		return;

	}

	public function UserLogin($username,$password) {

		if(!Valid::isValidUsername($username)){
			echo 'Nome inválido';
            	return false;
		}

		if(!Valid::IsAlphaNumeric($username)){
			echo 'Somente caracteres alphanuméricos';
            	return false;
		}

		if(!Valid::isValidPassword($password)){
			echo 'Senha inválida';
            	return false;
		}

		$toprepare = array(
			'username' => $username,
			'password' => $password
		);
		
		$query = "SELECT * FROM account WHERE login = :username AND password = :password";

		$output = $this->DBase->queryfetch($query, $toprepare);
		if(is_array($output)){

                  if($output[0]['userban'] == 1){
				echo 'Banido!';
                        return false;
			}

			session_regenerate_id();
			$_SESSION['valid'] = true;
			$_SESSION['id'] = $output[0]['id'];
			$_SESSION['name'] = $output[0]['login'];
			$_SESSION['adm'] = $output[0]['admin'];
			echo 'logado com sucesso';
		 	return true;

		} else {
		 echo 'Nome ou senha estão errados';
		}
		return false;
	}

	public function isLogged() {
		if($_SESSION['valid']) return true;
		return false;
	}

	public function unLog(){
		session_regenerate_id();
		$_SESSION['valid'] = false;
		$_SESSION['id'] = -1;
		$_SESSION['name'] = '';
		$_SESSION['adm'] = 0;
	}
	
}

?>