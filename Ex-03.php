<?php
//Инциализираме три променливи по зададените стойности 
$num = 5; 
$num2 = 8; 
$num3 = 10; 
//Правим три променливи в които да запазим фактуриелите за всяко едно от числата и започваме с 1 за да се пресметне всяко едно число
$factorial = 1;  
$factorial2 = 1;
$factorial3 = 1;
//Правим Цикъл за първото число който умножава числата по низходящ ред,правим същото с другите два цикъла по долу.
for ($cols=$num; $cols>=1; $cols--)   
{    
    $factorial = $factorial * $cols;
}
for ($cols=$num2; $cols>=1; $cols--)   
{    
    $factorial2 = $factorial2 * $cols;
}
for ($cols=$num3; $cols>=1; $cols--)   
{    
    $factorial3 = $factorial3 * $cols;
}
//Изписваме фактуриела на всяко едно число
echo "Факториел от $num е: $factorial". '<br />';
echo "Факториел от $num2 е: $factorial2". '<br />';
echo "Факториел от $num3 е: $factorial3";


