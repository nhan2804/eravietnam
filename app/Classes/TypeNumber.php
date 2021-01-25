<?php
namespace App\Classes;
/**
 * 
 */
class TypeNumber
{
	public $arr;
	public $num;
	function __construct($name)
	{
		$this->num = $this->to_slug($name);
		$this->arr =array(
			"a"=>1,
			"b"=>2,
			"c"=>3,
			"d"=>4,
			"e"=>5,
			"f"=>6,
			"g"=>7,
			"h"=>8,
			"i"=>9,
			"j"=>1,
			"k"=>2,
			"l"=>3,
			"m"=>4,
			"n"=>5,
			"o"=>6,
			"p"=>7,
			"q"=>8,
			"r"=>9,
			"s"=>1,
			"t"=>2,
			"u"=>3,
			"v"=>4,
			"w"=>5,
			"x"=>6,
			"y"=>7,
			"z"=>8
		);
	}
	// Tổng số từ tên
	public function getNameNumber()
	{
		$inner=0;
		for ($i=0; $i <strlen($this->num) ; $i++) {
			$inner+=$this->arr[$this->num[$i]];
		}
		return $inner;
	}
	// Nguyên âm
	public function getVowel()
	{
		$vowel=0;
		for ($i=0; $i <strlen($this->num) ; $i++) {
			$t= $this->num[$i];
			if($t=="u"||$t=="e"||$t=="o"||$t=="a"||$t=="i")
			$vowel+=$this->arr[$t];
		}
		return $vowel;
	}
	// Tổng các số trong 1 số
	public function TotalofNum($v)
	{
		$total=0;
		$arr= $v.'';
		for ($i=0; $i <strlen($arr) ; $i++) {
			$total+=intval($arr[$i]);
		}
		return $total;
	}
	//Phụ âm
	public function Consanants()
	{
		$s=0;
		for ($i=0; $i <strlen($this->num) ; $i++) {
			$t= $this->num[$i];
			if($t=="p"||$t=="k"||$t=="f"||$t=="t"||$t=="s")
			$s+=$this->arr[$t];
		}
		return $s;
	}
	// Chỉ số sứ mệnh
	public function getMission()
	{
		return $this->getNameNumber();
	}
	// chỉ số tâm hồn và tương tác
	public function getMixInnerAndInteractive($value='')
	{
		return abs($this->getInner()-$this->getInteractive());
	}
	// Chỉ số tương tác
	public function getInteractive()
	{
		return $this->Consanants();
	}
	//Chỉ số Tâm hồn
	public function getInner()
	{
		  return $this->TotalofNum($this->getVowel());
	}
	public function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '', $str);
    return $str;
	}
}


?>