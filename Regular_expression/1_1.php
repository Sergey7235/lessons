<?php


// $res = preg_replace('#a.b#', '!', 'ahb acb aeb aeeb adcb axeb');
// echo $res;


// $res = preg_replace('#a..a#', '!', 'aba aca aea abba adca abea');
//  echo $res;


// $res = preg_replace('#ab.a#', '!', 'aba aca aea abba adca abea');
//  echo $res;






// $res = preg_replace('#ab+a#', '!', 'aa aba abba abbba abca abea');
//  echo $res;

// $res = preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea');
//  echo $res;

// $res = preg_replace('#ab?a#', '!', 'aa aba abba abbba abca abea');
//  echo $res;

// $res = preg_replace('#(ab)+#', '!', 'aa aba abba abbba abca abea');
//  echo $res;






// $res = preg_replace('#a\.#', '!', 'a.a aba aea');
//  echo $res;

// $res = preg_replace('#2\+3#', '!', '2+3 223 2223');
//  echo $res;

// $res = preg_replace('#2\++3#', '!', '23 2+3 2++3 2+++3 345 567');
//  echo $res;

// $res = preg_replace('#2\+*3#', '!', '23 2+3 2++3 2+++3 445 677');
//  echo $res;

// $res = preg_replace('#\*q+\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
//  echo $res;

// $res = preg_replace('#\*q*\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
//  echo $res;

// $res = preg_replace('#\*q*\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
// echo $res;





// $res = preg_replace('#ab{0,3}a#', '!', 'aa aba abba abbba abbbba abbbbba');
//  echo $res;

$res = preg_replace('#ab{4,}a#', '!', 'aa aba abba abbba abbbba abbbbba');
 echo $res;


 ?>