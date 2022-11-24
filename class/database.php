<?php

class DataBase {
	
	function __construct() {
		try {

			$this->datab = new PDO('mysql:host=localhost;dbname=ltstorytime', 'user', 'awfeegh6tgeafdwegreh463');
			
		} catch (PDOException $e) {
			echo "PDOException: ".$e->getMessage();
		}
		
	}
	
	public function query($sql, $array=array('')) {
		$query = $this->datab->prepare($sql);
		if($query->execute($array)) {
			$query->closeCursor();
			return true;
		} else {
			$this->query_error($query);
			return false;
		}
	}
	
	public function queryfetch($sql, $array=array('')) {
		$query = $this->datab->prepare($sql);
		if($query->execute($array)) {
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			$query->closeCursor();
			if(count($result) > 0){
				return $result;
			} else {
				return false;
			}
		} else {
			$this->query_error($query);
			return false;
		}
	}
	
	private function ex_error() {
	  echo $this->datab->errorInfo();
	}

	private function query_error($query){
	 echo $query->errorInfo();
	}

}

?>