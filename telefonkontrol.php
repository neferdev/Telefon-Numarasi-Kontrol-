<?php 
//// kısa bir telefon doğrulama fonksiyonu daha çok geliştirilebilir.

public function mobilephone($str)
	{
		$str = str_replace("+", "", $str);
		$str = str_replace("-", "", $str);
		if (strlen($str) >=10 && strlen($str) <=11 && is_numeric($str) && $str[0] == 0 || $str[0] == 5)
		{
		 return $str;
		}
		
	}
