<?php

class Story{
	
	function __construct() {
		$this->DBase = new DataBase();
	}

	public function add($title, $bbcode) {

		$account = new Account();
	
		if(!Valid::IsAlphaNumeric($title)){
			echo 'Somente caracteres alphanuméricos no título';
            	return false;
		}

		$toprepare = array(
			'title' => $title,
			'bbcode' => $bbcode,
			'autor' => $account->GetUserByID($_SESSION['id'])[0]['id']
		);
		
		$query = "INSERT INTO story (title,bbcodetext,autor) VALUES (:title, :bbcode, :autor)";
		
		if(!$this->DBase->query($query, $toprepare)) echo 'Falha no procedimento, contate o administrador';

		$result = $this->DBase->queryfetch("SELECT * FROM story ORDER BY id DESC LIMIT 1", array(''));

		if(is_array($result)) return $result[0]['id'];
		
       	return true;
		
	}
	
	public function List() {

		$result = $this->DBase->queryfetch("SELECT * FROM ( SELECT * FROM story ORDER BY id DESC LIMIT 50) sub ORDER BY id DESC");

		if(is_array($result)) return $result;

		return;

	}

	public function search($bytitle){

		$bytitleR = str_replace(" ", "%", $bytitle);
		$bytitleR = '%'.$bytitleR.'%';

		$result = $this->DBase->queryfetch("SELECT * FROM story WHERE CONVERT(title USING utf8mb4) LIKE _utf8 ? collate utf8_unicode_ci ORDER BY id DESC LIMIT 50;", array($bytitleR));

		if(is_array($result)) return $result;

		return;


	}

	public function GetById($id) {

		$result = $this->DBase->queryfetch("SELECT * FROM story WHERE id=?", array($id));

		if(is_array($result)) return $result;

		return;

	}

	public function edit($id, $title, $bbcode) {

		if(!Valid::IsUnsignedNumber($id)) return false;

		$toprepare = array(
			'title' => $title,
			'id' => $id,
			'bbcode' => $bbcode
		);
		
		$query = "UPDATE story set title=:title, bbcodetext=:bbcode WHERE id = :id";

		$result = $this->DBase->queryfetch($query, $toprepare);
		if(is_array($result)){
		 return true;
		} else {
		 echo 'Falha';
		}
		return false;
	}

	public function delete($id) {

		if(!Valid::IsUnsignedNumber($id)) return false;

		$toprepare = array(
			'id' => $id
		);
		
		$query = "DELETE from story WHERE id = :id";

		$result = $this->DBase->queryfetch($query, $toprepare);
		if(is_array($result)){
		 return true;
		} else {
		 echo 'Falha';
		}
		return false;
	}
	
}

?>