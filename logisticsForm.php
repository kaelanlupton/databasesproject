<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Logistics Information</h2>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
<?php
    if(isset($_POST['submitLogistics'])){
        $selected_val = $_POST['formLogistics'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
    }
    
    switch($selected_val) {
            
<<<<<<< HEAD
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
    
=======
        case "l1": echo "$selected_val"; break;
            
        case "l2": echo "$selected_val"; break;
            
        case "l3": echo "$selected_val"; break;
            
        case "l4": echo "$selected_val"; break;
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
=======

<?php ?>
>>>>>>> d36e9df6ab2325a49123a0e981537677168334c7
>>>>>>> c0bb4a3a563a59c987cc0a3e8cada5e970289a3c
</table>
</body>
</html> 