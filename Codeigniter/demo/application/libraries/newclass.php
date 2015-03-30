<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newclass {

	function utf8Convert($str) {
	    if(!$str) return false;
	    $utf8 = array(
	            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	            'd'=>'đ|Đ',
	            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
	            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
	            );
	    foreach($utf8 as $key=>$value){
	    	$str = preg_replace("/($value)/i",$key,$str);	
	    } 
	return $str;
	}

    public function alias($str)
    {
    	// chuyển sang không dấu.
    	$str = strtolower($this->utf8Convert($str));
    	//loại bỏ các ký tự khác a->z, 0->9 và khoảng trắng.
    	$str = preg_replace('/[^a-z0-9\s]/i','',$str);
    	//loại bỏ khoảng trắng dư thừa (tìm xem tất cả những nơi có 1 khoảng trắng trở lên thay thế = 1 khoảng trắng).
    	$str = preg_replace("/\s+/", " ",$str);
    	//loại bỏ khoảng trắng ở đầu và cuối. 
		// $str = trim($str);
    	$str = preg_replace("/^\s+|\s+$/", "",$str);
    	//thay thế khoảng trắng bằng '_'.
		$str = str_replace(' ', '_', $str);
    	// echo $str.'<br>';
    	return $str;
    }
}