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





//                             На {}

// $res = preg_replace('#ab{2,4}a#', '!', 'aa aba abba abbba abbbba abbbbba');
//  echo $res;

// $res = preg_replace('#ab{0,3}a#', '!', 'aa aba abba abbba abbbba abbbbba');
//  echo $res;

// $res = preg_replace('#ab{4,}a#', '!', 'aa aba abba abbba abbbba abbbbba');
//  echo $res;




//                      На \s, \S, \w, \W, \d, \D

// $res = preg_replace('#(a\da)#', '!', 'a1a a2a a3a a4a a5a aba aca');
//   echo $res;

// $res = preg_replace('#(a\d{0,}a)#', '!', 'a1a a22a a333a a4444a a55555a aba aca');
//   echo $res;

// $res = preg_replace('#(a\Db)#', '!', 'avb a1b a2b a3b a4b a5b abb acb');
//   echo $res;

 // $res = preg_replace('#(a(\W)b)#', '!', 'ave a#b a2b a$b a4b a5b a-b acb');  
 //   echo $res;

// $res = preg_replace('#\s#', '!', 'ave a#a a2a a$a a4a a5a a-a aca');
//    echo $res;




//                       На [], '^' - не, [a-zA-Z], кириллицу


// $res = preg_replace('#a[bex]a#', '!', 'aba aea aca aza axa');
//    echo $res;

 // $res = preg_replace('#a[b\.\+\*]a#', '!', 'aba aea aca aza axa a.a a+a a*a');
 //    echo $res;

 // $res = preg_replace('#a[3-7]a#', '!', 'aba aea aca a5a axa a.a a+a a*a');
 //    echo $res;

 // $res = preg_replace('#a[a-g]a#', '!', 'aba aea aca a5a axa a.a a+a a*a');
 //    echo $res;

 // $res = preg_replace('#a[a-fj-s]a#', '!', 'aba aea aca a5a axa aja aka a*a');
 //    echo $res;

 // $res = preg_replace('#a[a-fA-Z]a#', '!', 'aba aea aca a5a axa aAa aKa aLa');
 //    echo $res;

 $res = preg_replace('#a[^e]a#', '!', 'aba aea aca aza axa a-a a#a');
    echo $res;



 ?>