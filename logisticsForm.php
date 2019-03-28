<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Logistics Information</h2>

<?php
    if(isset($_POST['submitLogistics'])){
        $selected_val = $_POST['formLogistics'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
    }
    
    switch($selected_val) {
            
        case "l1": 
            // display schedule for a chosen day
            echo "$selected_val";
            break;
            
        case "l2": 
            // display students in a chosen hotel room
            echo "$selected_val"; 
            break;
            
        case "l3": 
            // display conference intake
            echo "$selected_val"; 
            break;
            
        case "l4": 
            // change session day/time/location
            echo "$selected_val"; 
            break;
            
        default: 
            // nothing was selected
            echo("You forgot to choose an option!"); break;
    }
?>
    
</table>
</body>
</html> 