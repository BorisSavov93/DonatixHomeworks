<?php

//Създавам "for" цикъл, които генерира числата от 1 до 10 включително
for ($i=1 ; $i<11 ; $i++){
    // извеждам получените числа
    echo $i;
    // тук поставям условие, което да поставя "-", ако $i е до 9 включително
    if ($i<10){
        echo '-';
    }  
}

//Втори вариант, не мисля че е по-добър от горния
//
// Създавам "for" цикъл, който генерира числата от 1 до 10 вкл.
/*
 for ($j=1 ; $j<11 ; $j++){
    // извеждаме получените числа
    echo $j;
    // докато $j има стойност до 9 включително извеждам разделителя '-'
    while ($j<10){
    echo '-';
    //прекратявам операцията с 'break'
    break;
    }
}
  */
