<?php
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
$size = 10;

echo "<b>" . "Имя: " . "</b>" ."</br>";

for($i=0; $i < strlen($name); $i++)
{
    echo "<span style='font-size: $size'>$name[$i]</span>";
    $size+=5;
}

echo "</br>" . "<b>" . "Фамилия: " . "</b>" . "</br>";

for ($i = 0; $i < strlen($surname); $i++) {

    $color1 = rand(0, 230);
    $color2 = rand(0, 230);
    $color3 = rand(0, 230);

    echo "<span style='color:rgb($color1, $color2, $color3)'>$surname[$i]</span>";

    }

    echo "</br>" . "<b>" . "Фигура: " . "</b>" ;

for ($i = 0; $i < $_POST["row"]; $i++)
{

    echo "</br>";
    
    for ($y = 0; $y < $_POST["col"]; $y++)
    {
    echo " * " ;
    }
}

?>