<?php
// انشا مصفوفة
$array = array(1,2,3,4,5) ;
// دوال استعلام المصفوفة
echo "عدد العناصر:" . count($array).
"\n"; //5
echo "هل الرقم 3 في المصفوفة" .
(in_array(3,$array)? ":"نعم
لا"") . "\n"; // 
//.. اضافة و حذف العناصر
array_push($array , 6);// اضافة عنصر الى النهايه
echo "6 بعد اضافة:" ;
ptint_r ($array); //[1,2,3,4,5,6]
array_pop($array);// ازالة اخر عنصر
echo"بعد ازاله اخر عنصر:" ;
print_r($array); //[1,2,3,4,5]
array_unshift($array,0);// اضافه عنصر الى البدايه
echo"بعد اضافه 0 الى البدايه:" ;
print_r($array); //[0,1,2,3,4,5]
array_shift($array); // ازاله اول عنصر
echo"بعد ازاله اول عنصر:";
print_r($array); //[1,2,3,4,5]
//... ترتيب المصفوفه
sort($array);//
echo "بعد الترتيب:" ;
print_r($array);//[1,2,3,4,5]
rsort($array); // ترتيب تنازلي
echo " بعد الترتيب التنازلي:" ;
print_r($array); //[5,4,3,2,1]
//.... دمج المصفوفة
$array1 = array(1,2,3) ;
$array2 = array (4,5,6) ;
$merged = array_merge($array1, $array2);
echo"المصفوفه المدمجه:";
print_r($merged); // [1,2,3,4,5,6] 
//..... تصفيه المصفوفات
$evenNumbers = array_filter($merged , function($num)
{return $num % 2 === 0 ; });
echo " الاعداد الزوجيه:";
print_r ($evenNumbers) ; // [2,4,6]
?>