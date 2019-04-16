<?php

echo "<center>";
$columna =3;

echo "<h1>Deber N2</h1>";

// array predefinido
$array = array("Nombre","Apellido","Edad",
"Carlos","Granda",32,
"Juan","Martinez",31,
"Maria", "Jimenez",21);

//for($a=0; $a<sizeof($array);$a++){
//    echo "<td>$array[$a]  </td>";
//}

echo "<table border= 4px>";

for ($i=0;$i<sizeof($array); $i++)
{
    //echo "<td>El valor de i es: [$i]  </td>";
echo "<tr>";
for ($j=0; $j<$columna; $j++)
{
    echo "<td> $array[$i] </td>";
    $i++;

}
$i--;
echo "</tr>";
} 
echo "</table>";
echo "</center>";

?>