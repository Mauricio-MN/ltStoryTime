<?php

class Valid{

	public static function IsUnsignedNumber($integer){
		return (bool)preg_match("/^\+?[0-9]+$/",$integer);
	}

	public static function IsAlphaNumeric($string){
		return (bool)preg_match("/^[0-9a-zA-ZçÇãÃâÂêîÎÊõÕáéíóÁÉÍÓàÀ]+$/", $string);	
	}

	public static function IsChars($string, $allowed=array("a-z")){
		return (bool)preg_match("/^[" . implode("", $allowed) . "]+$/", $string);	
	}
	
	
	public static function isValidUsername($string){
		if(strlen($string) < 3 || (strlen($string) > 100)) {
			return false;
		} else {
			return (bool)preg_match("/^[0-9a-zA-ZçÇãÃâÂêîÎÊõÕáéíóÁÉÍÓàÀ\s]+$/", $string);	
		}
	}
	
	public static function isValidPassword($string){
		if(strlen($string) < 5 || (strlen($string) > 100)) {
			return false;
		} else {
			return (bool)preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $string);
		}
	}

	public static function isValidBBcode($string){
	
		return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
	
	}
    
}

?>