<!DOCTYPE html>
<html>
<head>
<link href="firstPage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>People Information</h2>

<<<<<<< HEAD
<?php
    if(isset($_POST['submitPeople'])){
        $selected_val = $_POST['formPeople'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
    }
    
    switch($selected_val) {
            
        case "p1": echo "$selected_val"; break;
            
        case "p2": echo "$selected_val"; break;
            
        case "p3": echo "$selected_val"; break;
            
        default: echo("You forgot to choose an option!"); break;
    }
?>
    
=======

>>>>>>> d36e9df6ab2325a49123a0e981537677168334c7
<?php ?>
</table>
</body>
</html> 