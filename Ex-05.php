<?php

//Правим първи for цикъл изписва всички редове
for ($i=0; $i<5; $i++)
{ 
    //И във всеки от петте реда добавя по 1 звезда
    echo "*";
    //И правим още един вложен цикъл който добавя по още една звезда на всеки низходящ ред
    for ($j=0; $j<$i; $j++)
    {   
       echo "*";
       
    }
    echo "</br>";  
}
//Правим абсолютно същия код но в обратна посока който пише звездите в обратен ред
for ($i=4; $i>=0; $i--)
{ 
    
    echo "*";
    
    for ($j=0; $j<$i; $j++)
    {   
       echo "*";
       
    }
    echo "</br>";  

}