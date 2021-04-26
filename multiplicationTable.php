<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function multiplicationTable()
{
    echo "<table>";
    for ($row = 0; $row <= 100; $row++)
    {
        echo "<tr>";
        for ($column = 0; $column <= 100; $column++)
        {
            if ($row == 0 && $column == 0)
            {    
                echo "<td> </td>";
            } 
            elseif ($row == 0)
            {
                echo "<td>{$column}</td>";
            }
            elseif ($column == 0) 
            {
                echo "<td>{$row}</td>";
            } 
            else 
            {
                echo "<td>" . $column*$row ."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
multiplicationTable();
?>