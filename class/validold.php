<?php
class Valid{

	public static function IsUnsignedNumber($integer){
		return (bool)preg_match("/^\+?[0-9]+$/",$integer);
	}

	public static function IsAlphaNumeric($string){
		return (bool)preg_match("/^[0-9a-zA-Z\sçÇãÃâÂêÊõÕáéíóÁÉÍÓàÀ&-]+$/", $string);	
	}
	
	
	public static function isValidUsername($string){
		if((strlen($string) < 3 || (strlen($string) > 100))) {
			return false;
		} else {
			return true;
		}
	}
	
	public static function isValidPassword($string){
		if((strlen($string) < 5 || (strlen($string) > 100))) {
			return false;
		} else {
			return true;
		}
	}
    
}

?>