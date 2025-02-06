<?php
$s = ["qupapi"];

array_push ($s , "munjenjo");
print_r ($s);

$count = count($s);


for($i = 0, $i < $count; $i ++ ){
    print_r($s);
}

array_pop($s);
print_r($s);

array_unshift($s , "munjenjo");
print_r($s);

array_shift($s);
print_r($s);

$s_1 = array_slice($s, 1,1);
print_r($s_1x);

$m = [16, 14, 13, 15, 16, 14, 15];
$m_1 = array_sum($m);
$count = count ($m);

print_r($m_1 / $count);

?>