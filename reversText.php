<?php
$text = "Привет! Давно не, виделись.";
$result = revertCharacters($text);
echo $text."\n";
echo $result; // Тевирп! Онвад ен, ьсиледив.




function revertCharacters($string) {
    echo "<pre>";
	$arr = preg_split('/\?|\!|\./', $string,-1,PREG_SPLIT_NO_EMPTY);
	$tabyl1 = preg_match_all('/\?|\!|\./', $string, $matches);
	$count = count($arr);
	$revert_str = '';
	$revert_str2 = [];

    for($i = 0; $i<$count;$i++) {
        
        unset($revert_str);
        unset($itog);
        
        $arr_rev_step = preg_split('/\,|\s|\,\s/', $arr[$i],-1,PREG_SPLIT_NO_EMPTY);
        
        $tabyl2 = preg_match_all('/\s|\,\s/', trim($arr[$i]), $matches2);

        $count_arr = count($arr_rev_step);
        
        for ($x = 0; $x < $count_arr; $x++) {
            $arr_rev_step2 = preg_split('/(?<!^)(?!$)/u',$arr_rev_step[$x]);
            $arr_end_step1 = array_reverse($arr_rev_step2);
            $revert_str .= ' ' . implode('', $arr_end_step1) . '' .trim($matches2[0][$x]);
        }

        $itog[$i] = mb_ucfirst(mb_strtolower(trim($revert_str)."".$matches[0][$i]));
        $revert_itog .= ' ' . implode('', $itog);
    }

    return trim($revert_itog);
    }

function mb_ucfirst($str, $encoding='UTF-8')
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }
