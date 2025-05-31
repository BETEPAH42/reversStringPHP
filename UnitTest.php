<?php
require_once '../reversText.php';
		
class Test extends Revert
{
	static function test(string $str) : bool
	{
		$this->str = $str;
					
		$arr_rev_step = str_split($test_str, 1);
		$arr_rev = array_reverse($arr_rev_step);

		$flag = true;

		for ($i=0; $i < count($arr_rev_step); $i++) { 
			for ($j=count($arr_rev_step)-1; $j >= 0; $j--) { 
				if ($arr_rev_step[$i] == $arr_rev[$j]) {
					$flag = true;
				}
				else {
					$flag = false;
					return $flag;
				}
			}
		}
	return $flag;
	} 
}

$testUnit = Test::test("hello");
var_dump($testUnit);
